<div class="page-header">
	<div class="pull-left">
		<h1>FAQ Categories</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">FAQ Categories</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if((Yii::app()->User->hasFlash('addCategorySuccess')) || (Yii::app()->User->hasFlash('updateCategorySuccess')) ){ ?>
	<ul>
          <?php
                if(Yii::app()->User->getFlash('addCategorySuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.ADD_FAQ_CATEGORY_SUCCESS.'</li>';
                }
                elseif (Yii::app()->User->getFlash('updateCategorySuccess')) {
                	echo '<li><span class="readcrum_without_link_success">'.EDIT_FAQ_CATEGORY_SUCCESS.'</li>';
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
	$('#faq-category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 margin_top20">
	    <?php echo CHtml::link('Add Category','create',array('class'=>'btn btn-primary')); ?>
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
				<h3><i class="icon-table"></i>Manage FAQ Categories</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='faq-category-grid-list-form' id='faq-category-grid-list-form'>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'faq-category-grid',
						'itemsCssClass' => 'table table-hover table-nomargin table-bordered', 
						'dataProvider'=>$model->search(),
						//'filter'=>$model,
						'columns'=>array(
							array(
								'header'=>'Sr. No.',
								'class'=>'IndexColumn',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array('header'=> '#',
					                    'class'=>'CCheckBoxColumn',
					                    'selectableRows' => 2,
					                    'headerHtmlOptions'=>array('class'=>'with-checkbox'),
					                    'htmlOptions'=>array('class'=>'with-checkbox','style'=>'text-align:center'),                   
							 ),
							array(
								'name'=>'faqCategoryName',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),

							array(
								'name'=>'faqCategoryDateModified',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array('name'=>'faqCategoryStatus',
					         	  'type' => 'raw',
					              'value'=>'CommonFunctions::statusFurmate($data->faqCategoryStatus)',
					              'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array('name'=>'faqCategoryIsMount',
					         	  'type' => 'raw',
					              'value'=>'CommonFunctions::statusFurmate($data->faqCategoryIsMount)',
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
								    'view' => array(
	                                            'label' => '<i class="icon-search"></i>',
	                                            'imageUrl' => false,
	                                            'options' => array(
                                                'class' => 'view btn',
                                                'title' => 'View',
	                                            ),
	                                        ), 
						             ),
							),
						),
					)); ?>
					<div style="padding-left:1%">
						<select id="faqCategoryStatus" name="faqCategoryStatus" class="input-large nomargin  select2-me" onchange="cmsMultipleAction();">
							<option value="Select">Select</option>
							<option value="0">Inactive</option>
							<option value="1">Active</option>
							<option value="2">Delete</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    /**
     * 
     *  For delete message
     */
    function cmsMultipleAction()
    {
        var checked_num = $('input[name="faq-category-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one.');
            $.fn.yiiGridView.update('faq-category-grid');
        }
        else
        {
	       if ($('#faqCategoryStatus').val()=='Select') {
				alert('Please Select valid option');
			}else{
		       var status = confirm('Are you sure to change the status of selected record(s)?');   
		       if(!status)
		       {
		           return status;
		           $.fn.yiiGridView.update('faq-category-grid');
		       }
		       else
		       {
			        var data=$("#faq-category-grid-list-form").serialize();
			        $.ajax({
			        type: 'POST',
			        url: '<?php echo CController::createUrl("faqsCategories/changeStatus"); ?>',
			        data:data,
			        success:function(data){
			        	         if(data == 'error')
			                        { 
			                        	var statusMsg = "";
			                            $.fn.yiiGridView.update('faq-category-grid', {data:$(this).serialize()});
			                            $('#breadcrumbs-msg').css('display','block');
			                            $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_error'>Error: Categories Mounted !</span></li></ul>");
			                            $('#breadcrumbs-msg').fadeOut(5000);
			                            statusMsg = '';
			                        }
			                        else{
			                        		var statusMsg = "";
			                        		statusMsg = 'FAQ Category '+ data+' successfully.';	
			                        	    $.fn.yiiGridView.update('faq-category-grid', {data:$(this).serialize()});
			                        	    $('#breadcrumbs-msg').css('display','block');
			                        	    $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
			                        	    $('#breadcrumbs-msg').fadeOut(5000);
			                        	    statusMsg = '';
			                        }
			          },error: function(data) { // if error occured
			          	console.log(data);
			              alert("Error occured.Please try again.");
			              $.fn.yiiGridView.update('faq-category-grid');
			         },
			        dataType:'html'
			        });
		        }
		    }
	    	$("#faqCategoryStatus option[value='Select']").attr("selected","selected");
       }
       $('#faqCategoryStatus.select2-me').select2('val','Select');
    }
    /**
    *  Reset in Advanced Search
    * @returns {undefined}
    */
   $('#resetVal').live('click', function(e){
        $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
        $.fn.yiiGridView.update('faq-category-grid', {url:'<?php echo CController::createUrl("/admin/cms"); ?>'});
    });
</script>
