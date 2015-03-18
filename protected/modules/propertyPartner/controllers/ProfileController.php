<?php

 /*Dashboard controller is used to perform the Dashboard operations of Property Partner*/

class ProfileController extends Controller {

	/*
	 * This action manage the user profile
	 */

	public function actionIndex() {
	    if (isset(Yii::app()->user->isPropertyPartner)) {
	    	$id = Yii::app()->user->pkPropertyPartnerID;
            $model = $this->loadModel($id);
			$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
			$model->propertyPartnerDateOfBirth = date('m/d/Y',strtotime($model->propertyPartnerDateOfBirth));
			$oldPassword = $loginModel->userPassword;
			$model->scenario = 'property_partner_update_front';
			if(isset($_POST['PropertyPartners']) && isset($_POST['UsersLogin'])){
				$model->attributes = $_POST['PropertyPartners'];
				$model->propertyPartnerDateOfBirth = date('Y-m-d',strtotime($_POST['PropertyPartners']['propertyPartnerDateOfBirth']));
				$model->propertyPartnerDateModified = date('Y-m-d H:i:s');
				$loginModel->attributes = $_POST['UsersLogin'];
				if($model->validate() & $loginModel->validate()){
					$model->update(false);
					if(!empty($loginModel->userPassword)){
						$loginModel->userPassword = md5($loginModel->userPassword);
					}else{
						$loginModel->userPassword = $oldPassword;
					}
					$loginModel->userEmail = $model->propertyPartnerEmail;
					$loginModel->update(false);
					Yii::app()->user->setFlash('updatePropertyPartnerSuccess',true);
	    			$this->redirect(array('index'));
				}else{
						$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['PropertyPartners']['propertyPartnerCountry'])),'pkStateID', 'stateName');
						$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['PropertyPartners']['propertyPartnerState'])),'pkCityID', 'cityName');
				} 
			}else{
				$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->propertyPartnerCountry)),'pkStateID', 'stateName');
				$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->propertyPartnerState)),'pkCityID', 'cityName');
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
		$model=PropertyPartners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


}


?>