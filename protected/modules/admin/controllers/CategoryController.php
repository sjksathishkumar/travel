<?php

class CategoryController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '../layouts/main';
    public $varAction = 'category';  //variable to make menu as active in layout

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

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id = 0)
    {
        $model = $this->loadModel($id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Category;
        $model->scenario = 'add_category';
        $model->categoryDateAdded = date('Y-m-d H:i:s');
        $model->categoryDateModified = date('Y-m-d H:i:s');
        if (isset($_POST['Category']))
        {
            $model->attributes = $_POST['Category'];
            $model->categorySlug = CommonFunctions::create_slug($model->categoryName);
            $model->categoryHierarchy = $_POST['Category']['fkParentCategoryID'] ? Category::model()->findByPk($_POST['Category']['fkParentCategoryID'])->categoryHierarchy . "," : '';
            $model->categoryLevel = $_POST['Category']['fkParentCategoryID'] ? Category::model()->findByPk($_POST['Category']['fkParentCategoryID'])->categoryLevel + 1 : '0';
            $model->categoryImage = CUploadedFile::getInstanceByName('categoryImage');
            //echo "<pre>";print_r($model->attributes); die;
            if ($model->validate())
            {
                $model->save();
                if ($model->categoryLevel)
                {
                    Category::updateStatus($model->pkCategoryID, $model->categoryStatus);
                }
                $model->categoryHierarchy = $model->categoryHierarchy . $model->pkCategoryID;
                $model->save();
                $model->categoryImage->saveAs(CATEGORIES_PATH . $model->categoryImage);
                Yii::app()->user->setFlash('addCategorySuccess',true);
                $this->redirect(array('/admin/category'));
            }
        }
        $model->categoryOption = Category::getAllCategories($model->pkCategoryID);
        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model->scenario = 'update_category';
        $model->categoryDateModified = date('Y-m-d H:i:s');
        if (isset($_POST['Category']))
        {
            $model->attributes = $_POST['Category'];
            $model->categorySlug = CommonFunctions::create_slug($model->categoryName);
            $model->categoryHierarchy = ($_POST['Category']['fkParentCategoryID'] ? Category::model()->findByPk($_POST['Category']['fkParentCategoryID'])->categoryHierarchy . "," : '') . $model->pkCategoryID;
            $model->categoryLevel = $_POST['Category']['fkParentCategoryID'] ? Category::model()->findByPk($_POST['Category']['fkParentCategoryID'])->categoryLevel + 1 : '0';
            
            if($_FILES['categoryImage']['name']){           
                if($model->validate()){
                    $model->categoryImage = CUploadedFile::getInstanceByName('categoryImage');
                    if($model->save()){   
                        Category::updateStatus($model->pkCategoryID, $model->categoryStatus);              
                        $model->categoryImage->saveAs(CATEGORIES_PATH.$model->categoryImage);  
                        Yii::app()->user->setFlash('editCategorySuccess',true);                            
                        $this->redirect(array('index'));
                    }
                }
            }else{
                if($model->validate()){
                    if($model->save()){  
                        Category::updateStatus($model->pkCategoryID, $model->categoryStatus); 
                        Yii::app()->user->setFlash('editCategorySuccess',true);
                        $this->redirect(array('index'));
                    }
                }
            }
        }

        $model->categoryOption = Category::getAllCategories($model->pkCategoryID);
        $this->render('update', array(
            'model' => $model,'type'=>'edit'
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        Category::updateStatus($id, '2');
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        $totalDeals = Deals::model()->findAllByAttributes(array('fkCategoryID'=>$id));
        $count = count($totalDeals);
        if($count){
            echo "This category contains ".$count." deals. If you want to see the list of deals <a href='".Yii::app()->baseUrl."/admin/deals/categoryDeals/id/".$id."' target='_blank'>click here</a>.";
        }
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $model = new Category('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Category']))
            $model->attributes = $_GET['Category'];
        $this->render('manage', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Category the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Category::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Category $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'category-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionChangeStatus()
    {
        if (isset($_POST['categoryStatus']) && $_POST['categoryStatus'] == 1)
        {
            $row = Category::model()->updateByPk($_POST['category-grid_c1'], array('categoryStatus' => 1, 'categoryDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['category-grid_c1'] as $value)
            {
                Category::model()->updateStatus($value, 1);
            }
            echo "activated";
        }
        else if (isset($_POST['categoryStatus']) && $_POST['categoryStatus'] == 0)
        {
            $row = Category::model()->updateByPk($_POST['category-grid_c1'], array('categoryStatus' => 0, 'categoryDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['category-grid_c1'] as $value)
            {
                Category::model()->updateStatus($value, 0);
            }
            echo "inactivated";
        }
        else if (isset($_POST['categoryStatus']) && $_POST['categoryStatus'] == 2)
        {
            $row = Category::model()->updateByPk($_POST['category-grid_c1'], array('categoryStatus' => 2, 'categoryDateModified' => date('Y-m-d H:i:s')));
            foreach ($_POST['category-grid_c1'] as $value)
            {
                Category::model()->updateStatus($value, 2);
            }
            echo "deleted";
        }
    }
}
