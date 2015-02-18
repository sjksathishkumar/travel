<?php
/* @var $this CouponsController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="page-header">
	<div class="pull-left">
		<h1>Manage Discount Coupons</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Discount Coupons',array('#')); ?></li>
	</ul>
	<div class="close-bread"><?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::app()->User->hasFlash('addCouponsSuccess')) || (Yii::app()->User->hasFlash('updateCouponsSuccess')) || (Yii::app()->User->hasFlash('deleteCouponsSuccess'))){ ?>
		<ul>
			<?php
				if(Yii::app()->User->getFlash('addCouponsSuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.ADD_COUPON_SUCCESS.'</li>';
				}else if(Yii::app()->User->getFlash('updateCouponsSuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.UPDATE_COUPON_SUCCESS.'</li>';
				}
			?>						
	      </ul>
	<?php } ?>
</div>
<!-- End of Setting up flash success/error message -->
<?php	
	Yii::app()->clientScript->registerScript('search', "
							$('.search-button').click(function(){
								$('.search-form').toggle();
								$('.add-form').css('display','none');
								return false;
							});
							$('.search-form form').submit(function(){
								$('#coupons-grid').yiiGridView('update', {
									data: $(this).serialize()
								});
								return false;
							});
						");
?>
<div class="row-fluid">
	<div class="span12 margin_top20">
		<?php echo CHtml::link('Add Coupon',array('create'),array('class'=>'add-button btn btn-primary')); ?>
		<?php echo CHtml::link('Search','#',array('class'=>'search-button btn btn-inverse')); ?>
	</div>
</div>
<div class="box box-color box-bordered">
	<div class="search-form" style="display:none;">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
	</div><!-- search-form -->	
</div>
<div class="box box-color box-bordered">
	<div class="add-form" style="display:none;">
		<?php $this->renderPartial('_form',array(
			'model'=>$model,
		)); ?>
	</div><!-- search-form -->	
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>Coupons List</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='coupons-grid-list-form' id='coupons-grid-list-form'>					
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'coupons-grid',
						'itemsCssClass' => 'table table-hover table-nomargin table-bordered', 
						'dataProvider'=>$model->search(),
						//'filter'=>$model,
						
						'columns'=>array(
							array(
								'header'=> 'Sr. No.',
								'class'=>'IndexColumn',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('header'=> '#',
								'class'=>'CCheckBoxColumn',
								'selectableRows' => 2,
								'headerHtmlOptions'=>array('class'=>'with-checkbox'),
								'htmlOptions'=>array('class'=>'with-checkbox','style'=>'text-align:center'),					                              
							 ),							
							array('name'=>'couponName',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name'=>'couponCode',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name'=>'couponType',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),	
							array('name'=>'couponDiscountVariable',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name'=>'couponMinimumPurchaseAmount',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name' => 'couponStartDate',
                                'type' => 'raw',
                                'value' => '$data->couponStartDate',
                                'htmlOptions' => array('style' => 'text-align:center'),								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name' => 'couponEndDate',
                                'type' => 'raw',
                                'value' => '$data->couponEndDate',
                                'htmlOptions' => array('style' => 'text-align:center'),								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name' => 'couponStatus',
                                'type' => 'raw',
                                'value' => 'CommonFunctions::statusFurmate($data->couponStatus)',
                                'htmlOptions' => array('style' => 'text-align:center'),
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
									'view'=>array(
										'label' => '<i class="icon-search"></i>',
                                        'imageUrl' => false,
                                        'options' => array(
                                        'class' => 'view btn',
                                        'title' => 'View',
                                        ),
									),
								),
								'afterDelete'=>'function(link,success,data){if(success){fun_deleteMsg()}}',
							),
						),
					));?>
					<div style="padding-left:1%">
						<select id="coupons-status" name="coupons-status" class="input-large nomargin select2-me" onchange="couponsMultipleAction();">
							<option value="Select">Select</option>
							<option value="0">Inactive</option>
							<option value="1">Active</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	/**
	*  For delete message
	*/
	function fun_deleteMsg(){	    
		$("#breadcrumbs-msg").show();
		$("#breadcrumbs-msg").html("<ul><li><span class='readcrum_without_link_success'><?php echo DELETE_COUPON_SUCCESS;?></span></li></ul>"); 
		setTimeout(function () {
			    $("#breadcrumbs-msg").fadeOut('slow');
			    }, 5000);
	}
	function couponsMultipleAction()
	{
		var checked_num = $('input[name="coupons-grid_c1[]"]:checked').length;
		if (!checked_num) {
			alert('Please select atleast one.');
		}	
		else
		{
			if ($('#coupons-status').val()=='Select') {
				alert('Please Select valid option');
			}else{
				var status = confirm('Are you sure to change the status of selected record(s)?');   
				if(status)			
				{
					var data=$("#coupons-grid-list-form").serialize();
					$.ajax({
					type: 'POST',
					url: '<?php echo CController::createUrl("coupons/changeStatus"); ?>',
					data:data,
					success:function(data){
						     if(data)
							{ 
								var statusMsg = 'Coupons(s) '+data+' successfully.';
								$.fn.yiiGridView.update('coupons-grid');
								$('#breadcrumbs-msg').css('display','block');
								$('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
								$('#breadcrumbs-msg').fadeOut(5000);
								statusMsg = '';
							}
					  },error: function(data) { // if error occured
						alert("Error occured.Please try again.");
						$.fn.yiiGridView.update('coupons-grid');
					},
					dataType:'html'
					});
				}
			}
		}
		$("#coupons-status option[value='Select']").attr("selected","selected");
		$('#coupons-status.select2-me').select2('val','Select');
	}

	    /**
		*  Reset in Advanced Search
		* @returns {undefined}
		*/
	   $('#resetVal').live('click', function(e){
			$(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
			$.fn.yiiGridView.update('coupons-grid', {url:'<?php echo CController::createUrl("/admin/coupons/index"); ?>'});
		});

</script>