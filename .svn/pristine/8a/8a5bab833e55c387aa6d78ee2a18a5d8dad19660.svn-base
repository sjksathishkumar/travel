<?php

class DealsController extends Controller
{

    /**
     * Displays the login page
     */
    public $layout = '../layouts/main';
    public $varAction = 'deals';  //variable to make menu as active in layout

    /**
     * @return array action filters
     */

    public function filters()
    {
        if (!isset(Yii::app()->user->isAdmin))
        {
            Yii::app()->user->setFlash('invalid_login', true);
            $this->redirect(array('/admin'));
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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('allow', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /*
     * This action shows manage deal section
     */

    public function actionIndex($id = '')
    {
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - Manage Deals";
        $model = new Deals('search');
        $model->unsetAttributes();  // clear any default values
        if ($id != '')
        {
            $model->dealCity = $id;
        }
        if (isset($_GET['Deals']))
            $model->attributes = $_GET['Deals'];
        $this->render('index', array('model' => $model));
    }

    /*
     * This action shows manage deal section
     */
    public function actionCategoryDeals($id = '')
    {
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - Manage Deals";
        $model = new Deals('search');
        $model->unsetAttributes();  // clear any default values
        if ($id != '')
        {
            $model->fkCategoryID = $id;
        }
        if (isset($_GET['Deals']))
            $model->attributes = $_GET['Deals'];
        
        $this->render('index', array('model' => $model));
    }

    /*
     * This action create a deal.
     */

    public function actionCreate()
    {
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - Add Deal";
        $model = new Deals;
        $dealImagesModel = new DealsImages;

        if (isset($_POST['Deals']))
        {
            $thumb = new EPhpThumb();
            $thumb->init();
            $model->attributes = $_POST['Deals'];
            $dates = explode('-', $_POST['Deals']['dealDateRange']);
            $model->dealStartDate = strtotime(trim($dates[0]));
            $model->dealEndDate = strtotime(trim($dates[1])." 23:59:59");
            $model->dealAddDate = date('Y-m-d H:i:s');
            $model->dealModifiedDate = date('Y-m-d H:i:s');
            $model->dealID = $model->getDealId(10);
            $model->fkUserID = Yii::app()->user->userId;
            $flag = CommonFunctions::validateImageDimension($_FILES['dealImage']['tmp_name'],'285','280');
            if ($model->validate() & $flag)
            {
                if ($model->save())
                {
                    if($model->dealOnMegaMenu == '1'){
                        Deals::model()->updateAll(array('dealOnMegaMenu'=>'0'),'fkCategoryID="'.$model->fkCategoryID.'" AND pkDealID != "'.$model->pkDealID.'"');
                    }
                    if (!empty($_FILES['dealImage']))
                    {
                        $images = CUploadedFile::getInstancesByName('dealImage');
                        $i = 0;
                        foreach ($images as $image => $pic)
                        {
                            if ($pic->saveAs(DEAL_IMAGES_PATH . $pic->name))
                            {
                                $dealImagesModel = new DealsImages;
                                $dealImagesModel->fkDealID = $model->pkDealID;
                                $dealImagesModel->dealImagePath = $pic->name;
                                $dealImagesModel->dealImageAlt = $_POST['dealImagesAlt'][$i];
                                $dealImagesModel->dealImageAddDate = date('Y-m-d H:i:s');
                                $dealImagesModel->save();
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(284, 177)->save(DEAL_IMAGES_PATH .'284X177/'. $pic->name);
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(285, 280)->save(DEAL_IMAGES_PATH .'285X280/'. $pic->name);
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(58, 48)->save(DEAL_IMAGES_PATH .'58X48/'. $pic->name);
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(80, 70)->save(DEAL_IMAGES_PATH .'80X70/'. $pic->name);
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(197, 110)->save(DEAL_IMAGES_PATH .'197X110/'. $pic->name);
                                $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(284, 146)->save(DEAL_IMAGES_PATH .'284X146/'. $pic->name);
                            }
                            $i++;
                        }
                    }
                    Yii::app()->user->setFlash('addDealSuccess', true);
                    $this->redirect(array('index'));
                }
            }else{
                Yii::app()->user->setFlash('image_error_msg','Images is not of proper dimension.');
            }
        }
        $this->render('create', array(
            'model' => $model, 'dealImagesModel' => $dealImagesModel
        ));
    }

    /*
     * This action update a deal.
     */

    public function actionUpdate($id = 0)
    {
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - Update Deal";
        $model = $this->loadModel($id);
        $model->dealDateRange = date('m/d/Y', $model->dealStartDate) . ' - ' . date('m/d/Y', $model->dealEndDate);

        if (isset($_POST['Deals']))
        {
            $thumb = new EPhpThumb();
            $thumb->init();
            if (!empty($_POST['deletedID']))
            {
                $deletedIds = str_replace(' ', ',', trim($_POST['deletedID']));
            }
            $model->attributes = $_POST['Deals'];
            $dates = explode('-', $_POST['Deals']['dealDateRange']);
            $model->dealStartDate = strtotime(trim($dates[0]));
            $model->dealEndDate = strtotime(trim($dates[1])." 23:59:59");
            $model->dealModifiedDate = date('Y-m-d H:i:s');
            $model->fkUserID = Yii::app()->user->userId;
            //echo "<pre>";print_r($_FILES['dealImage']['tmp_name']); die;
            $flag = CommonFunctions::validateImageDimension($_FILES['dealImage']['tmp_name'],'285','280');
            if ($model->validate() & $flag)
            {
                if ($model->update())
                {
                    if($model->dealOnMegaMenu == '1'){
                        Deals::model()->updateAll(array('dealOnMegaMenu'=>'0'),'fkCategoryID="'.$model->fkCategoryID.'" AND pkDealID != "'.$model->pkDealID.'"');
                    }
                    if (!empty($_FILES['dealImage']))
                    {
                        $images = array();
                        for ($k = 0; $k < count($_FILES['dealImage']['name']); $k++)
                        {
                            if (!empty($_FILES['dealImage']['name'][$k]))
                            {
                                $images = CUploadedFile::getInstancesByName('dealImage[' . $k . ']');
                                $pic = $images[0];
                                if ($pic->saveAs(DEAL_IMAGES_PATH . $pic->name))
                                {
                                    if (empty($_POST['pkImageID'][$k]))
                                    {
                                        $dealImagesModel = new DealsImages;
                                        $dealImagesModel->fkDealID = $model->pkDealID;
                                        $dealImagesModel->dealImagePath = $pic->name;
                                        $dealImagesModel->dealImageAlt = $_POST['dealImagesAlt'][$k];
                                        $dealImagesModel->dealImageAddDate = date('Y-m-d H:i:s');
                                        $dealImagesModel->save();
                                    }
                                    else
                                    {
                                        $dealImagesModel = DealsImages::model()->findByPk($_POST['pkImageID'][$k]);
                                        $dealImagesModel->fkDealID = $model->pkDealID;
                                        $dealImagesModel->dealImagePath = $pic->name;
                                        $dealImagesModel->dealImageAlt = $_POST['dealImagesAlt'][$k];
                                        //$dealImagesModel->dealImageModifyDate = date('Y-m-d H:i:s');
                                        $dealImagesModel->update();
                                    }
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(284, 177)->save(DEAL_IMAGES_PATH .'284X177/'. $pic->name);
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(285, 280)->save(DEAL_IMAGES_PATH .'285X280/'. $pic->name);
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(58, 48)->save(DEAL_IMAGES_PATH .'58X48/'. $pic->name);
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(80, 70)->save(DEAL_IMAGES_PATH .'80X70/'. $pic->name);
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(197, 110)->save(DEAL_IMAGES_PATH .'197X110/'. $pic->name);
                                    $thumb->create(DEAL_IMAGES_PATH . $pic->name)->adaptiveResize(284, 146)->save(DEAL_IMAGES_PATH .'284X146/'. $pic->name);
                                }
                            }
                            else
                            {
                                if (!empty($_POST['pkImageID'][$k]))
                                {
                                    $dealImagesModel = DealsImages::model()->findByPk($_POST['pkImageID'][$k]);
                                    $dealImagesModel->dealImageAlt = $_POST['dealImagesAlt'][$k];
                                    //$dealImagesModel->dealImageModifyDate = date('Y-m-d H:i:s');
                                    $dealImagesModel->update();
                                }
                            }
                            if (!empty($deletedIds))
                            {
                                DealsImages::model()->deleteAll('pkImageID IN (' . $deletedIds . ')');
                            }
                        }
                    }
                    Yii::app()->user->setFlash('editDealSuccess', true);
                    $this->redirect(array('index'));
                }
            }else{
                Yii::app()->user->setFlash('image_error_msg','Images is not of proper dimension.');
            }
        }
        $dealImagesModel = DealsImages::model()->findAllByAttributes(array('fkDealID' => $id));
        $this->render('update', array(
            'model' => $model, 'dealImagesModel' => $dealImagesModel,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Category the loaded model
     * @throws CHttpException
     */
    public function loadModel($id = 0)
    {
        $model = Deals::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /*
     * This function is used to view the deal.
     */

    public function actionView($id = 0)
    {
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - View Deal";
        $model = $this->loadModel($id);
        $dealImagesModel = DealsImages::model()->findAllByAttributes(array('fkDealID' => $id));
        $this->render('view', array('model' => $model, 'dealImagesModel' => $dealImagesModel));
    }

    /*
     * This function is used to delete the deal.
     */

    public function actionDelete($id = 0)
    {
        if ($id)
        {
            //Deals::model()->updateByPk($id, array('dealStatus' =>2,'dealDateModified'=>date('Y-m-d H:i:s')));
            Deals::model()->deleteByPk($id);
            Yii::app()->user->setFlash('deleteDealSuccess', true);
        }
        $this->redirect(array('index'));
    }

    /*
     * This action shows manage deal section
     */

    public function actionManageCity($cityID = '')
    {
        $this->layout = '/layouts/column1';
        $this->pageTitle = Yii::app()->params['SiteTitle'] . " - Manage city";
        $model = new Deals();
        $city = new City();
        //Find the deals associated with this city
//
        $modelAssociatedCity = Deals::model()->findAllByAttributes(
                array(), $condition = 'dealCity = :dealCity AND dealStatus = :dealStatus', $params = array(
            ':dealCity' => $cityID,
            ':dealStatus' => '1',
                )
        );
        $countAsssociatedCity = count($modelAssociatedCity);
//        }
        $this->render('manage_city', array('model' => $model, 'modelCity' => $city, 'countAsssociatedCity' => $countAsssociatedCity, 'cityID' => $cityID));
    }

    /*
     * This action shows manage deal section
     */

    public function actionFetchCity()
    {
        $data = City::model()->getCities();

        $data = CHtml::listData($data, 'pkCityID', 'cityName');
        foreach ($data as $value => $name)
        {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    public function actionAddCity()
    {
        $modelCity = new City();
        //Add city
        if (isset($_POST['add_city_name']) && !empty($_POST['add_city_name']))
        {
            $modelCity->cityName = $_POST['add_city_name'];
            $modelCity->cityStatus = '1';
            $modelCity->cityDateAdded = date('Y-m-d H:i:s');
            $modelCity->cityDateModified = date('Y-m-d H:i:s');
            $modelCity->save();
            $this->actionManageCity();
        }
        //delete city
        if (isset($_POST['delete_city_name']) && !empty($_POST['delete_city_name']))
        {
            $modelCity->deleteAll(array('condition' => 'pkCityID=:pkCityID', 'params' => array(':pkCityID' => $_POST['delete_city_name'])));
            $this->actionManageCity($_POST['delete_city_name']);
        }

        die;
    }

    /*
     * This function is used to change the status of the deal.
     */

    public function actionChangeStatus()
    {
        if (isset($_POST['dealStatus']) && $_POST['dealStatus'] == 1)
        {
            $row = Deals::model()->updateByPk($_POST['deals-grid_c1'], array('dealStatus' => 1, 'dealDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['deals-grid_c1'] as $value)
            {
                Deals::model()->updateStatus($value, 1);
            }
            echo "activated";
        }
        else if (isset($_POST['dealStatus']) && $_POST['dealStatus'] == 0)
        {
            $row = Deals::model()->updateByPk($_POST['deals-grid_c1'], array('dealStatus' => 0, 'dealDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['deals-grid_c1'] as $value)
            {
                Deals::model()->updateStatus($value, 0);
            }
            echo "inactivated";
        }
        else if (isset($_POST['dealStatus']) && $_POST['dealStatus'] == 2)
        {
            //$row = Deals::model()->updateByPk($_POST['deals-grid_c1'], array('dealStatus' => 2, 'dealDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['deals-grid_c1'] as $value)
            {
                Deals::model()->deleteByPk($value);
            }
            echo "deleted";
        }
    }

}
