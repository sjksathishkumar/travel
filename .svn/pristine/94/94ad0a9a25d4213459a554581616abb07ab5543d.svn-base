<div class="page-header">
    <div class="pull-left">
        <h1>Manage Deals</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home', array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Manage Deals</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
    <?php
    if ((Yii::app()->User->hasFlash('addDealSuccess')) || (Yii::app()->User->hasFlash('editDealSuccess')) || (Yii::app()->User->hasFlash('deleteDealSuccess')))
    {
        ?>
        <ul>
            <?php
            if (Yii::app()->User->getFlash('addDealSuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . ADD_DEAL_SUCCESS . '</li>';
            }
            else if (Yii::app()->User->getFlash('editDealSuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . EDIT_DEAL_SUCCESS . '</li>';
            }
            else if (Yii::app()->User->getFlash('deleteDealSuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . DELETE_DEAL_SUCCESS . '</li>';
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
	$('#deals-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span12 margin_top20">
        <?php echo CHtml::link('Add Deal', array('/admin/deals/create'), array('class' => 'btn btn-primary')); ?>
        <?php echo CHtml::link('Search', '#', array('class' => 'search-button btn btn-inverse')); ?>
    </div>
</div>
<div class="box box-color box-bordered">
    <div class="search-form" style="display:none;">
        <?php
        $this->renderPartial('_search', array(
            'model' => $model,
        ));
        ?>
    </div><!-- search-form -->
    <!-- End of Setting up flash success/error message -->
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-table"></i>Manage Deals</h3>
            </div>
            <div class="box-content nopadding">
                <form action="<?php echo CController::createUrl("print/deals"); ?>" name='deals-grid-list-form' id='deals-grid-list-form' method="post" onSubmit="return multipleAction()">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'deals-grid',
                        'itemsCssClass' => 'table table-hover table-nomargin table-bordered',
                        'dataProvider' => $model->search(),
                        //'filter'=>$model,
                        'columns' => array(
                            array(
                                'header' => 'Sr. No.',
                                'class'=>'IndexColumn',
                                'htmlOptions' => array('style' => 'text-align:center', 'class' => 'hidden-480'),
                                'headerHtmlOptions' => array('class' => 'hidden-480'),
                            ),
                            array('header' => '#',
                                'class' => 'CCheckBoxColumn',
                                'selectableRows' => 2,
                                'headerHtmlOptions' => array('class' => 'with-checkbox'),
                                'htmlOptions' => array('class' => 'with-checkbox', 'style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'dealID',
                                'value' => '$data->dealID',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'dealName',
                                'value' => '$data->dealName',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'fkCategoryID',
                                'value' => 'Category::model()->findByPk($data->fkCategoryID)?Category::model()->findByPk($data->fkCategoryID)->categoryName:"--"',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'fkUserID',
                                'value' => 'Users::model()->findByPk($data->fkUserID)?Users::model()->findByPk($data->fkUserID)->userFirstName:"--"',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'dealEndDate',
                                'value' => 'date("d-m-Y",$data->dealEndDate)',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array('name' => 'dealStatus',
                                'type' => 'raw',
                                'value' => 'CommonFunctions::statusFurmate($data->dealStatus)',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'header' => 'Action',
                                'class' => 'CButtonColumn',
                                'htmlOptions' => array('style' => 'width:10%;text-align:center;'),
                                'buttons' => array(
                                    'delete' => array(
                                        'label' => '<i class="icon-remove"></i>',
                                        'imageUrl' => false,
                                        'options' => array(
                                            'class' => 'deletes btn',
                                            'title' => 'Delete',
                                        ),
                                    ),
                                    'update' => array(
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
                                        'url' => 'Yii::app()->createUrl("deals/adminview/", array("id"=>$data->pkDealID),array("target"=>"_blank"))',
                                        'options' => array(
                                            'class' => 'view btn',
                                            'title' => 'View',
                                            'target' => '_blank',
                                        ),
                                    ),
                                ),
                                'afterDelete' => 'function(link,success,data){if(success){fun_deleteMsg()}}',
                            ),
                        ),
                    ));
                    ?>
                    <div style="padding-left:1%;float: left">
                        <select id="dealStatus" name="dealStatus" class="input-large nomargin select2-me" onchange="dealMultipleAction();">
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
        /**
         *
         *  For delete message
         */
        function multipleAction(){
            var checked_num = $('input[name="deals-grid_c1[]"]:checked').length;
            if (!checked_num) {
                alert('Please select atleast one record.');
                return false;
            }
            else
            {
                $('#deals-grid-list-form').submit();

            }
        }
        function fun_deleteMsg(){
        
            $("#breadcrumbs-msg").show();
            $("#breadcrumbs-msg").html("<ul><li><span class='readcrum_without_link_success'><?php echo DELETE_DEAL_SUCCESS;?></span></li></ul>");
            setTimeout(function () {
                $("#breadcrumbs-msg").fadeOut('slow');
            }, 5000);
        }
        function dealMultipleAction()
        {
            var checked_num = $('input[name="deals-grid_c1[]"]:checked').length;
            if (!checked_num) {
                alert('Please select atleast one.');
                $.fn.yiiGridView.update('deals-grid');
            }
            else
            {
                if ($('#dealStatus').val()=='Select') {
                    alert('Please Select valid option');
                }else{
                    var status = confirm('Are you sure to change the status of selected record(s)?');
                    if(!status)
                    {
                        return status;
                        $.fn.yiiGridView.update('deals-grid');
                    }
                    else
                    {
                        var data=$("#deals-grid-list-form").serialize();
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo CController::createUrl("deals/changeStatus"); ?>',
                            data:data,
                            success:function(data){
                                if(data)
                                {
                                    var statusMsg = "";
                                    statusMsg = 'Deal(s) '+ data+' successfully.';
			                        	
                                    $.fn.yiiGridView.update('deals-grid', {data:$(this).serialize()});
                                    $('#breadcrumbs-msg').css('display','block');
                                    $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
                                    $('#breadcrumbs-msg').fadeOut(5000);
                                    statusMsg = '';
                                }
                            },error: function(data) { // if error occured
                                alert("Error occured.Please try again.");
                                $.fn.yiiGridView.update('deals-grid');
                            },
                            dataType:'html'
                        });
                    }
                }
                $("#dealStatus option[value='Select']").attr("selected","selected");
            }
            $('#dealStatus.select2-me').select2('val','Select');
        }

        /**
        *  Reset in Advanced Search
        * @returns {undefined}
        */
       $('#resetVal').live('click', function(e){
            $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
            $.fn.yiiGridView.update('deals-grid', {url:'<?php echo CController::createUrl("/admin/deals"); ?>'});
        });
    </script>