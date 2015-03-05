<div class="login-popup" id="member-login">
    <?php $this->beginWidget('CActiveForm', array(
                            'id' => 'member-signin-form',
                            'action'=>Yii::app()->createUrl('/member/login'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'novalidate' => 'novalidate',
                                'class' => 'validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));

                        if(isset(Yii::app()->request->cookies['memberDetails'])) {
                            $varCookieVal = base64_decode(Yii::app()->request->cookies['memberDetails']);
                            $arrExpCookieVal = explode("!@#$%^", $varCookieVal);
                            $varUsername = $arrExpCookieVal[0];
                            $varPassword = $arrExpCookieVal[1];
                            $varRemember = "checked";
                        } else{
                            $varUsername = "";
                            $varPassword = "";
                            $varRemember = "";
                        }
                        ?>

    <div class="login-heading"> Members Login </div>
    <ul class="acc-login">
        <li>
            <p>Members ID<span class="required">*</span></p>
            <?php echo CHtml::textField('memberEmail',$varUsername,array('class'=>'input-box requiredField','placeholder'=>'Email / Username'));?>
            
        </li>
        <li><p>Password<span class="required">*</span></p>
            <?php echo CHtml::passwordField('memberPassword',$varPassword,array('class'=>'input-box requiredField','placeholder'=>'Password','id'=>'userPassword'));?>
        </li>
        <li class="acc-login">
            <?php echo CHtml::checkBox('remember',($varRemember)?true:false,array('class'=>'radio','value' => 1)); ?>
            <label for="remember">Remember Me</label>
            <div class="forgotpass"><input type="button" name="forgotpassword" value="" /><span class="fancybox" href="#forgot-pass">Forgot Password</span></div>
            <div class="validation_errors"></div>
        </li>
        <li>
            <div class="login-btn">
                <?php echo CHtml::submitButton('Register');?>
            </div>
        </li>
    </ul>
    <?php $this->endWidget();?>
</div>
<div class="login-popup" id="partner-login">
    <div class="login-heading"> Partners Login </div>
    <ul class="acc-login">
        <li><p>Partners ID<span class="required">*</span></p><input type="text" name="email" value="" placeholder="12345678" /></li>
        <li><p>Password<span class="required">*</span></p><input type="password" name="email" value="" placeholder="*********" /></li>
        <li class="acc-login">
            <input type="checkbox"  class="radio">
            <label for="remember">Remember Me</label>
            <div class="forgotpass"><input type="button" name="forgotpassword" value="" /><span class="fancybox" href="#forgot-pass">Forgot Password</span></div>
        </li>
        <li>
            <div class="login-btn">
                <input type="submit" name="submit" value="Login" />
            </div>
        </li>
    </ul>
</div>
<div class="login-popup forgotpassword" id="forgot-pass">
    <div class="login-heading"> Forgot Password </div>
        <p>Please enter your email ID below. We will send you a link to reset your password.</p>
    <ul class="acc-login">
            <li><p>Email<span class="required">*</span></p><input type="text" name="email" value="" placeholder="example@example.com" /></li>
            
            <li>
                <div class="login-btn">
                    <input type="submit" name="submit" value="Send Email" />
                </div>
            </li>
        </ul>
</div>