<?php

class HomepageController extends Controller
{
	 public $layout = 'main';
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout = 'main'; 
		$data = array();
		$attribs = array('bannerStatus'=>'1');
		$criteria = new CDbCriteria(array('order'=>'bannerOrder ASC'));
		$data['bannerModel'] = Banner::model()->findAllByAttributes($attribs, $criteria);
		$data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
		$data['cms'] = Cms::model()->findAllByAttributes(array('pkCmsID'=>'1'));
		//$data['otherDeals'] = Deals::model()->getOthersDeal();
		$data['socialMedia'] = Configurations::model()->getSocialMediaLinks();
		$this->render('index',array('data'=>$data));
	}
}
?>