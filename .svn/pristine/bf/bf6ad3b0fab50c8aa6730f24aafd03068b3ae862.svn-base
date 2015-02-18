<?php

class ShoppingcartController extends Controller
{
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	//public $pagination_limit = 3;
	public function actionIndex()
	{
		
		$cartDeals = array();
		$arrSessionCart = array();
		if(isset(Yii::app()->session['cart'])){
			$arrSessionCart = unserialize(Yii::app()->session['cart']);
			$dealIDArray = array();
			foreach ($arrSessionCart as $value) {
			    $dealIDArray[] = $value['dealID']; 
			}
			$cartDeals = Deals::model()->getAllDealsByPk($dealIDArray);
			if(isset(Yii::app()->session['discountCoupon'])){
				$dealModel = new Deals;
	        	$dealIDArray = array();
				$discountCoupon = unserialize(Yii::app()->session['discountCoupon']);
				$couponMinimumPurchaseAmount = $discountCoupon['couponMinimumPurchaseAmount'];
				$arrSessionCart = unserialize(Yii::app()->session['cart']);
				foreach ($arrSessionCart as $value) {
				    $dealIDArray[] = $value['dealID']; 
				}
				$cartDeals = $dealModel->getAllDealsByPk($dealIDArray);
				$amountInCart = $dealModel->cartItemsTotal($cartDeals,$arrSessionCart);
				if($couponMinimumPurchaseAmount > $amountInCart){
					unset(Yii::app()->session['discountCoupon']);
				}else{
					if($discountCoupon['couponType'] == 'Percentage'){
						$totalDiscount = ($amountInCart*$discountCoupon['couponDiscountVariable'])/100;
					}else{
						$totalDiscount = $discountCoupon['couponDiscountVariable'];
					}
					$discountCoupon['totalDiscount'] = $totalDiscount;
					Yii::app()->session['discountCoupon'] = serialize($discountCoupon);
				}
			}
		}
		$this->render('cart',array('cartDeals'=>$cartDeals,'arrSessionCart'=>$arrSessionCart));
	}

	/*
	* This action is used to add deal into cart.
	*/
	public function actionAdd(){
		$dealModel = new Deals;
		if(isset($_POST['dealQuantity']) && isset($_POST['dealID']) && isset($_POST['submit'])){
			$pid = $_POST['dealID'];
			$qty = $_POST['dealQuantity'];
			if($pid>0 && $qty>0){
				if(isset(Yii::app()->session['cart'])){ 
					$arrSessionCart = unserialize(Yii::app()->session['cart']);
					if(CommonFunctions::product_exists_in_cart($pid,$arrSessionCart)){
						$max = count($arrSessionCart);
						for($i=0;$i<$max;$i++){
				            if($pid==$arrSessionCart[$i]['dealID']){
				                $arrSessionCart[$i]['qty'] +=$qty;
				                $availQty = $dealModel->getAvilableQuantity($pid);
				                if($availQty>=$arrSessionCart[$i]['qty']){
				                	if(isset(Yii::app()->session['orderID'])){
				                		$orderItemModel = OrderItem::model()->findByAttributes(array('fkOrderID'=>Yii::app()->session['orderID'],'fkDealID'=>$pid));
				                		if($orderItemModel){
				                			$orderItemModel->orderItemQuantity = $arrSessionCart[$i]['qty'];
				                			$orderItemModel->orderItemTotalPrice = $orderItemModel->orderItemPrice*$orderItemModel->orderItemQuantity;
				                			$orderItemModel->update(false);
				                		}
				                	}
				                	Yii::app()->session['cart'] = serialize($arrSessionCart);
				                }
				                break;
				            }
				        }
					}else{
						$max=count($arrSessionCart);
						$availQty = $dealModel->getAvilableQuantity($pid);
				        if($availQty>=$qty){
							$arrSessionCart[$max] = array('dealID'=>$pid,'qty'=>$qty);
							if(isset(Yii::app()->session['orderID'])){
								$orderID = Yii::app()->session['orderID'];
		                		$orderItemModel = new OrderItem();
		                		if($orderItemModel){
		                			$dealModel = Deals::model()->findByPk($pid);
		                			$orderItemModel->fkDealID = $pid;
		                			$orderItemModel->fkOrderID = $orderID;
		                			$orderItemModel->orderItemName = $dealModel->dealName;
		                			$orderItemModel->orderItemPrice = $dealModel->dealPrice;
		                			$orderItemModel->orderItemQuantity = $qty;
		                			$orderItemModel->orderItemTotalPrice = $orderItemModel->orderItemPrice*$orderItemModel->orderItemQuantity;
		                			$orderItemModel->orderItemStatus = "Pending";
		                			$orderItemModel->orderItemDateAdded = date('Y-m-d H:i:s');
		                			$orderItemModel->save(false);
		                		}
		                	}
							Yii::app()->session['cart'] = serialize($arrSessionCart);
						}
					}
				}
				else{
					Yii::app()->session->add('cart',serialize(array('0'=>array('dealID'=>$pid,'qty'=>$qty))));
				}
			}
		}
		$this->redirect('index');
	}

