<div class="page-header">
	<div class="pull-left">
		<h1>Email Template</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Email Template</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if(Yii::app()->User->hasFlash('updateEmailTemplateSuccess')){ ?>
	<ul>
          <?php
                if(Yii::app()->User->getFlash('updateEmailTemplateSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.EDIT_EMAIL_SUCCESS.'</li>';
                }
          ?>						
      </ul>
<?php } ?>
</div>
<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#email-template-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 margin_top20">
	    <?php echo CHtml::link('Search','#',array('class'=>'search-button btn btn-inverse')); ?>
	 </div>
</div>
<div class="box box-color box-bordered">
	<div class="search-form" style="display:none;">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
	<!-- End of Setting up flash success/error message -->
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>Manage Email Template</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='email-template-grid-list-form' id='email-template-grid-list-form'>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'email-template-grid',
						'itemsCssClass' => 'table table-hover table-nomargin table-bordered', 
						'dataProvider'=>$model->search(),
						//'filter'=>$model,
						'columns'=>array(
							array(
								'header'=>'Sr. No.',
								'class'=>'IndexColumn',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'name'=>'emailTitle',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'name'=>'emailSubject',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'name'=>'emailDateUpdated',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'header'=>'Action',
								'class'=>'CButtonColumn',
								'htmlOptions'=>array('style'=>'width:10%;text-align:center;'),
								'buttons' => array(
								     'delete'=>array(
						                       'label' => '<i class="icon-remove"></i>',
	                                            'imageUrl' => false,
	                                            'options' => array(
                                                'class' => 'deletes btn',
                                                'title' => 'Delete',
                                                'style'=>'display:none;'
	                                            ),
						                    ),
								     'update'=>array(
						                       'label' => '<i class="icon-edit"></i>',
	                                            'imageUrl' => false,
	                                            'options' => array(
                                                'class' => 'edit btn',
                                                'title' => 'Update',
	                                            ),
						                    ),
								    'view' => array(
	                                            'label' => '<i class="icon-search"></i>',
	                                            'imageUrl' => false,
	                                            'options' => array(
                                                'class' => 'view btn',
                                                'title' => 'View',
                                                'style'=>'display:none;',
	                                            ),
	                                        ), 
						             ),
							),
						),
					)); ?>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	/**
	*  Reset in Advanced Search
	* @returns {undefined}
	*/
	$('#resetVal').live('click', function(e){
	    $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
	    $.fn.yiiGridView.update('email-template-grid', {url:'<?php echo CController::createUrl("/admin/emailTemplate"); ?>'});
	});
</script>