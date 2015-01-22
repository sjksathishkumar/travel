<!--User Registration Popup Start-->
<div id="user-registration" class="user-reg-popup user-create-popup">
    <?php $this->beginWidget('CActiveForm', array(
                            'id' => 'user-registration-form',
                            'action'=>Yii::app()->createUrl('/customer/ajaxRegistration'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'class' => 'form-horizontal form-bordered validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));?>
        <div class="simplebox input-row center">Sign Up</div>
        <div class="simplebox input-row">
            <div class="divleft"><label>First Name <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::textField('userFirstName','',array('class'=>'input-box requiredField',"onblur"=>"if(this.value=='')this.value=this.defaultValue;", "onfocus"=>"if(this.value==this.defaultValue)this.value='';",'placeholder'=>'Enter Your First Name.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Last Name <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::textField('userLastName','',array('class'=>'input-box requiredField',"onblur"=>"if(this.value=='')this.value=this.defaultValue;", "onfocus"=>"if(this.value==this.defaultValue)this.value='';",'placeholder'=>'Enter Your Last Name.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Email <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::textField('userEmail','',array('class'=>'input-box requiredField emailField',"onblur"=>"if(this.value=='')this.value=this.defaultValue;", "onfocus"=>"if(this.value==this.defaultValue)this.value='';",'placeholder'=>'Enter Your Email Address.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Password <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::passwordField('userPassword','',array('class'=>'input-box requiredField passField','id'=>'userPassword1'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Confirm Password <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::passwordField('repassword','',array('class'=>'input-box requiredField passField','equalTo'=>'#userPassword1'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Phone <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::textField('userPhone','',array('class'=>'input-box requiredField phoneField',"onblur"=>"if(this.value=='')this.value=this.defaultValue;", "onfocus"=>"if(this.value==this.defaultValue)this.value='';",'placeholder'=>'Enter Your Phone Number.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Gender <em>*</em></label></div>
            <div class="divright drop2">
                <?php echo CHtml::dropDownList('userGender','',array('1'=>'Male','2'=>'Female'),array('empty'=>'-Select Gender-','class'=>'select-cat requiredField'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <?php echo CHtml::submitButton('Register',array('class'=>'sendpayinstt popup-login'));?>
        </div>
        <div class="validation_errors"></div>
    <?php $this->endWidget();?>
</div>


<!--Login Popup Start-->
<div id="user-login" class="user-reg-popup login-user-popup">
    <?php $this->beginWidget('CActiveForm', array(
                            'id' => 'user-login-form',
                            'action'=>Yii::app()->createUrl('/customer/ajaxlogin'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'class' => 'form-horizontal form-bordered validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));?>
        <div class="simplebox input-row center">Login</div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Email Address <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::textField('customerEmail','',array('class'=>'input-box requiredField emailField','placeholder'=>'Enter E-mail Address'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Password <em>*</em></label></div>
            <div class="divright">
                <?php echo CHtml::passwordField('customerPassword','',array('class'=>'input-box requiredField','placeholder'=>'Enter Your Password'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <?php echo CHtml::submitButton('Login',array('class'=>'sendpayinstt popup-login'));?>
        </div>
        <div class="validation_errors"></div>
    <?php $this->endWidget();?>
</div>