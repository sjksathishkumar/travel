<?php

class DealsController extends Controller
{

    private $reviews_pagination_limit = 2;
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex($id = '')
    {
        $data = array();
    	$data['relatedDeals'] = array();
    	$dealModel = new Deals;
        $reviewsModel = new Reviews;
    	$data['dealDetails'] = $dealModel->getDealDeatail($id);
    	if(count($data['dealDetails'])>0){
    		$catID = $data['dealDetails'][0]->fkCategoryID;
    		$data['relatedDeals'] = $dealModel->getRelatedDeals($id,$catID);

            if(isset($_POST['perPage']) && !empty($_POST['perPage'])){
                $this->reviews_pagination_limit = $_POST['perPage'];
            }
            $resultRecordsCount = $reviewsModel->getReviewByDealIDCount($id);
            $page_size = $this->reviews_pagination_limit;
            $pages =new CPagination($resultRecordsCount);
            $pages->setPageSize($page_size);
            $data['pages']=$pages;
            $data['reviews'] = $reviewsModel->getReviewByDealID($id,$pages->offset,$page_size);
    	}else{
            throw new CHttpException(404, 'The requested page does not exist.');
            
        }
    	
    	$this->render('index',array('data'=>$data));
    }

     /*
     * This action will be execute to admin for view the product.
     */
    public function actionAdminview($id = '')
    {
        $data = array();
        $data['relatedDeals'] = array();
        $data['isAdmin'] = 1;
        $dealModel = new Deals;
        $reviewsModel = new Reviews;
        $data['dealDetails'] = $dealModel->getDealDeatailAdmin($id);
        if(count($data['dealDetails'])>0){
            $catID = $data['dealDetails'][0]->fkCategoryID;
            $data['relatedDeals'] = $dealModel->getRelatedDeals($id,$catID);

            if(isset($_POST['perPage']) && !empty($_POST['perPage'])){
                $this->reviews_pagination_limit = $_POST['perPage'];
            }
            $resultRecordsCount = $reviewsModel->getReviewByDealIDCount($id);
            $page_size = $this->reviews_pagination_limit;
            $pages =new CPagination($resultRecordsCount);
            $pages->setPageSize($page_size);
            $data['pages']=$pages;
            $data['reviews'] = $reviewsModel->getReviewByDealID($id,$pages->offset,$page_size);
        }else{
            throw new CHttpException(404, 'The requested page does not exist.');
            
        }
        
        $this->render('index',array('data'=>$data));
    }


    /*
    * This action will be executed to review a deal by customer.
    */
    public function actionAjaxReview()
    {
        if(isset(Yii::app()->user->isCustomer)){
            if(isset($_POST['deal_id']) && isset($_POST['review'])){
                $userID = Yii::app()->user->userId;
                $reviewModel = new Reviews;
                $record = $reviewModel->findByAttributes(array('fkUserID'=>$userID,'fkDealID'=>$_POST['deal_id']));
                if(!count($record)>0){
                    $reviewModel->fkUserID = $userID;
                    $reviewModel->fkDealID = $_POST['deal_id'];
                    $reviewModel->nickname = $_POST['nickname'];
                    $reviewModel->reviewSubject = $_POST['summary'];
                    $reviewModel->reviewContent = $_POST['review'];
                    $reviewModel->reviewStatus = '0';
                    $reviewModel->reviewAddDate = time();
                    $reviewModel->save();
                    echo "Success";
                }else{
                    echo "AlreadyReviewed";
                }
            }
        }else{
            echo "LoginPlease";
        }
    }

}