	/*
	* This action is used to update the shopping cart.
	*/
	public function actionUpdate()
	{
		$dealModel = new Deals;
		$flag = 0;
		if(isset($_POST['dealQuantity']) && isset($_POST['dealID'])){
			$arrSessionCart = unserialize(Yii::app()->session['cart']);
			$deals = $_POST['dealID'];
			$qtys = $_POST['dealQuantity'];
			$totalItem = count($deals);
			for($i=0;$i<$totalItem;$i++){
				$availQty = $dealModel->getAvilableQuantity($deals[$i]);
				if(intval($qtys[$i]) > 0 && $deals[$i] > 0){
					if($availQty>=$qtys[$i]){
						$arrSessionCart[$i] = array('dealID'=>$deals[$i],'qty'=>intval($qtys[$i]));
						if(isset(Yii::app()->session['orderID'])){
	                		$orderItemModel = OrderItem::model()->findByAttributes(array('fkOrderID'=>Yii::app()->session['orderID'],'fkDealID'=>$deals[$i]));
	                		if($orderItemModel){
	                			$orderItemModel->orderItemQuantity = $qtys[$i];
	                			$orderItemModel->orderItemTotalPrice = $orderItemModel->orderItemPrice*$orderItemModel->orderItemQuantity;
	                			$orderItemModel->update(false);
	                		}
	                	}
					}else{
						$flag = 1;
						Yii::app()->user->setFlash('quantity_exceed','Deal quantity entered is not in stock.');
					}
				}
			}
			if(!$flag){
				Yii::app()->user->setFlash('cart_updated','Shopping cart updated successfully.');
			}
			Yii::app()->session['cart'] = serialize($arrSessionCart);
		}
		$this->redirect('index');
	}

	/*
	* This action is used to remove deal from cart.
	*/
	public function actionRemove($pid)
	{
		$pid=intval($pid);
		if($pid){
			$arrSessionCart = unserialize(Yii::app()->session['cart']);
			$max=count($arrSessionCart);
			for($i=0;$i<$max;$i++){
				if($pid==$arrSessionCart[$i]['dealID']){
					if(isset(Yii::app()->session['orderID'])){
                		$orderItemModel = OrderItem::model()->deleteAllByAttributes(array('fkOrderID'=>Yii::app()->session['orderID'],'fkDealID'=>$pid));
                	}
                	Yii::app()->user->setFlash('product_removed','Product removed from cart successfully.');
					unset($arrSessionCart[$i]);
					break;
				}
			}
			$arrSessionCart=array_values($arrSessionCart);
			Yii::app()->session['cart'] = serialize($arrSessionCart);
		}
		$this->redirect(array('index'));
	}

	/*
	* This action is used to Apply Coupon Code using ajax.
	*/
	public function actionApplyCoupon()
	{
		if(isset($_POST['couponCode'])){
			$couponModel = new Coupons;
			$dealModel = new Deals;
			if(!isset(Yii::app()->session['discountCoupon'])){
				$couponData = $couponModel->getCouponCode($_POST['couponCode']);
				if(count($couponData) > 0){
					$couponType = $couponData[0]->couponType;
					$couponDiscountVariable = $couponData[0]->couponDiscountVariable;
					$couponMinimumPurchaseAmount = $couponData[0]->couponMinimumPurchaseAmount;
					$dealIDArray = array();
					$arrSessionCart = unserialize(Yii::app()->session['cart']);
					foreach ($arrSessionCart as $value) {
					    $dealIDArray[] = $value['dealID']; 
					}
					$cartDeals = $dealModel->getAllDealsByPk($dealIDArray);
					$amountInCart = $dealModel->cartItemsTotal($cartDeals,$arrSessionCart);
					if($couponMinimumPurchaseAmount <= $amountInCart){
						if($couponType == 'Percentage'){
							$totalDiscount = ($amountInCart*$couponDiscountVariable)/100;
						}else{
							$totalDiscount = $couponDiscountVariable;
						}
						Yii::app()->session->add('discountCoupon',serialize(array('couponType'=>$couponType,'couponDiscountVariable'=>$couponDiscountVariable,'couponMinimumPurchaseAmount'=>$couponMinimumPurchaseAmount,'totalDiscount'=>$totalDiscount)));
						$this->redirect('index');
					}else{
						Yii::app()->user->setFlash('invalid_coupon','You have to purchase minimum '.$couponData[0]->couponMinimumPurchaseAmount.' to use this coupon.');
						$this->redirect('index');	
					}
				}else{
					Yii::app()->user->setFlash('invalid_coupon','You have entered an invalid coupon code.');
					$this->redirect('index');
				}
			}else{
				Yii::app()->user->setFlash('invalid_coupon','You have already applied for discount coupon.');
				$this->redirect('index');
			}
		}
	}
}