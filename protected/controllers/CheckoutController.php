<?php
/*
* The checkout controller handles all the request related to checkout and payment.
*/
class CheckoutController extends Controller
{
	

	/**
	* This is the default 'index' action that is invoked
	* when an action is not explicitly requested by users.
	*/
	public function actionIndex()
	{
		if(!isset(Yii::app()->user->isCustomer)){
			$model = new Users;
			$loginModel = new UsersLogin;
			$this->render('login',array('model'=>$model,'loginModel'=>$loginModel));
		}else{
			$this->redirect(array('orderDetails'));
		}
	}

	/*
	* This action shows the order details page.
	*/
	public function actionOrderDetails(){
		if(isset(Yii::app()->user->isCustomer)){
			$userModel = Users::model()->findByPk(Yii::app()->user->userId);
			$shoppingCart = unserialize(Yii::app()->session['cart']);
			//echo "<pre>"; print_r($shoppingCart); die;
			if(!empty($shoppingCart)){
				if(!isset(Yii::app()->session['orderID'])){
					$transaction=$userModel->dbConnection->beginTransaction();
					try{
						/*Entry in `tbl_order` table*/
						$orderModel = new Order();
						$orderModel->scenario = 'addOrder';
						$userID = Yii::app()->user->userId;
						$orderModel->fkCustomerID = $userID;
						$orderModel->orderCustomerFirstName = $userModel->userFirstName;
						$orderModel->orderCustomerLastName = $userModel->userLastName;
						$orderModel->orderCustomerEmail = $userModel->userEmail;
						$orderModel->orderCustomerPhone = $userModel->userPhone;
						$orderModel->orderBillingAddress1 = $userModel->userBillingAddress1;
						$orderModel->orderBillingAddress2 = $userModel->userBillingAddress2;
						$orderModel->orderBillingCountry = $userModel->userBillingCountry;
						$orderModel->orderBillingState = $userModel->userBillingState;
						$orderModel->orderBillingCity = $userModel->userBillingCity;
						$orderModel->orderBillingZipcode = $userModel->userBillingZip;
						$orderModel->orderBillingPhone = $userModel->userBillingPhone;
						$orderModel->orderShippingAddress1 = $userModel->userShippingAddress1;
						$orderModel->orderShippingAddress2 = $userModel->userShippingAddress2;
						$orderModel->orderShippingCountry = $userModel->userShippingCountry;
						$orderModel->orderShippingState = $userModel->userShippingState;
						$orderModel->orderShippingCity = $userModel->userShippingCity;
						$orderModel->orderShippingZipcode = $userModel->userShippingZip;
						$orderModel->orderShippingPhone = $userModel->userShippingPhone;
						$orderModel->orderDateAdded = date('Y-m-d H:i:s');
						$orderModel->orderDateUpdated = date('Y-m-d H:i:s');
						$orderModel->save(false);

						/*Entry in `tbl_order_item` table*/
						$orderItemModel = new OrderItem();
						$totalCartItem = count($shoppingCart);
						for($cartItem = 0; $cartItem < $totalCartItem;$cartItem++){
							$dealDetails = Deals::model()->findByPk($shoppingCart[$cartItem]['dealID']);
							$orderItemModel->fkOrderID = $orderModel->pkOrderID;
							$orderItemModel->fkDealID = $dealDetails->pkDealID;
							$orderItemModel->orderItemName = $dealDetails->dealName;
							$orderItemModel->orderItemPrice = $dealDetails->dealPrice;
							$orderItemModel->orderItemQuantity = $shoppingCart[$cartItem]['qty'];
							$orderItemModel->orderItemTotalPrice = $shoppingCart[$cartItem]['qty']*$dealDetails->dealPrice;
							$orderItemModel->orderItemStatus = 'Pending';
							$orderItemModel->orderItemDateAdded = date('Y-m-d H:i:s');
							$orderItemModel->save(false);
							$orderItemModel->unsetAttributes();
							$orderItemModel->isNewRecord = true;
						}
						$transaction->commit();
						Yii::app()->session['orderID'] = $orderModel->pkOrderID;
					}catch(Exception $e){
						$transaction->rollback();
					}
				}else{
					$orderModel = Order::model()->findByPk(Yii::app()->session['orderID']);	
				}
				$this->render('order-details',array('user'=>$userModel,'shoppingCart'=>$shoppingCart,'order'=>$orderModel));
			}else{
				$this->redirect(array('/shoppingcart'));	
			}
		}else{
			$this->redirect(array('/checkout'));
		}
	}

