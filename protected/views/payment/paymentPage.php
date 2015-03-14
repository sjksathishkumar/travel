<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>


<!-- Create Account Part Start From Here -->
<div class="container">
	<div class="membership-plan-outer">
		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Payment Gateway</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
			</div>
			<div class="payment-box">
				<div class="acc-login">
					<h5>All fiels are mandatory <span class="required">*</span></h5>
					<div class="fullbox">
						<label>Payment method <span class="required">*</span> </label>
							<ul class="radioUI">
								<li>
									<div class="radioBox">
										<input type="radio" name="payment" class="radio"/>
										Credit Card
									</div>
									<div class="radioBox">
										<input type="radio" name="payment" class="radio"/>
										Debit Card
									</div>
									<div class="radioBox">
										<input type="radio" name="payment" class="radio"/>
										Paypal
									</div>
								</li>
							</ul>				
					</div>
					<div class="fullbox">
						<label>Name on card  <span class="required">*</span> 
							<span class="hint"><?php echo CHtml::image($varBaseUrl . "/images/hint.png"); ?></span>
						</label>
						<li><input type="text" placeholder="Pawan Kumar" ></li>
						<ul class="radioUI">
								<li>
									<div class="radioBox">
										<span class="inputbox"><input type="radio" name="paygatway" class="radio"/></span>
										<span class="payimg"><?php echo CHtml::image($varBaseUrl . "/images/visa.jpg"); ?></span>
									</div>
									<div class="radioBox">
										<span class="inputbox"><input type="radio" name="paygatway" class="radio"/></span>
										<span class="payimg"><?php echo CHtml::image($varBaseUrl . "/images/master-card.png"); ?></span>
									</div>
									<div class="radioBox">
										<span class="inputbox"><input type="radio" name="paygatway" class="radio"/></span>
										<span class="payimg"><?php echo CHtml::image($varBaseUrl . "/images/amex.png"); ?></span>
									</div>
								</li>
							</ul>
					</div>
					<div class="fullbox">
						<label> Card number  <span class="required">*</span>
							<span class="hint"><?php echo CHtml::image($varBaseUrl . "/images/hint.png"); ?></span>
						</label>
						<li><input type="text" placeholder="4506 2345 1256 4578" ></li>
					</div>
					<div class="fullbox">
						<label>Expiry date <span class="required">*</span> 
							<span class="hint"><?php echo CHtml::image($varBaseUrl . "/images/hint.png"); ?></span>
						</label>
						<ul class="acc-login member-create-account">
							<li>
								<div class="half-input">
									<div class="slecet-country">
										<select data-placeholder="Select" class="chosen-select half-input" tabindex="1">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>									
										  </select>
									</div>
								</div>
								<div class="half-input margin0">
									<div class="slecet-country">
										<select data-placeholder="select" class="chosen-select half-input" tabindex="1">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>											
										  </select>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="fullbox">
						<label> Security number <span class="required">*</span>
							<span class="hint"><?php echo CHtml::image($varBaseUrl . "/images/hint.png"); ?></span>
						</label>
						<li>
							<input type="text" placeholder="875" value="" name="firstname" class="half-input">
							<span class="payimg"><?php echo CHtml::image($varBaseUrl . "/images/atm-debit-card.png"); ?></span>
						</li>
					</div>
					<div class="text-center">
					<div class="login-btn submit-btn">
						<?php echo CHtml::link('Submit', array('/member/paymentProcess', 'id'=>$pkCustomerID, 'status'=> 'success' ),array('class' => 'simple-btn')); ?>
					</div>
					<div class="login-btn submit-btn">
						<input type="submit" value="Cancel" name="submit">
					</div>
					</div>
				</div>
			</div>				
		</div>
	</div>
</div>
<!-- Create Account Part End Here -->