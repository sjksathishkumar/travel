<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="breadcrumb">
    <div class="layout">
        <ul>
            <li><?php echo CHtml::link('home',$siteUrl,array('title'=>'home'));?>&raquo;</li>
            <li class="active">checkout</li>
        </ul>
    </div>
</div>
<div class="body_container">
    <div class="layout">
        <div class="login_pg">
            <div class="login_left existing_customer">
                <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'login-form',
                                                            'enableAjaxValidation'=>false,
                                                            'method'=>'post',
                                                            'action'=>Yii::app()->baseUrl.'/customer/login',
                                                            'htmlOptions'=>array(
                                                                    'novalidate'=>'novalidate',
                                                                    'class'=>'validate-form'
                                                            ),
                                                        )
                                    );?>
                    <h3 class="head">Existing customer?</h3>  
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <ul class="checkout_form">
                        <li>
                            <?php echo CHtml::textField('customerEmail','',array('placeholder'=>'Email:','class'=>'requiredField emailField'));?>
                        </li>
                        <li>
                            <?php echo CHtml::passwordField('customerPassword','',array('placeholder'=>'Password:','class'=>'requiredField'));?>
                        </li>
                        <li>
                            <?php echo CHtml::submitButton('submitLogin',array('value'=>'SIGN IN'));?>
                        </li>
                    </ul>
                    <div class="validation_errors"><?php if(Yii::app()->user->hasFlash('login_error')){echo Yii::app()->user->getFlash('login_error');}?></div>
                <?php $form=$this->endWidget();?>
            </div>

            <div class="login_left right">
                <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'customer-registration-form',
                                                            'enableAjaxValidation'=>false,
                                                            'method'=>'post',
                                                            'action'=>Yii::app()->baseUrl.'/customer/registration',
                                                            'htmlOptions'=>array(
                                                                    'novalidate'=>'novalidate',
                                                                    'class'=>'validate-form'
                                                            ),
                                                        )
                                    );?>
                <h3 class="head">new customer?</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                <ul class="checkout_form">
                    <li>
                        <span>
                            <?php echo $form->textField($model,'userFirstName',array('placeholder'=>'First Name:','class'=>'requiredField'));?>
                            <?php echo $form->error($model,'userFirstName');?>
                        </span>
                        <span class="right">
                            <?php echo $form->textField($model,'userLastName',array('placeholder'=>'Last Name:','class'=>'requiredField'));?>
                            <?php echo $form->error($model,'userLastName');?>
                        </span>
                    </li>
                    <li>
                        <div class="select_box">
                            <div class="drop1">
                                <?php echo $form->dropDownList($model,'userGender',array('1'=>'Male','2'=>'Female'),array('empty'=>'Select Gender','class'=>'select-cat requiredField validate-error-msg'));?>
                                <?php echo $form->error($model,'userGender');?>
                                <div id="userGender-error" class="validate-error-msg"></div>
                            </div>
                        </div>
                        <span class="right">
                            <?php echo $form->textField($model,'userEmail',array('placeholder'=>'Email:','class'=>'requiredField'));?>
                            <?php echo $form->error($model,'userEmail');?>
                        </span>
                    </li>
                    <li>
                        <span>
                            <?php echo $form->passwordField($loginModel,'userPassword',array('placeholder'=>'Password:','class'=>'requiredField','id'=>'userPassword2'));?>
                        </span>
                        <span class="right">
                            <?php echo $form->passwordField($loginModel,'repassword',array('placeholder'=>'confirm Password:','class'=>'requiredField','equalTo'=>'#userPassword2'));?>
                        </span>
                    </li>
                    <li><?php echo CHtml::submitButton('submitCustomerRegistration',array('value'=>'CONTINUE'));?></li>
                </ul>
                <div class="success_msg"><?php if(Yii::app()->user->hasFlash('registration_verification_message')){echo Yii::app()->user->getFlash('registration_verification_message');}?></div>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("form").data("validator").settings.ignore = "";
        $('.validation_errors,.success_msg').fadeOut(5000);
    });
</script>