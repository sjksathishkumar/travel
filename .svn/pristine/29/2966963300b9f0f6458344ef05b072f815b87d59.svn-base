<?php
/* @var $this CityController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="page-header">
	<div class="pull-left">
		<h1>Manage Cities</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Cities',array('#')); ?></li>
	</ul>
	<div class="close-bread"><?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::app()->User->hasFlash('addCitySuccess')) || (Yii::app()->User->hasFlash('updateCitySuccess')) || (Yii::app()->User->hasFlash('deleteCitySuccess'))){ ?>
		<ul>
			<?php
				if(Yii::app()->User->getFlash('addCitySuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.ADD_CITY_SUCCESS.'</li>';
				}else if(Yii::app()->User->getFlash('updateCitySuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.UPDATE_CITY_SUCCESS.'</li>';
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
								$('#city-grid').yiiGridView('update', {
									data: $(this).serialize()
								});
								return false;
							});
						");
	/*Yii::app()->clientScript->registerScript('create', "
							$('.add-button').click(function(){
								$('.add-form').toggle();
								$('.search-form').css('display','none');
								return false;
							});
							$('.container-fluid').on('submit','.add-form form',function(e){
								e.preventDefault();
								$.post($(this).attr('action'),$(this).serialize(),function(data){
									$('#city-grid').html($(data).find('#city-grid').html());
									$('.search-form').html($(data).find('.search-form').html());
									$('.add-form').html($(data).find('.add-form').html());
									$('#breadcrumbs-msg').html($(data).find('#breadcrumbs-msg').html());
									$('#breadcrumbs-msg').css('display','block');
									$('#breadcrumbs-msg').fadeOut(5000);
									$('.select2-me').select2(); 
								});
								return false;
							});
						");*/
?>
<div class="row-fluid">
	<div class="span12 margin_top20">
		<?php echo CHtml::link('Add City',array('create'),array('class'=>'add-button btn btn-primary')); ?>
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
				<h3><i class="icon-table"></i>City List</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='city-grid-list-form' id='city-grid-list-form'>					
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'city-grid',
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
							array('name'=>'cityName',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name'=>'fkStateID',
								'value'=>'$data->state->stateName',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),		
							array('name' => 'cityStatus',
                                'type' => 'raw',
                                'value' => 'CommonFunctions::statusFurmate($data->cityStatus)',
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
									'view'=>array(
										'label' => '<i class="icon-search"></i>',
                                        'imageUrl' => false,
                                        'options' => array(
                                        'class' => 'view btn',
                                        'title' => 'View',
                                        'style'=>'display:none;'
                                        ),
									),
								),
								'afterDelete'=>'function(link,success,data){if(success){fun_deleteMsg()}}',
							),
						),
					));?>
					<div style="padding-left:1%">
						<select id="city-status" name="city-status" class="input-large nomargin select2-me" onchange="cityMultipleAction();">
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
		$("#breadcrumbs-msg").html("<ul><li><span class='readcrum_without_link_success'><?php echo DELETE_BANNER_SUCCESS;?></span></li></ul>"); 
		setTimeout(function () {
			    $("#breadcrumbs-msg").fadeOut('slow');
			    }, 5000);
	}
	function cityMultipleAction()
	{
		var checked_num = $('input[name="city-grid_c1[]"]:checked').length;
		if (!checked_num) {
			alert('Please select atleast one.');
		}	
		else
		{
			if ($('#city-status').val()=='Select') {
				alert('Please Select valid option');
			}else{
				var status = confirm('Are you sure to change the status of selected record(s)?');   
				if(status)			
				{
					var data=$("#city-grid-list-form").serialize();
					$.ajax({
					type: 'POST',
					url: '<?php echo CController::createUrl("city/changeStatus"); ?>',
					data:data,
					success:function(data){
						     if(data)
							{ 
								var statusMsg = 'City(s) '+data+' successfully.';
								$.fn.yiiGridView.update('city-grid');
								$('#breadcrumbs-msg').css('display','block');
								$('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
								$('#breadcrumbs-msg').fadeOut(5000);
								statusMsg = '';
							}
					  },error: function(data) { // if error occured
						alert("Error occured.Please try again.");
						$.fn.yiiGridView.update('city-grid');
					},
					dataType:'html'
					});
				}
			}
		}
		$("#city-status option[value='Select']").attr("selected","selected");
		$('#city-status.select2-me').select2('val','Select');
	}

	    /**
		*  Reset in Advanced Search
		* @returns {undefined}
		*/
	   $('#resetVal').live('click', function(e){
			$(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
			$.fn.yiiGridView.update('city-grid', {url:'<?php echo CController::createUrl("/admin/city"); ?>'});
		});

</script>