<?php

class SearchController extends Controller
{
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public $pagination_limit = 3;
	public function actionIndex()
	{
		$data = array();
		$dealModel = new Deals;
		$cmsModel = new Cms;
		$bannerModel = new Banner;
		if(isset($_POST['perPage']) && !empty($_POST['perPage'])){
			$this->pagination_limit = $_POST['perPage'];
		}
		$resultRecordsCount = $dealModel->getSearchedDealsCount($_GET);
        $page_size = $this->pagination_limit;
        $pages =new CPagination($resultRecordsCount);
        $pages->setPageSize($page_size);

        $data['arrSearchResult'] = $dealModel->getSearchedDeals($_GET,$pages->offset,$page_size);
		$data['cmsPageDetails'] = $cmsModel->getCmsContentBySlug('search');
		$data['pageBanner'] = $bannerModel->getPageBannerBySlug('search');
		$data['pages']=$pages;
		$this->render('search',array('data'=>$data));
	}

	/**
	 * This is the default 'getSubcategories' action that is invoked
	 * when an action getSubcategories invoked by users.
	 */
	public function actionGetSubcategories(){
		$cateModel = new Category;
		echo $cateModel->getSubcategoryDropDown();
	}
}