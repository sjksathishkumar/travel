<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="page-header">
	<div class="pull-left">
		<h1>Manage Customers</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Customers',array('#')); ?></li>
	</ul>
	<div class="close-bread"><?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
	<?php  if( (Yii::app()->User->hasFlash('addCustomerSuccess')) || (Yii::app()->User->hasFlash('updateCustomerSuccess')) || (Yii::app()->User->hasFlash('deleteCustomerSuccess'))){ ?>
		<ul>
			<?php
				if(Yii::app()->User->getFlash('addCustomerSuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.ADD_CUSTOMER_SUCCESS.'</li>';
				}else if(Yii::app()->User->getFlash('updateCustomerSuccess'))
				{
					echo '<li><span class="readcrum_without_link_success">'.UPDATE_CUSTOMER_SUCCESS.'</li>';
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
								return false;
							});
							$('.search-form form').submit(function(){
								$('#customers-grid').yiiGridView('update', {
									data: $(this).serialize()
								});
								return false;
							});
						");
?>
<div class="row-fluid">
	<div class="span12 margin_top20">
		<?php echo CHtml::link('Add Customer',array('/admin/customers/create'),array('class'=>'btn btn-primary')); ?>
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
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>Customers Summary</h3>
			</div>
			<div class="box-content nopadding">
				<form action="<?php echo CController::createUrl("print/customers"); ?>" name='customers-grid-list-form' id='customers-grid-list-form' method="post" onSubmit="return multipleAction()">
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'customers-grid',
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
							array('name'=>'userFirstName',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),	
							array('name'=>'userLastName',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),							
							array('name'=>'userEmail',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),							
							array('name'=>'userPhone',								
								'htmlOptions'=>array('style'=>'text-align:center'),
							),	
							array('name'=>'userStatus',
								'type' => 'raw',
								'value'=>'CommonFunctions::statusFurmate($data->userStatus)',
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
						<select id="customers-status" name="customers-status" class="input-large nomargin select2-me" onchange="customerMultipleAction();">
							<option value="Select">Select</option>
							<option value="0">Inactive</option>
							<option value="1">Active</option>
							<option value="2">Delete</option>
						</select>
					</div>
					<div style="padding-left: 1%; float: right; width: 240px;">
                        <?php echo CHtml::submitButton('Export To CSV', array('class' => 'btn btn-warning pull-left', 'style' => 'margin-right:1%;margin-bottom:1%', 'name' => 'csv_export')); ?>
                        <?php echo CHtml::submitButton('Export To Excel', array('class' => 'btn btn-satblue pull-left', 'style' => 'margin-right:1%;margin-bottom:1%', 'name' => 'excel_export')); ?>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function multipleAction(){
            var checked_num = $('input[name="customers-grid_c1[]"]:checked').length;
            if (!checked_num) {
                alert('Please select atleast one record.');
                return false;
            }
            else
            {
                $('#customers-grid-list-form').submit();

            }
        }
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
	function customerMultipleAction()
	{
		var checked_num = $('input[name="customers-grid_c1[]"]:checked').length;
		if (!checked_num) {
			alert('Please select atleast one.');
			return false;
		}	
		else
		{
			if ($('#customers-status').val()=='Select') {
				alert('Please Select valid option');
			}else{
				var status = confirm('Are you sure to change the status of selected record(s)?');   
				if(status)			
				{
					var data=$("#customers-grid-list-form").serialize();
					$.ajax({
					type: 'POST',
					url: '<?php echo CController::createUrl("customers/changeStatus"); ?>',
					data:data,
					success:function(data){
						     if(data)
							{ 
								var statusMsg = 'Customer(s) '+data+' successfully.';
								$.fn.yiiGridView.update('customers-grid');
								$('#breadcrumbs-msg').css('display','block');
								$('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
								$('#breadcrumbs-msg').fadeOut(5000);
								statusMsg = '';
							}
					  },error: function(data) { // if error occured
						alert("Error occured.Please try again.");
						$.fn.yiiGridView.update('customers-grid');
					},
					dataType:'html'
					});
				}
			}
		}
		$("#customers-status option[value='Select']").attr("selected","selected");
		$('#customers-status.select2-me').select2('val','Select');
	}

	    /**
		*  Reset in Advanced Search
		* @returns {undefined}
		*/
	   $('#resetVal').live('click', function(e){
			$(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
			$.fn.yiiGridView.update('customers-grid', {url:'<?php echo CController::createUrl("/admin/customers"); ?>'});
		});

</script>