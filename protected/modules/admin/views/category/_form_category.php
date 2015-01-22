<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <?php
                if (strstr(Yii::app()->request->requestUri, 'update'))
                {
                    ?>
                    <h3><i class="icon-table"></i>Update Category</h3>
                    <?php
                }
                else
                {
                    ?>
                    <h3><i class="icon-table"></i>Add New Category</h3>
                <?php } ?>
            </div>
            <div class="box-content nopadding">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'category-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal form-bordered form-validate',
                        'enctype' => 'multipart/form-data',
                    )
                        ));
                ?>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'categoryName', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'categoryName', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xxlarge')); ?>
                        <?php echo $form->error($model, 'categoryName'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'fkParentCategoryID', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php
                        if ($model->fkParentCategoryID != '')
                        {
                            if ($model->fkParentCategoryID == '0')
                            {
                                echo "Root Category";
                                echo $form->hiddenField($model, 'fkParentCategoryID');
                            }
                            else
                            {
                                echo $form->dropDownList($model, 'fkParentCategoryID', $model->categoryOption, array(
                                    'options' => array('' => array('selected' => true)),
                                    'id' => 'maincategory',
                                    'class' => 'input-xlarge select2-me',
                                    'empty' => array('' => 'Select Parent Category'),
                                    'data-rule-required' => true,
                                ));
                            }
                        }
                        else
                        {
                            echo $form->dropDownList($model, 'fkParentCategoryID', $model->categoryOption, array(
                                'options' => array('' => array('selected' => true)),
                                'id' => 'maincategory',
                                'class' => 'input-xlarge select2-me',
                                'empty' => array('' => 'Select Parent Category'),
                                'data-rule-required' => true,
                            ));
                        }
                        ?>
                        <?php echo $form->error($model, 'fkParentCategoryID'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php
                    if (isset($type)):
                        echo $form->labelEx($model, 'categoryImage', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'false';
                    else:
                        echo $form->labelEx($model, 'categoryImage<em>*</em>', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'true';
                    endif;
                    ?>
                    <div class="controls" id="images">
                        <div class="fileupload fileupload-new first" data-provides="fileupload">
                            <span>
                                <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file" name="categoryImage" accept="image/*" class="dealImages required" data-rule-required="<?php echo $required; ?>"/>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                <?php
                                if (isset($model->categoryImage))
                                {
                                    echo Chtml::image(Yii::app()->params['siteUploadFilesURL'] . CATEGORIES_FOLDER . $model->categoryImage);
                                }
                                ?>
                            </span>
                        </div>
                        <?php echo '<span class="required">(Please add image of 18X18.)</span>';?>
                        <?php echo $form->error($model, 'categoryImage'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'categoryDescription', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textArea($model, 'categoryDescription', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xxlarge')); ?>
                        <?php echo $form->error($model, 'categoryDescription'); ?>
                    </div>
                </div>

                <div class="control-group">
                    <?php echo $form->labelEx($model, 'categoryStatus', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'categoryStatus', array('' => 'Select', '1' => 'Active', '0' => 'Inactive'), array('data-rule-required' => 'true', 'class' => 'input-xlarge select2-me')); ?>
                        <?php echo $form->error($model, 'categoryStatus'); ?>
                    </div>
                </div>

                <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                <div class="form-actions">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                    <?php echo CHtml::link('Cancel', array('/admin/category'), array('class' => 'btn','title'=>'Cancel','alt'=>'Cancel')); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>