<?php
$varBaseUrl = Yii::app()->baseUrl;
if(isset($autoRedirect) && !empty($autoRedirect)){?>
    <script>
	redirectPage("<?php echo $redirectUrl;?>");
    </script>
<?php } ?>
<div id="wrapper">
    <div class="offer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">                    
                    <div class="form registration" style=" overflow:hidden;">
                        <?php if($messageType=="error"){?>
                            <div class="errorImage">
                                <?php echo CHtml::image($varBaseUrl.IMG_FOLDER.'red-crossmark.png','',array('class'=>''));?>
                            </div>
                        <?php }else{?>
                            <div class="successImage">
                                <?php echo CHtml::image($varBaseUrl.IMG_FOLDER.'sucess.png','',array('class'=>''));?>
                            </div>
                        <?php } ?>
                        <div class="messageDiv"><?php echo $message;?></div>
                        <?php 
                        if(isset($autoRedirect) && !empty($autoRedirect)){?>
                            <center>Please wait while we redirect you...</center>                            
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


