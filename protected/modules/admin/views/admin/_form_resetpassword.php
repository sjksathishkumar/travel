<div class="login-body">
    <h2>RESET PASSWORD</h2>
    <?php
    $form = $this->beginWidget('CActiveForm', array('id' => 'test',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-validate', 'style' => 'padding-bottom:20px;',)));
    if (Yii::app()->User->hasFlash('successMessage'))
    {
        echo '<div class="successMessage">' . RESET_PASS_SUCCESS . '</div>';
    }
    else if (Yii::app()->User->hasFlash('errorMessage'))
    {
        echo '<div class="errorMessage">' . RESET_PASS_ERROR . '</div>';
    }
    else
    {
        ?>
        <div class="control-group">
            <div class="pw controls"><?php echo $form->passwordField($model, 'userPassword', array('value' => '', 'size' => 60, 'minlength' => 6,  'maxlength' => 255, 'placeholder' => 'New Password', 'class' => 'input-block-level', 'data-rule-required' => 'true')); ?>
                <?php echo $form->error($model, 'password', array('class' => 'errorMessage')); ?>
            </div>
        </div>

        <div class="control-group">
            <div class="pw controls"><?php echo $form->passwordField($model, 'retype_password', array('value' => '', 'size' => 60, 'minlength' => 6, 'maxlength' => 255, 'placeholder' => 'Re-Type Password', 'class' => 'input-block-level', 'data-rule-required' => 'true')); ?>
        <?php echo $form->error($model, 'retype_password', array('class' => 'errorMessage')); ?>
            </div>
        </div>
        <div class="submit"><?php echo CHtml::link('Cancel', array('/admin/'), array('class' => 'btn', 'style' => 'float:right;margin-left:10px;')); ?>
        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
        </div>
    <?php
}
?>
<?php $this->endWidget(); ?></div>
</div>