	/*
	* This action shows the payment page.
	*/
	public function actionPayment(){
		if(isset(Yii::app()->user->isCustomer)){
			$userModel = Users::model()->findByPk(Yii::app()->user->userId);
			$shoppingCart = unserialize(Yii::app()->session['cart']);
			if(!empty($shoppingCart)){
				$this->render('payment',array('user'=>$userModel,'shoppingCart'=>$shoppingCart));
			}else{
				$this->redirect(array('/shoppingcart'));	
			}
		}else{
			$this->redirect(array('/checkout'));
		}
	}

	/*
	* This action shows the billing address in the popup
	*/
	public function actionEditBillingAddress()
	{
		if(isset(Yii::app()->user->isCustomer) && isset(Yii::app()->session['orderID'])){
			$model = Order::model()->findByPk(Yii::app()->session['orderID']);
			if(isset($_POST['Order'])){
				$model->scenario = 'ajaxEditBilling';
				$model->attributes = $_POST['Order'];
				if($model->validate()){
					$model->save();
				}else{
					echo CHtml::errorSummary($model);
				}
			}else{
				$model->billingStateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->orderBillingCountry)),'pkStateID', 'stateName');
				$model->billingCityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->orderBillingState)),'pkCityID', 'cityName');
				$model->shippingStateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->orderShippingCountry)),'pkStateID', 'stateName');
				$model->shippingCityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->orderShippingState)),'pkCityID', 'cityName');
				$this->render('_form_edit_billing',array('model'=>$model));
			}
		}
	}

	/*
	* This action shows the shipping address in the popup
	*/
	public function actionEditShippingAddress()
	{
		if(isset(Yii::app()->user->isCustomer) && isset(Yii::app()->session['orderID'])){
			$model = Order::model()->findByPk(Yii::app()->session['orderID']);
			if(isset($_POST['Order'])){
				$model->scenario = 'ajaxEditShipping';
				$model->attributes = $_POST['Order'];
				if($model->validate()){
					$model->save();
				}else{
					echo CHtml::errorSummary($model);
				}
			}else{
				$model->shippingStateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->orderShippingCountry)),'pkStateID', 'stateName');
				$model->shippingCityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->orderShippingState)),'pkCityID', 'cityName');
				$this->render('_form_edit_shipping',array('model'=>$model));
			}
		}
	}

	/**
	* Function : actionDynamicstates
	* Used to get states on change of country.
	* @access public
	*/
	public function actionDynamicstates()
	{
		$data = array();
		$data=State::model()->findAll('fkCountryID=:fkCountryID', 
	                  array(':fkCountryID'=>(int) $_POST['country']));
	    
	 
	    $data=CHtml::listData($data,'pkStateID','stateName');
	    echo CHtml::tag('option',array('value'=>''),'- Select State -',true);
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}

	/**
	* Function : actionDynamicstates
	* Used to get city on change of state.
	* @access public
	*/
	public function actionDynamiccities()
	{
	    $data=City::model()->findAll('fkStateID=:fkStateID', 
	                  array(':fkStateID'=>(int) $_POST['state']));
	 
	    $data=CHtml::listData($data,'pkCityID','cityName');
	    echo CHtml::tag('option',array('value'=>''),'- Select City -',true);
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',array('value'=>$value),CHtml::encode($name),true);
	    }
	}

	/**
	* Function : actionUpdateOrderComment
	* Used to update the comment for an order by customer.
	* @access public
	*/
	public function actionUpdateOrderComment()
	{
		//print_r(Yii::app()->session['dicount_coupon']); die;
		if(isset(Yii::app()->user->isCustomer) && isset(Yii::app()->session['orderID'])){
			$model = Order::model()->findByPk(Yii::app()->session['orderID']);
			if(isset($_POST['comment'])){
				if(isset(Yii::app()->session['discountCoupon'])){
					$couponDiscount = unserialize(Yii::app()->session['discountCoupon']);
					$model->orderCouponDiscount =  $couponDiscount['totalDiscount'];
				}
				$model->orderCustomerComment = $_POST['comment'];
				$model->save(false);
			}else{
				$model->shippingStateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->orderShippingCountry)),'pkStateID', 'stateName');
				$model->shippingCityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->orderShippingState)),'pkCityID', 'cityName');
				$this->render('_form_edit_shipping',array('model'=>$model));
			}
		}
	}
}