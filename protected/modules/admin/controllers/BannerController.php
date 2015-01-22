<?php

class BannerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';
	public $varAction='settings';		//variable to make menu as active in layout
	

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		if( !isset(Yii::app()->user->isAdmin) )
		{
			Yii::app()->user->setFlash('invalid_login',true);
			$this->redirect( array('/admin') );
		}
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('allow',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionAdd()
	{
		$model=new Banner;
		$model->scenario = 'add_banner';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Banner']))
		{
			$model->attributes=$_POST['Banner'];
			$model->bannerDateAdded = date('Y-m-d H:i:s');
			$model->bannerDateModified = date('Y-m-d H:i:s');
			if($model->fkCmsID=='1'){
				$model->scenario = 'slider_banner_add';
			}else{
				$model->scenario = 'other_banner_add';
			}
			$model->bannerImage=CUploadedFile::getInstance($model,'bannerImage');
			if($model->validate()){
				if($model->save()){
					$model->bannerImage->saveAs(BANNERS_PATH.$model->bannerImage);
					Yii::app()->user->setFlash('addBannerSuccess',true);
					$this->redirect(array('index'));
				}
			}
		}

		$this->render('add',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		//echo $id;
		//die;
		$model=$this->loadModel($id);		
		$model->scenario = 'update_banner';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);		
		if(isset($_POST['Banner']))
		{			
			$model->attributes=$_POST['Banner'];
			$model->bannerDateModified = date('Y-m-d H:i:s');	
			if($model->fkCmsID=='1'){
				$model->scenario = 'slider_banner_update';
			}else{
				$model->scenario = 'other_banner_update';
			}
					
			
			if($_FILES['Banner']['name']['bannerImage']){			
				if($model->validate()){
					$model->bannerImage=CUploadedFile::getInstance($model,'bannerImage');
					if($model->save()){					
						$model->bannerImage->saveAs(BANNERS_PATH.$model->bannerImage);								
						Yii::app()->user->setFlash('editBannerSuccess',true);
						$this->redirect(array('index'));
					}
				}
			}else{
				if($model->validate()){
					if($model->save()){					
						Yii::app()->user->setFlash('editBannerSuccess',true);
						$this->redirect(array('index'));
					}
				}
			}			
		}

		$this->render('update',array(
			'model'=>$model,'type'=>'edit'
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Banner('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Banner'])){			
			$model->attributes=$_GET['Banner'];
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Banner the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Banner::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Banner $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='banner-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionChangeStatus(){
		if(isset($_POST['banners-status']) && $_POST['banners-status']==1){
			$row = Banner::model()->updateByPk($_POST['banners-grid_c1'], array('bannerStatus' =>1,'bannerDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['banners-status']) && $_POST['banners-status']==0){
			$row = Banner::model()->updateByPk($_POST['banners-grid_c1'], array('bannerStatus' =>0,'bannerDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}else if(isset($_POST['banners-status']) && $_POST['banners-status']==2){
			$row = Banner::model()->deleteByPk($_POST['banners-grid_c1']);
			echo "deleted";
		}
	}
}
