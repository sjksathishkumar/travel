<?php

 /*Dashboard controller is used to perform the Dashboard operations of Property Partner*/

class DashboardController extends Controller {

	/*
	 * This action display the dashboard
	 */

	public function actionIndex() {
	    if (isset(Yii::app()->user->isCityPartner)) {
	        $parner = new CityPartners();
	        $data = array();
	        $data['userLoginId'] = Yii::app()->user->userLoginId;
	        $data['partnerDetails'] = $parner->getCityPartnerDetails($data['userLoginId']);
	        $this->render('index', array('data' => $data));
	    } else {
	        $this->redirect(Yii::app()->baseUrl);
	    }
	}






}


?>