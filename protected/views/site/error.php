<!-- <div class="body_container">
    <div class="layout">
        <h2>Error <?php //echo $code; ?></h2>
        <div class="error">
            <?php //echo CHtml::encode($message); ?>
        </div>
    </div>
</div>
 -->

 <?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>

		<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">
		<div class="membership-plan-outer">
			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">Error</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>
			</div>
			<div class="activated">
				<?php 
						echo "<div class='form-heading' align='center'>Oops ! Page not Found !</div>";
				?>
			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->