<?php

class PagesController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'main';
    public $varAction = 'cms';  //variable to make menu as active in layout

    
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($slug = null)
    {
        if ($slug == '')
        {
            $this->redirect(Yii::app()->params['siteURL']);
        }
        else
        {
            $varPageData = Cms::Model()->findByAttributes(array('cmsSlug' => $slug));
            if ($varPageData == null)
            {
                throw new CHttpException(404, 'The specified Page cannot be found.');
            }
            else
            {
                // # Page Related Data
                CommonFunctions::getMetaTags($varPageData->cmsSlug);
                $this->render('inner', array('varPageData' => $varPageData));
            }
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Cms the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = Cms::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

}
