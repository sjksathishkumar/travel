<?php

class HomepageController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$data = array();
		$data['bannerModel'] = Banner::model()->findAllByAttributes(array('bannerStatus'=>'1','fkCmsID'=>'1'));
		$data['featuredDeals'] = Deals::model()->getFeaturedDeal();
		$data['popularDeals'] = array();
		$data['otherDeals'] = Deals::model()->getOthersDeal();
		$data['socialMedia'] = Configurations::model()->getSocialMediaLinks();
		$this->render('index',array('data'=>$data));
	}
}
?>