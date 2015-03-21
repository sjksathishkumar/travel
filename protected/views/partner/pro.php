<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>
<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">

		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Create Account</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
			</div>
			<div class="signup-form">
				<div class="partners-choice"> Register as</div>
				<div class="partners-outer">
					<div class="partner-name">City Partner</div>
					<div class="partner-name">Property Partner</div>
				</div>
			
		<div class="register-form-outer">
			<div class="register-form-inner">
			<div class="form-heading">Personal Details</div>
			<ul class="acc-login">
				<li>
					<input class="half-input" type="text" name="firstname" value="" placeholder="First name" />
					<input class="half-input" type="text" name="lastname" value="" placeholder="Last Name" />
					<input class="half-input margin0" type="text" name="nickname" value="" placeholder="Nick Name" />
				</li>
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Email ID" />
					<input class="half-input" type="password" name="password" value="" placeholder="Password" />
					<input class="half-input margin0" type="password" name="confirmpass" value="" placeholder="Confirm password" />
				</li>
				<li>
					<input class="half-input" type="text" name="businessname" value="" placeholder="Business name" />
					<input class="half-input" type="text" name="contactnumber" value="" placeholder="Contact Number" />
					<div class="half-input date-cal margin0">
						<input id="datepicker"  type="text" name="dob" value="" placeholder="Date Of Borth" />
					</div>
				</li>
				<li>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="Country" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
							  <select data-placeholder="State" class="chosen-select half-input" >
								<option value="select"></option>								
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>
							  </select>
							  </div>
						  </div>
					</div>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="City" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
								<input type="text" name="zip" value="" placeholder="Zip" />
							  </div>
						  </div>
					</div>
					<input class="half-input margin0" type="text" name="area" value="" placeholder="Area" />
				</li>
				<li>
					<div class="form-heading">Area of Operation</div>
				</li>
				<li>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="Country" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
							  <select data-placeholder="State" class="chosen-select half-input" >
								<option value="select"></option>								
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>
							  </select>
							  </div>
						  </div>
					</div>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="City" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
								<input type="text" name="zip" value="" placeholder="Zip" />
							  </div>
						  </div>
					</div>
					<input class="half-input margin0" type="text" name="area" value="" placeholder="Area" />
				</li>
				<li>
					<input type="checkbox"  class="radio">
					<label for="remember"> I agree to terms and conditions </label>
				</li>
				<li>
					<div class="cntr-btn-outer">
						<div class="login-btn submit-btn">
							<input type="submit" name="submit" value="Create Account" />
						</div>						
					</div>
				</li>
			</ul>
			</div>
			
			<div class="register-form-inner">
			<div class="form-heading">Personal Details</div>
			<ul class="acc-login">
				<li>
					<input class="half-input" type="text" name="firstname" value="" placeholder="First name" />
					<input class="half-input" type="text" name="lastname" value="" placeholder="Last Name" />
					<input class="half-input margin0" type="text" name="nickname" value="" placeholder="Nick Name" />
				</li>
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Email ID" />
					<input class="half-input" type="password" name="password" value="" placeholder="Password" />
					<input class="half-input margin0" type="password" name="confirmpass" value="" placeholder="Confirm password" />
				</li>
				<li>
					<div class="prefered-method"> Preferred Contact Method </div>
					<div class="checkbox-outer">
						<input type="checkbox"  class="radio">
						<label for="remember"> Phone </label>
					</div>
					<div class="checkbox-outer">
						<input type="checkbox"  class="radio">
						<label for="remember"> Email </label>
					</div>
				</li>
				<li>
					<input class="half-input" type="text" name="contactnumber" value="" placeholder="Contact Number" />
					<div class="half-input date-cal">
						<input id="datepicker"  type="text" name="dob" value="" placeholder="Date Of Borth" />
					</div>
					<input class="half-input margin0" type="text" name="businessname" value="" placeholder="Business Name" />
				</li>
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Website" />
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="Country" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
							  <select data-placeholder="State" class="chosen-select half-input" >
								<option value="select"></option>								
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>
							  </select>
							  </div>
						  </div>
					</div>
					<div class="half-input margin0">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="City" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
								<input type="text" name="zip" value="" placeholder="Zip" />
							  </div>
						  </div>
					</div>
				</li>
				
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Area" />
				</li>
				<li>
					<input type="checkbox"  class="radio">
					<label for="remember"> I agree to terms and conditions </label>
				</li>
				<li>
					<div class="cntr-btn-outer">
						<div class="btn-outer">
							<div class="login-btn submit-btn">
								<input type="submit" name="submit" value="Create Account" />
							</div>
						</div>
					</div>
				</li>
			</ul>
			</div>
			</div>
			</div>
		</div>

	</div>
</div>