<div class="page-header">
    <div class="pull-left">
        <h1>Manage Order</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home', array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Manage Order</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
    <?php
    if (Yii::app()->User->hasFlash('deleteOrderSuccess'))
    {
        ?>
        <ul>
            <?php
                if (Yii::app()->User->getFlash('deleteOrderSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">' . DELETE_ORDER_SUCCESS . '</li>';
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
	$('#order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div id="custom_message"></div>
<div class="row-fluid">
    <div class="span12 margin_top20">
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
                <h3><i class="icon-table"></i>Manage Order</h3>
            </div>
            <div class="box-content nopadding">
                <form action="<?php echo CController::createUrl("print/order"); ?>" name='order-grid-list-form' id='order-grid-list-form' method="post" onSubmit="return multipleAction()">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'order-grid',
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

                            ),
                            array(
                                'name' => 'pkOrderID',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                            array(
                                'name' => 'Customer Name',
                                'value' => '$data->customer->fullname',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                           array(
                                'name' => 'orderDateAdded',
                                'value' => '$data->orderDateAdded',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                           array(
                                'name' => 'Price',
                                'value' => 'CommonFunctions::addCurrencySymbol($data->orderItem[0]->totalPrice)',
                                'htmlOptions' => array('style' => 'text-align:center'),
                            ),
                           array(
                                'name' => 'orderStatus',
                                'value' => '$data->orderStatus',
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
                                            'style'=>'display:none;'
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
                        <select id="orderStatus" name="orderStatus" class="input-large nomargin select2-me" onchange="orderMultipleAction();">
                            <option value="Select">Select</option>
                            <option value="Canceled">Canceled</option>
                            <option value="Completed">Completed</option>
                            <option value="Disputed">Disputed</option>
                            <option value="Pending">Pending</option>
                            <option value="Posted">Posted</option>
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
        var checked_num = $('input[name="order-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one record.');
            return false;
        }
        else
        {
            $('#order-grid-list-form').submit();
            
        }
    }
    function fun_deleteMsg(data){
        $("#breadcrumbs-msg").show();
        $("#breadcrumbs-msg").html("<ul><li><span class='readcrum_without_link_success'><?php echo DELETE_ORDER_SUCCESS;?></span></li></ul>");
        $("#custom_message").html("<span class='readcrum_without_link_success'>"+data+"</span>");
        setTimeout(function () {
            $("#breadcrumbs-msg").fadeOut('slow');
        }, 5000);
    }
    function orderMultipleAction()
    {
        var checked_num = $('input[name="order-grid_c1[]"]:checked').length;
        if (!checked_num) {
            alert('Please select atleast one.');
            $.fn.yiiGridView.update('order-grid');
        }
        else
        {
            if ($('#orderStatus').val()=='Select') {
                alert('Please Select valid option');
            }else{
                var status = confirm('Are you sure to change the status of selected record(s)?');
                if(!status)
                {
                    return status;
                    $.fn.yiiGridView.update('order-grid');
                }
                else
                {
                    var data=$("#order-grid-list-form").serialize();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo CController::createUrl("order/changeStatus"); ?>',
                        data:data,
                        success:function(data){
                            if(data)
                            {
                                var statusMsg = "";
                                if(data == 'Not-Deleted'){
                                    statusMsg = 'Root Order can not be deleted.';
                                }else{
                                    statusMsg = 'Order(s) '+ data+' successfully.';
                                }
			                        	
                                $.fn.yiiGridView.update('order-grid', {data:$(this).serialize()});
                                $('#breadcrumbs-msg').css('display','block');
                                $('#breadcrumbs-msg').html("<ul><li><span class='readcrum_without_link_success'>"+statusMsg+"</span></li></ul>");
                                $('#breadcrumbs-msg').fadeOut(5000);
                                statusMsg = '';
                            }
                        },error: function(data) { // if error occured
                            alert("Error occured.Please try again.");
                            $.fn.yiiGridView.update('order-grid');
                        },
                        dataType:'html'
                    });
                }
            }
            $("#orderStatus option[value='Select']").attr("selected","selected");
        }
        $('#orderStatus.select2-me').select2('val','Select');
    }
    /**
    *  Reset in Advanced Search
    * @returns {undefined}
    */
   $('#resetVal').live('click', function(e){
        $(':input','#_search-form').not(':button,:submit,:hidden,.btn').val('');
        $.fn.yiiGridView.update('order-grid', {url:'<?php echo CController::createUrl("/admin/order"); ?>'});
    });
</script>