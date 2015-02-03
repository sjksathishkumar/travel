<div class="page-header">
	<div class="pull-left">
		<h1>FAQ</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">FAQ</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if((Yii::app()->User->hasFlash('addFAQSuccess')) || (Yii::app()->User->hasFlash('updateFAQSuccess')) ){ ?>
	<ul>
          <?php
                if(Yii::app()->User->getFlash('addFAQSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.ADD_FAQ_SUCCESS.'</li>';
                }
                elseif (Yii::app()->User->getFlash('updateFAQSuccess')) {
                	echo '<li><span class="readcrum_without_link_success">'.EDIT_FAQ_SUCCESS.'</li>';
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
	$('#faq-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 margin_top20">
	    <?php echo CHtml::link('Add Question','create',array('class'=>'btn btn-primary')); ?>
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
				<h3><i class="icon-table"></i>Manage FAQ</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='faq-grid-list-form' id='faq-grid-list-form'>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'faq-grid',
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
								'name'=>'faqQuestion',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'name'=>'fkCategoryID',
								'value'=>'FaqsCategories::getCategoryName($data->fkCategoryID)',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array('name'=>'faqStatus',
					         	  'type' => 'raw',
					              'value'=>'CommonFunctions::statusFurmate($data->faqStatus)',
					              'htmlOptions'=>array('style'=>'text-align:center'),
							),
							array(
								'name'=>'faqDateAdded',
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
						<select id="faqStatus" name="faqStatus" class="input-large nomargin  select2-me" onchange="cmsMultipleAction();">
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
        var checked_num = $('input[name="faq-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one.');
            $.fn.yiiGridView.update('faq-grid');
        }
        else
        {
	       if ($('#faqStatus').val()=='Select') {
				alert('Please Select valid option');
			}else{
		       var status = confirm('Are you sure to change the status of selected record(s)?');   
		       if(!status)
		       {
		           return status;
		           $.fn.yiiGridView.update('faq-grid');
		       }
		       else
		       {
			        var data=$("#faq-grid-list-form").serialize();
			        $.ajax({
			        type: 'POST',
			        url: '<?php echo CController::createUrl("faqs/changeStatus"); ?>',
			        data:data,
			        success:function(data){
			        	         if(data == 'error')
			                        { 
			                        	var statusMsg = "";
			                            $.fn.yiiGridView.update('faq-grid', {data:$(this).serialize()});
			                            $('#breadcrumbs-msg').css('display','block');
			                            $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_error'>Error: Categories Mounted !</span></li></ul>");
			                            $('#breadcrumbs-msg').fadeOut(5000);
			                            statusMsg = '';
			                        }
			                        else{
			                        		var statusMsg = "";
			                        		statusMsg = 'FAQ '+ data+' successfully.';	
			                        	    $.fn.yiiGridView.update('faq-grid', {data:$(this).serialize()});
			                        	    $('#breadcrumbs-msg').css('display','block');
			                        	    $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
			                        	    $('#breadcrumbs-msg').fadeOut(5000);
			                        	    statusMsg = '';
			                        }
			          },error: function(data) { // if error occured
			          	console.log(data);
			              alert("Error occured.Please try again.");
			              $.fn.yiiGridView.update('faq-grid');
			         },
			        dataType:'html'
			        });
		        }
		    }
	    	$("#faqStatus option[value='Select']").attr("selected","selected");
       }
       $('#faqStatus.select2-me').select2('val','Select');
    }
    /**
    *  Reset in Advanced Search
    * @returns {undefined}
    */
   $('#resetVal').live('click', function(e){
        $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
        $.fn.yiiGridView.update('faq-grid', {url:'<?php echo CController::createUrl("/admin/cms"); ?>'});
    });
</script>
