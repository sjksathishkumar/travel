<?php
/* @var $this BannerController */
/* @var $model Banner */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Configuration Settings Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Configuration Settings Manager',array('/admin/configurations')); ?></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if(Yii::app()->User->hasFlash('editConfigurationSuccess')){ ?>
	<ul>
          <?php
            if(Yii::app()->User->getFlash('editConfigurationSuccess'))
            {
                echo '<li><span class="readcrum_without_link_success">'.EDIT_CONFIGURATION_SUCCESS.'</li>';
            }
          ?>						
      </ul>
<?php } ?>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
		    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
	</div>
</div>
