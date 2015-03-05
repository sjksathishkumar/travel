<div class="wrapper" align="center">
<?php 
	$socalLinks = Configurations::model()->getSocialMediaLinks();
	echo CHtml::image(Yii::app()->baseUrl.UPLOAD_FOLDER.LOGO_FOLDER.$socalLinks['logoImage'],$socalLinks['logoAltTag']); 
?>
<?php echo $this->renderPartial('_form_recovery', array('model'=>$model)); ?>