<?php $siteUrl = Yii::app()->baseUrl;?>
<?php $data['socialMedia'] = Configurations::model()->getSocialMediaLinks();?>
<div class="blue-bg">
    <div class="deals">
        <span class="msg-text">Want to get exciting <span>deals everyday?</span></span>
    </div>
    <div class="subscribe">
        <!-- Begin MailChimp Signup Form -->
        <form action="http://wordpress.us3.list-manage.com/subscribe/post?u=bfaa572207936af58c5d53d7f&amp;id=852e818730" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="text" name="EMAIL" class="subs-input required email" id="mce-EMAIL" value="Enter your Email Address" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';">
            <button type="submit" class="subs-btn" title="Subscribe">Subscribe</button>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>
        </form>
        <!--End mc_embed_signup-->  
    </div>
    <div class="social">
        <span>Follow us on</span>
        <ul>
            <li><?php echo CHtml::link(CHtml::image($siteUrl."/images/s_icon1.png",'facebook',array('title'=>'facebook')),$data['socialMedia']['configurationSocialLink1']);?></li>
            <li><?php echo CHtml::link(CHtml::image($siteUrl."/images/s_icon2.png",'twitter',array('title'=>'twitter')),$data['socialMedia']['configurationSocialLink2']);?></li>
            <li><?php echo CHtml::link(CHtml::image($siteUrl."/images/s_icon3.png",'google plus',array('title'=>'google plus')),$data['socialMedia']['configurationSocialLink4']);?></li>
            <li><?php echo CHtml::link(CHtml::image($siteUrl."/images/s_icon4.png",'skype',array('title'=>'skype')),$data['socialMedia']['configurationSocialLink6']);?></li>
        </ul>
    </div>
</div>
<script type='text/javascript' src='<?php echo $siteUrl;?>/js/mc-validate.js'></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>