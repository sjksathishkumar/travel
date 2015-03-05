<?php

class CustomerController extends Controller {

    /**
     * This is the default 'registration' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionAjaxRegistration() {
        $model = new Users('front_end_user_registration_ajax');
        $model->attributes = $_POST;

        /* Insert to login table */
        $loginModel = new UsersLogin;
        $loginModel->userEmail = $model->userEmail;
        $loginModel->userPassword = md5($_POST['userPassword']);
        $loginModel->userType = 'C';
        $loginModel->customerDateModified = date('Y-m-d H:i:s');

        if ($model->validate()) {
            if ($loginModel->save(false)) {

                /* Save */
                //$model->userPassword = md5($model->userPassword);
                $model->customerAccountActivationToken = base64_encode(uniqid(microtime()));
                $model->fkUserLoginID = $loginModel->pkUserLoginID;
                $model->save();

                /* generate and send Email */
                $varMailTo = trim($model->userEmail);
                $activationLink = $url = Yii::app()->params['siteURL'] . "customer/activateAccount?userID=" . base64_encode($model->pkCustomerID) . "&token=" . $model->customerAccountActivationToken;
                $varKeywordContent = array('{to_name}', '{account_activation_link}');
                $varKeywordValueContent = array(ucfirst($model->customerFirstName), $activationLink);
                CommonFunctions::sendMail('3', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');


                echo "Success";
            }
        } else {
            //echo "Please fill valid and complete information.<br/>";
            echo CHtml::errorSummary($model);
        }
    }

    /**
     * This is the default 'registration' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionRegistration() {
        $model = new Users('front_end_user_registration');
        $model->attributes = $_POST['Users'];

        /* Insert to login table */
        $loginModel = new UsersLogin;
        $loginModel->userEmail = $model->userEmail;
        $loginModel->userPassword = md5($_POST['UsersLogin']['userPassword']);
        $loginModel->userType = 'C';
        $loginModel->customerDateModified = date('Y-m-d H:i:s');

        if ($model->validate()) {
            if ($loginModel->save(false)) {

                /* Save */
                //$model->userPassword = md5($model->userPassword);
                $model->customerAccountActivationToken = base64_encode(uniqid(microtime()));
                $model->fkUserLoginID = $loginModel->pkUserLoginID;
                $model->save();

                /* generate and send Email */
                $varMailTo = trim($model->userEmail);
                $activationLink = $url = Yii::app()->params['siteURL'] . "customer/activateAccount?userID=" . base64_encode($model->pkCustomerID) . "&token=" . $model->customerAccountActivationToken;
                $varKeywordContent = array('{to_name}', '{account_activation_link}');
                $varKeywordValueContent = array(ucfirst($model->customerFirstName), $activationLink);
                CommonFunctions::sendMail('3', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');
                Yii::app()->user->setFlash('registration_verification_message', 'We have just sent you a verification mail. Please check your email and complete the registration.');
                $this->redirect(array('/checkout'));
            }
        } else {
            $loginModel->userPassword = '';
            $loginModel->repassword = '';
            $this->render('/checkout/login', array('model' => $model, 'loginModel' => $loginModel));
        }
    }

    /*
     * This action is used to activate the user account.
     */

