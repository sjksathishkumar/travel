<?php

class CategoryController extends Controller
{

    public $pagination_limit = 3;
    public $pagination_offset = 0;
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex($slug = '')
    {
        $data['categoryDeals'] = array();
    	$dealModel = new Deals;
        $category = Category::model()->findByAttributes(array('categorySlug'=>$slug));
        if(isset($_POST['itemPlus'])){
            $this->pagination_offset = $this->pagination_offset+$_POST['itemPlus'];
        }
        if(count($category)){
            $data['categoryDeals'] = $dealModel->getCategoryDeals($category->pkCategoryID,$this->pagination_offset,$this->pagination_limit);
            $this->render('category-deals',array('data'=>$data,'category'=>$category));
        }else{
            throw new CHttpException(404, 'The requested page does not exist.');  
        }
    }

    /*
    * This function display the featured deals
    */
    public function actionFeatured()
    {
        $data['categoryDeals'] = array();
        $dealModel = new Deals;
        $category = new Category;
        $category->categoryName = 'Featured Deals';
        if(isset($_POST['itemPlus'])){
            $this->pagination_offset = $this->pagination_offset+$_POST['itemPlus'];
        }
        $data['categoryDeals'] = $dealModel->getFeaturedDeal($this->pagination_offset,$this->pagination_limit);
        $this->render('category-deals',array('data'=>$data,'category'=>$category));
    }

    /*
    * This function display the Other deals
    */
    public function actionOther()
    {
        $data['categoryDeals'] = array();
        $dealModel = new Deals;
        $category = new Category;
        $category->categoryName = 'Other Deals';
        if(isset($_POST['itemPlus'])){
            $this->pagination_offset = $this->pagination_offset+$_POST['itemPlus'];
        }
        $data['categoryDeals'] = $dealModel->getOthersDeal($this->pagination_offset,$this->pagination_limit);
        $this->render('category-deals',array('data'=>$data,'category'=>$category));
    }

    /*
    * This function display the Other deals
    */
    public function actionCity($cityId = 0)
    {
        $data['categoryDeals'] = array();
        $dealModel = new Deals;
        $category = new Category;
        $category->categoryName = 'city deals';
        if($cityId){
            if(isset($_POST['itemPlus'])){
                $this->pagination_offset = $this->pagination_offset+$_POST['itemPlus'];
            }
            $data['categoryDeals'] = $dealModel->getCityDeal($cityId,$this->pagination_offset,$this->pagination_limit);
            $category->categoryName = City::model()->findByPk($cityId)->cityName." deals";
            $this->render('category-deals',array('data'=>$data,'category'=>$category));
        }
    }
}