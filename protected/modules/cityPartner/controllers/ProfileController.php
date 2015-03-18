<?php

 /*Dashboard controller is used to perform the Dashboard operations of City Partner*/

class ProfileController extends Controller {

	/*
	 * This action manage the user profile
	 */

	public function actionIndex() {
	    if (isset(Yii::app()->user->isCityPartner)) {
	    	$id = Yii::app()->user->pkCityPartnerID;
            $model = $this->loadModel($id);
			$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
			$model->cityPartnerDateOfBirth = date('m/d/Y',strtotime($model->cityPartnerDateOfBirth));
			$oldPassword = $loginModel->userPassword;
			$model->scenario = 'property_partner_update_front';
			if(isset($_POST['CityPartners']) && isset($_POST['UsersLogin'])){
				$model->attributes = $_POST['CityPartners'];
				$model->cityPartnerDateOfBirth = date('Y-m-d',strtotime($_POST['CityPartners']['cityPartnerDateOfBirth']));
				$model->cityPartnerDateModified = date('Y-m-d H:i:s');
				$loginModel->attributes = $_POST['UsersLogin'];
				if($model->validate() & $loginModel->validate()){
					$model->update(false);
					if(!empty($loginModel->userPassword)){
						$loginModel->userPassword = md5($loginModel->userPassword);
					}else{
						$loginModel->userPassword = $oldPassword;
					}
					$loginModel->userEmail = $model->cityPartnerEmail;
					$loginModel->update(false);
					Yii::app()->user->setFlash('updateCityPartnerSuccess',true);
	    			$this->redirect(array('index'));
				}else{
						$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['CityPartners']['cityPartnerCountry'])),'pkStateID', 'stateName');
						$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['CityPartners']['cityPartnerState'])),'pkCityID', 'cityName');
				} 
			}else{
				$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->cityPartnerCountry)),'pkStateID', 'stateName');
				$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->cityPartnerState)),'pkCityID', 'cityName');
				$loginModel->userPassword = '';
			}
			$this->render('index',array(
					'model'=>$model,
					'loginModel'=>$loginModel
				));
	    } else {
	        $this->redirect(Yii::app()->baseUrl);
	    }
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=CityPartners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


}


?>