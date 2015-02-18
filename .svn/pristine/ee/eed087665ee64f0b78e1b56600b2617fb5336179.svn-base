<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>
<div class="form">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-table"></i>Configuration Details</h3>
            </div>
            <div class="box-content nopadding">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'configuration-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal form-bordered form-validate',
                        'enctype' => 'multipart/form-data',
                    ),
                        ));
                ?>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationEmail', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationEmail', array('class' => 'input-xlarge', 'data-rule-required' => 'true','data-rule-email'=>'true')); ?>
                        <?php echo $form->error($model, 'configurationEmail'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationContact', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationContact', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                        <?php echo $form->error($model, 'configurationContact'); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationSocialLink1', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationSocialLink1', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                        <?php echo $form->error($model, 'configurationSocialLink1'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationSocialLink2', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationSocialLink2', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                        <?php echo $form->error($model, 'configurationSocialLink2'); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationSocialLink3', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationSocialLink3', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                        <?php echo $form->error($model, 'configurationSocialLink3'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationSocialLink4', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'configurationSocialLink4', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                        <?php echo $form->error($model, 'configurationSocialLink4'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'configurationPageLimit', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'configurationPageLimit', Yii::app()->params['adminRecordLimit'], array('empty' => '-Select Limit-', 'class' => 'span3 select2-me', 'data-rule-required' => 'true',)); ?>
                        <?php echo $form->error($model, 'configurationPageLimit'); ?>
                    </div>
                </div> 
                <div class="control-group">
                    <?php
                    if (isset($type)):
                        echo $form->labelEx($model, 'logoImage', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'false';
                    else:
                        echo $form->labelEx($model, 'logoImage<em></em>', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'true';
                    endif;
                    ?>
                    <div class="controls" id="images">
                        <div class="fileupload fileupload-new first" data-provides="fileupload">
                            <span>
                                <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <?php echo CHtml::fileField('Configurations[logoImage]','',array('accept'=>'image/*','class'=>'dealImages'));?>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </span>
                        </div>
                        <?php echo '<span class="required">( Logo image must be 117X138 Pixel)</span>';?>
                        <?php echo $form->error($model, 'logoImage'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'logoImage<em></em>', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                    <?php echo CHtml::image(Yii::app()->baseUrl.UPLOAD_FOLDER.LOGO_FOLDER.$model->logoImage,$model->logoAltTag,array('width'=>117,'height'=>138)); ?>
                    </div>
                </div>     
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'logoAltTag', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                    <?php echo $form->textField($model, 'logoAltTag', array('class' => 'input-xlarge', 'data-rule-required' => 'true')); ?>
                    <?php echo $form->error($model, 'logoAltTag'); ?>
                    </div>
                </div>  
                <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                <div class="form-actions">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                    <?php echo CHtml::link('Cancel', array('/admin'), array('class' => 'btn','title'=>'Cancel','alt'=>'Cancel')); ?>
                </div>
                <?php $this->endWidget(); ?>
            </div><!-- form -->
        </div>
    </div>
</div>