    public function actionActivateAccount() {
        if (isset($_GET['userID']) && isset($_GET['token'])) {
            $userModel = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']), 'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '0'));
            if ($userModel) {
                $userModel->customerStatus = 1;
                $userModel->save();

                /* generate and send Email */
                $varMailTo = trim($userModel->userEmail);
                $varSiteUrl = Yii::app()->params['siteURL'];
                $varKeywordContent = array('{to_name}', '{site_url}');
                $varKeywordValueContent = array(ucfirst($userModel->customerFirstName), $varSiteUrl);
                CommonFunctions::sendMail('4', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');
                $this->render('/checkout/registration-verification', array('message' => 'Congratulation,Your account has been verified successfully.'));
            } else {
                $this->render('/checkout/registration-verification', array('message' => 'This is either invalid or expired verification URL.'));
            }
        }
    }

    /*
     * This action is used to login user using ajax.
     */

    public function actionAjaxlogin() {
        $modelUsersLogin = new UsersLogin;
        if (isset($_POST['userEmail']) && isset($_POST['customerPassword'])) {
            $customerDetails = $modelUsersLogin->getCustomerDetails($_POST);
            if (count($customerDetails) > 0) {
                $customerDetails->login($userType = 'C');
                echo "Success";
            } else {
                echo AJAX_LOGIN_FAILED;
            }
        }
    }

    /*
     * This action is used to login user.
     */

    public function actionLogin() {
        $model = new Users;
        $modelUsersLogin = new UsersLogin;
        if (isset($_POST['userEmail']) && isset($_POST['customerPassword'])) {
            $customerDetails = $modelUsersLogin->getCustomerDetails($_POST);
            if (count($customerDetails) > 0) {
                $customerDetails->login($userType = 'C');
                $this->redirect(array('/checkout/orderDetails'));
            } else {
                Yii::app()->user->setFlash('login_error', AJAX_LOGIN_FAILED);
                $this->render('/checkout/login', array('model' => $model, 'loginModel' => $modelUsersLogin));
            }
        }
    }

    
    /*
     * This action is used to login user.
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
            echo CHtml::tag('option',
                       array('value'=>$value),CHtml::encode($name),true);
        }
    }


    /*
     * This action display the dashboard
     */

    public function actionDashboard() {
        if (isset(Yii::app()->user->isCustomer)) {
            $customer = new Users();
            $data = array();
            $data['usrId'] = Yii::app()->user->userId;
            $data['customersDetails'] = $customer->getUserDetails($data['usrId']);
            $this->render('dashboard', array('data' => $data));
        } else {
            $this->redirect('/Travelogini');
        }
    }

    /*
     * This action is used to update the editPersonal
     */

    public function actionUpdate() {
        if (isset(Yii::app()->user->isCustomer)) {
                $id = Yii::app()->user->userId;
                $model = Users::model()->findByPk($id);
                $loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
                $model->customerDateOfBirth = date('d-m-Y',strtotime($model->customerDateOfBirth));
                $oldPassword = $loginModel->userPassword;
                $model->scenario = 'update_user_front_end';
                if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
                  $model->attributes = $_POST['Users'];
                  $model->customerDateOfBirth = date('Y-m-d',strtotime($_POST['Users']['customerDateOfBirth']));
                  $model->customerDateModified = date('Y-m-d H:i:s');
                  $loginModel->attributes = $_POST['UsersLogin'];
                  if($model->validate() & $loginModel->validate()){
                    $model->update(false);
                    if(!empty($loginModel->userPassword)){
                      $loginModel->userPassword = md5($loginModel->userPassword);
                    }else{
                      $loginModel->userPassword = $oldPassword;
                    }
                    $loginModel->userEmail = $model->userEmail;
                    $loginModel->update(false);
                    Yii::app()->user->setFlash('updateAccountSuccess',true);
                      $this->redirect(array('dashboard'));
                  }else{
                      $model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['Users']['customerCountry'])),'pkStateID', 'stateName');
                      $model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['Users']['customerState'])),'pkCityID', 'cityName');    
                  } 
                }else{
                  $model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->customerCountry)),'pkStateID', 'stateName');
                  $model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->customerState)),'pkCityID', 'cityName');
                  $loginModel->userPassword = '';
                }
                $this->render('editPersonal',array(
                    'model'=>$model,
                    'loginModel'=>$loginModel
                  ));
              





        /*

            $data = array();
            $data['usrId'] = Yii::app()->user->userId;
            $customer = Users::model()->findByPk($data['usrId']);
            $loginModel = UsersLogin::model()->findByPk($customer->attributes['fkUserLoginID']);
            echo "<pre>";
            print_r($customer->attributes); die();
            $this->render('editPersonal', array('data' => $data, 'model' => $customer, 'loginModel'=>$loginModel));            
        */} else {
            $this->redirect('/Travelogini');
        }
    }

    /*
     * This action is used to update the editPersonal View
     */

    public function actionUpdateAddress() {
        if (isset(Yii::app()->user->isCustomer)) {
              $customer = new Users();
              $usersLogin = new UsersLogin();
              $data['usrId'] = Yii::app()->user->userId;
              $customer = Users::model()->findByPk($data['usrId']);
              //$data = array();
              //$data['usrId'] = Yii::app()->user->userId;
              //$data['customersDetails'] = $customer->getUserDetails($data['usrId']); 
              $usersLogin->scenario = 'user-update-password-profile-form';
              $customer->scenario = 'user-update-profile-form';
              if(isset($_POST['Users'])){
              $customer->attributes = $_POST['Users'];
              }
              if(isset($_POST['UsersLogin'])){
              $usersLogin->attributes = $_POST['UsersLogin'];
              $usersLogin->repeatPassword = $_POST['UsersLogin']['repeatPassword'];
              }  
              if($customer->validate()){ 
                  if($usersLogin->validate()){  
                        $this->render('editAddress', array('data' => $data, 'customer' => $customer, 'loginModel'=>$usersLogin));                   
                  }
                  else
                  {
                        echo '<pre>';
                        print_r($_POST);
                        print_r($usersLogin->errors) ;

                  }
                  //echo "tested ok";
              } 
              else
              {
                    echo '<pre>';
                    print_r($customer->errors) ;
                   
              } die;
//              if($usersLogin->validate()){  
//                    echo "<pre>";
//                    print_r($_POST);                    
//              }
//              else
//              {
//                    echo '<pre>';
//                    print_r($_POST);
//                    print_r($usersLogin->errors) ;
//                   
//              }
              $this->render('editPersonal', array('data' => $data, 'model' => $customer, 'loginModel'=>$loginModel));
              $this->render('editAddress');
        } else {
            $this->redirect('/Travelogini');
        }
    }

    /*
     * This action is used to logout to user.
     */

    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(array('/'));
    }

}