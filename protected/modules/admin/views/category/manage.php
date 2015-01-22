<div class="page-header">
    <div class="pull-left">
        <h1>Manage Category</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home', array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Manage Category</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
    <?php
    if ((Yii::app()->User->hasFlash('addCategorySuccess')) || (Yii::app()->User->hasFlash('editCategorySuccess')) || (Yii::app()->User->hasFlash('deleteCategorySuccess')))
    {
        ?>
        <ul>
            <?php
            if (Yii::app()->User->getFlash('addCategorySuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . ADD_CATEGORY_SUCCESS . '</li>';
            }
            else if (Yii::app()->User->getFlash('editCategorySuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . EDIT_CATEGORY_SUCCESS . '</li>';
            }
            else if (Yii::app()->User->getFlash('deleteCategorySuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">' . DELETE_CATEGORY_SUCCESS . '</li>';
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
	$('#category-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="custom_message"></div>
<div class="row-fluid">
    <div class="span12 margin_top20">
        <?php echo CHtml::link('Add Category', array('/admin/category/create'), array('class' => 'btn btn-primary')); ?>
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
                <h3><i class="icon-table"></i>Manage Category</h3>
            </div>
            <div class="box-content nopadding">
                <form action="<?php echo CController::createUrl("print/category"); ?>" name='category-grid-list-form' id='category-grid-list-form' method="post" onSubmit="return multipleAction()">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'category-grid',
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
                                'htmlOptions' => array(
                                    'class' => 'with-checkbox', 
                                    'style'=>'text-align:center;',
                                    ),
                                //'disabled'=>'$data->fkParentCategoryID =="0" ? true : false',

                            ),
                            array(
                                'name' => 'categoryName',
                                'value' => '$data->categoryName',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'categoryDescription',
                                'value' => 'substr(strip_tags($data->categoryDescription), 0, 200)."..."',
                                'htmlOptions' => array('style' => 'text-align:center', 'class' => 'hidden-480'),
                                'headerHtmlOptions' => array('class' => 'hidden-480'),
                            ),
                            array(
                                'name' => 'fkParentCategoryID',
                                'value' => 'Category::categoryNameFromId($data->fkParentCategoryID)',
                                //'value' => '$data->parentName',
                                'type' => 'raw',
                                'htmlOptions' => array('style' => 'text-align:center', 'class' => 'hidden-480'),
                                'headerHtmlOptions' => array('class' => 'hidden-480'),
                            ),
                            array('name' => 'categoryStatus',
                                'type' => 'raw',
                                'value' => 'CommonFunctions::statusFurmate($data->categoryStatus)',
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

                                        'visible'=>'$data->fkParentCategoryID?true:false'
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
                                        'options' => array(
                                            'class' => 'view btn',
                                            'title' => 'View',
                                        ),
                                    ),
                                ),
                                'afterDelete' => 'function(link,success,data){if(success){fun_deleteMsg(data)}}',
                            ),
                        ),
                    ));
                    ?>
                    <div style="padding-left:1%;float: left">
                        <select id="categoryStatus" name="categoryStatus" class="input-large nomargin select2-me" onchange="categoryMultipleAction();">
                            <option value="Select">Select</option>
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    <div style="float: right; padding-left: 0%; width: 240px;">
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
        var checked_num = $('input[name="category-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one record.');
            return false;
        }
        else
        {
            $('#category-grid-list-form').submit();

        }
    }
    function fun_deleteMsg(data){
        $("#breadcrumbs-msg").show();
        $("#breadcrumbs-msg").html("<ul><li><span class='readcrum_without_link_success'><?php echo DELETE_CATEGORY_SUCCESS;?></span></li></ul>");
        $("#custom_message").html("<span class='readcrum_without_link_success'>"+data+"</span>");
        setTimeout(function () {
            $("#breadcrumbs-msg").fadeOut('slow');
        }, 5000);
    }
    function categoryMultipleAction()
    {
        var checked_num = $('input[name="category-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one.');
            $.fn.yiiGridView.update('category-grid');
        }
        else
        {
            if ($('#categoryStatus').val()=='Select') {
                alert('Please Select valid option');
            }else{
                var status = confirm('Are you sure to change the status of selected record(s)?');
                if(!status)
                {
                    return status;
                    $.fn.yiiGridView.update('category-grid');
                }
                else
                {
                    var data=$("#category-grid-list-form").serialize();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo CController::createUrl("category/changeStatus"); ?>',
                        data:data,
                        success:function(data){
                            if(data)
                            {
                                var statusMsg = "";
                                if(data == 'Not-Deleted'){
                                    statusMsg = 'Root Category can not be deleted.';
                                }else{
                                    statusMsg = 'Category(s) '+ data+' successfully.';
                                }
			                        	
                                $.fn.yiiGridView.update('category-grid', {data:$(this).serialize()});
                                $('#breadcrumbs-msg').css('display','block');
                                $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
                                $('#breadcrumbs-msg').fadeOut(5000);
                                statusMsg = '';
                            }
                        },error: function(data) { // if error occured
                            alert("Error occured.Please try again.");
                            $.fn.yiiGridView.update('category-grid');
                        },
                        dataType:'html'
                    });
                }
            }
            $("#categoryStatus option[value='Select']").attr("selected","selected");
        }
        $('#categoryStatus.select2-me').select2('val','Select');
    }
    /**
    *  Reset in Advanced Search
    * @returns {undefined}
    */
   $('#resetVal').live('click', function(e){
        $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
        $.fn.yiiGridView.update('category-grid', {url:'<?php echo CController::createUrl("/admin/category"); ?>'});
    });
</script>