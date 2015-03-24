<?php

 /*Member controller is used to perform the member related information like singin and singup members*/

class PartnerController extends Controller {

	/**
	 * This is the default 'signup' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	public function actionSignup() {
		$this->render('signup');
	}


	public function actionFree() {
		$property = new PropertyPartners;
		$city = new CityPartners;
		$modelUsersLogin = new UsersLogin;
		$this->render('free', array('property' => $property,'city' => $city,'loginModel'=>$modelUsersLogin));
	}


	public function actionBasic() {
		$property = new PropertyPartners;
		$city = new CityPartners;
		$modelUsersLogin = new UsersLogin;
		$this->render('basic', array('property' => $property,'city' => $city,'loginModel'=>$modelUsersLogin));
	}

	public function actionPro() {
		$property = new PropertyPartners;
		$city = new CityPartners;
		$modelUsersLogin = new UsersLogin;
		$this->render('pro', array('property' => $property,'city' => $city,'loginModel'=>$modelUsersLogin));
	}

	public function actionCheckUserName()
	{
		$uname = $_POST['uname'];
		$userLogin = new UsersLogin();
		$userNameAvailability = $userLogin->checkUserName($uname);
		$count = count($userNameAvailability);
		if($count == 0)
		{
			echo "success";
		}
		else{
			echo "error";
		}
	}


	public function actionCheckUserEmail()
	{
		$uemail = $_POST['uemail'];
		$userLogin = new UsersLogin();
		$userEmailAvailability = $userLogin->checkUserEmail($uemail);
		$count = count($userEmailAvailability);
		if($count == 0)
		{
			echo "success";
		}
		else{
			echo "error";
		}
	}




}

