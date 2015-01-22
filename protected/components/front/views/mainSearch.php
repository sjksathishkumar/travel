<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'mainSearchForm',
                                                            'enableAjaxValidation'=>false,
                                                            'method'=>'get',
                                                            'action'=>Yii::app()->baseUrl.'/search',
                                                            'htmlOptions'=>array(
                                                                    'novalidate'=>'novalidate',
                                                            ),
                                                        )
                                    );?>
	    <?php echo CHtml::link('<span>Search by Location</span>','javascript:void(0);',array('class'=>'loc-btn current','title'=>'Search by Location'));?>
	    <?php echo CHtml::link('<span>Search by Category</span>','javascript:void(0);',array('class'=>'cat-btn','title'=>'Search by Category'));?>
	    <div class="bg-slide">
            <?php echo CHtml::textField('location',isset($_GET['location'])?$_GET['location']:'Search By Location',array('class'=>'input-slide srch-ico location-search','onblur'=>"if(this.value=='')this.value='Search By Location';", 'onfocus'=>"if(this.value=='Search By Location')this.value='';"));?>
            <?php echo CHtml::textField('category',isset($_GET['category'])?$_GET['category']:'Search By Category',array('class'=>'input-slide srch-ico category-search','onblur'=>"if(this.value=='')this.value='Search By Category';", 'onfocus'=>"if(this.value=='Search By Category')this.value='';"));?>
	        <?php echo CHtml::textField('outlet',isset($_GET['outlet'])?$_GET['outlet']:'Enter Outlet Name',array('class'=>'input-slide edit-ico outlet-search','onblur'=>"if(this.value=='')this.value='Enter Outlet Name';", 'onfocus'=>"if(this.value=='Enter Outlet Name')this.value='';"));?>
	        <?php echo CHtml::htmlButton('<span>SEARCH</span>',array('class'=>'btn-slide','type'=>'submit','title'=>'SEARCH'));?>
	    </div>
	<?php $this->endWidget();?>
</div>