	<div class="breadcrumb">
		<div class="layout">
			<ul>
				<li>
					<a href="#">home</a>&raquo;
				</li>
				<li class="active">
					edit billing details
				</li>
			</ul>
		</div>
	</div>
	<div class="body_container edit_details">
		<div class="layout">
			<div class="edit_billing_details">
				<h3 class="head">Edit Billing Details</h3>

				<div class="boxes">
					<div class="requiredheading">
						<h3><a href="#" class="texth">Billing Address</a><span class="req">* Required Fields</span></h3>

					</div>
					<div class="pdeatails_box">
						<div class="simplebox">
							<div class="fieldbox">
								<label><span>*</span>Address Line 1</label>
                                <?php echo $form->textField($customer,'userBillingAddress1');?>
							</div>
							<div class="fieldbox">
								<label><span>*</span>Address Line 1</label>
								<?php echo $form->textField($customer,'userBillingAddress2');?>
							</div>
							<div class="fieldbox">
								<label><span>*</span>Country</label>
							
							<div class="countryclass">
								<select data-placeholder="Date" class="chosen-select" style="width:100%;" name="frmSdist" id="frmSdist">
										<option value="">India</option>
										<option value="">Iraq</option>
										<option value="">Iran</option>
										<option value="">Poland</option>
										<option value="">Europe</option>
										<option value="">India</option>
										<option value="">Iraq</option>
										
									</select>
								
							</div>
							</div>

							<div class="fieldbox">
								<label><span>*</span>Postal Code or Zip Code</label>
								<input type="text" value="1254558" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />
							</div>
							
							<div class="fieldbox">
								<label><span>*</span>Phone</label>
								<input type="text" value="1254558" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />
							</div>
							
						</div>

					</div>

				</div>
			

				<div class="boxes">
					<div class="requiredheading">
						<h3><a href="#" class="texth">Shipping Address</a><span class="req">* Required Fields</span></h3>

					</div>
					<div class="pdeatails_box">
						
						<div class="simplebox">
							<div class="fieldbox">
							
							<label class="samecheckbox"> <input type="checkbox" /> Same as billing address</label>
							</div>	
							
						</div>
						<div class="simplebox">
							<div class="fieldbox">
								<label><span>*</span>Address Line 1</label>
								<input type="text" value="1254 st, Brookhollw,  South Avenue" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />

							</div>
							<div class="fieldbox">
								<label><span>*</span>Address Line 1</label>
								<input type="text" value="1254 st, Brookhollw,  South Avenue" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />
							</div>
							<div class="fieldbox">
								<label><span>*</span>Country</label>
							
							<div class="countryclass">
								<select data-placeholder="Date" class="chosen-select" style="width:100%;" name="frmSdist" id="frmSdist">
										<option value="">India</option>
										<option value="">Iraq</option>
										<option value="">Iran</option>
										<option value="">Poland</option>
										<option value="">Europe</option>
										<option value="">India</option>
										<option value="">Iraq</option>
										
									</select>
								
							</div>
							</div>

							<div class="fieldbox">
								<label><span>*</span>Postal Code or Zip Code</label>
								<input type="text" value="1254558" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />
							</div>
							
							<div class="fieldbox">
								<label><span>*</span>Phone</label>
								<input type="text" value="1254558" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"  />
							</div>
							
						</div>

					</div>

				</div>
			
					<div class="simplebox">
					<a class="nextbutton" href="#">Save</a>

				</div>
                            <?php $this->endWidget();?>
			</div>

<ul>
		<li><a class="fancybox" href="#inline1">Inline</a></li>
	</ul>

	<div id="inline1" style="width:400px;display: none;">
		<h3>Etiam quis mi eu elit</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>
	</div>

		</div>
	</div>