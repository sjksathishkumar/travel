<div class="page-header">
	<div class="pull-left">
		<h1>CMS</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">CMS</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if(Yii::app()->User->hasFlash('editCmsSuccess')){ ?>
	<ul>
          <?php
                if(Yii::app()->User->getFlash('editCmsSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.EDIT_CMS_SUCCESS.'</li>';
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
	$('#cms-grid').yiiGridView('update', {
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
				<h3><i class="icon-table"></i>Manage CMS</h3>
			</div>
			<div class="box-content nopadding">
				<form action="" name='cms-grid-list-form' id='cms-grid-list-form'>
					<?php $this->widget('zii.widgets.grid.CGridView', array(
						'id'=>'cms-grid',
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
								'name'=>'cmsDisplayTitle',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array(
								'name'=>'cmsDateModified',
								'htmlOptions'=>array('style'=>'text-align:center'),
								),
							array('name'=>'cmsStatus',
					         	  'type' => 'raw',
					              'value'=>'CommonFunctions::statusFurmate($data->cmsStatus)',
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
	                                            ),
	                                        ), 
						             ),
							),
						),
					)); ?>
					<div style="padding-left:1%">
						<select id="cmsStatus" name="cmsStatus" class="input-large nomargin  select2-me" onchange="cmsMultipleAction();">
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
     * 
     *  For delete message
     */
    function cmsMultipleAction()
    {
        var checked_num = $('input[name="cms-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one.');
            $.fn.yiiGridView.update('cms-grid');
        }
        else
        {
	       if ($('#cmsStatus').val()=='Select') {
				alert('Please Select valid option');
			}else{
		       var status = confirm('Are you sure to change the status of selected record(s)?');   
		       if(!status)
		       {
		           return status;
		           $.fn.yiiGridView.update('cms-grid');
		       }
		       else
		       {
			        var data=$("#cms-grid-list-form").serialize();
			        $.ajax({
			        type: 'POST',
			        url: '<?php echo CController::createUrl("cms/changeStatus"); ?>',
			        data:data,
			        success:function(data){
			        	         if(data)
			                        { 
			                        	var statusMsg = "";
			                        	statusMsg = 'CMS pages '+ data+' successfully.';	
			                            $.fn.yiiGridView.update('cms-grid', {data:$(this).serialize()});
			                            $('#breadcrumbs-msg').css('display','block');
			                            $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
			                            $('#breadcrumbs-msg').fadeOut(5000);
			                            statusMsg = '';
			                        }
			          },error: function(data) { // if error occured
			              alert("Error occured.Please try again.");
			              $.fn.yiiGridView.update('cms-grid');
			         },
			        dataType:'html'
			        });
		        }
		    }
	    	$("#cmsStatus option[value='Select']").attr("selected","selected");
       }
       $('#cmsStatus.select2-me').select2('val','Select');
    }
    /**
    *  Reset in Advanced Search
    * @returns {undefined}
    */
   $('#resetVal').live('click', function(e){
        $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
        $.fn.yiiGridView.update('cms-grid', {url:'<?php echo CController::createUrl("/admin/cms"); ?>'});
    });
</script>