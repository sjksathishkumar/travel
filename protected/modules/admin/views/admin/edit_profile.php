<div class="page-header">
<div class="pull-left">
<h1>Edit Profile</h1>
</div>
</div>
<div class="breadcrumbs">
<ul>
		<li><?php echo CHtml::link('Home',array('/dashboard')); ?> <i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Edit Profile',array('/dashboard/editProfile')); ?></li>
</ul>
<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<?php  if( (Yii::app()->User->hasFlash('editProfileSuccess')) || (Yii::app()->User->hasFlash('editProfileError')) || (Yii::app()->User->hasFlash('editProfileEmailError')) ){ ?>
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
	<ul>
          <?php
                if(Yii::app()->User->getFlash('editProfileSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.EDIT_PROFILE_SUCCESS.'</li>';
                }else if(Yii::app()->User->getFlash('editProfileError'))
                {
                    echo '<li><span class="readcrum_without_link_error">'.EDIT_PROFILE_ERROR.'</li>';
                }else if(Yii::app()->User->getFlash('editProfileEmailError'))
                {
                    echo '<li><span class="readcrum_without_link_error">'.EMAIL_EXIST_ERROR.'</li>';
                }
          ?>						
      </ul>
</div>
<?php } ?>
<!-- End of Setting up flash success/error message -->
<?php echo $this->renderPartial('_form_edit_profile', array('model'=>$model)); ?>