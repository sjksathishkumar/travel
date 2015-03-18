	<div class="breadcrumb">
		<div class="layout">
			<ul>
				<li class="active">
					<?php echo CHtml::link('Home',array('dashboard')); ?>
				</li>
			</ul>
		</div>
	</div>
<div class="body_container dashboard_container">
	<div class="layout">
		<div class="dashboard_pg">
			<h3 class="head">Dashboard</h3>

			<div class="breadcrumbs" id="breadcrumbs-msg">
			<?php  if(Yii::app()->User->hasFlash('updateAccountSuccess')){ ?>
				<ul>
			          <?php
			                if(Yii::app()->User->getFlash('updateAccountSuccess'))
			                {
			                    echo '<li><span class="readcrum_without_link_success">'.EDIT_PROFILE_SUCCESS.'</li>';
			                }
			          ?>						
			      </ul>
			<?php } ?>
			</div>

			<div class="boxes">
				<div class="sortheading">
					<h3><a href="#" class="texth">My Profile</a>
					<div class="closebutton" id="info">
						<a href="#" id="infotext">-</a>
					</div></h3>

				</div>
				<div class="accountinfo_box">
					<div class="account_innerbox">
						<h3 class="account_heading">Account Information <span class="editbutton"><?php echo CHtml::link('Edit',Yii::app()->baseUrl.'/customer/update');?></span></h3>
						<div class="simplebox">
							<div class="contact_info">
								<h3>Contact Information</h3>

								<p>
									<?php echo $data['customersDetails']->customerFirstName; echo " ".$data['customersDetails']->customerLastName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userEmail;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->customerMobile;?>
								</p>
							</div>

							<div class="contact_info">
								<h3>Shipping Information</h3>

								<p>
									<?php echo $data['customersDetails']->customerFirstName; echo " ".$data['customersDetails']->customerLastName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userShippingAddress1;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userShippingAddress2;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->shippingCity->cityName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->shippingState->stateName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->shippingCountry->countryName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userShippingZip;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userShippingPhone;?>
								</p>
							</div>

							<div class="contact_info">
								<h3>Billing Information</h3>

								<p>
									<?php echo $data['customersDetails']->customerFirstName; echo " ".$data['customersDetails']->customerLastName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->customerAddress;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->customerAddress2;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->city->cityName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->state->stateName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->country->countryName;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->customerZip;?>
								</p>
								<p>
									<?php echo $data['customersDetails']->userBillingPhone;?>
								</p>
							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="boxes">
				<div class="sortheading">
					<h3><a href="#" class="texth">My Orders</a>
					<div class="closebutton" id="order">
						<a href="#" id="ordertext">-</a>
					</div></h3>

				</div>
				<div class="myorder_box">
		<div class="overflow">			

<div class="tablecontent">
						<div class="o_row thead">
							<div class="o_col1">
								Category
							</div>
							<div class="o_col2">
								Product Name
							</div>
							<div class="o_col3">
								Price
							</div>
							<div class="o_col4">
								Date
							</div>
							<div class="o_col5">
								Status
							</div>
						</div>

						<div class="o_row">
							<div class="o_col1">
								Fashion
							</div>
							<div class="o_col2">
								Loreal Message
							</div>
							<div class="o_col3">
								N2199
							</div>
							<div class="o_col4">
								05/02/2014
							</div>
							<div class="o_col5">
								Completed
							</div>
						</div>

						<div class="o_row">
							<div class="o_col1">
								Fashion
							</div>
							<div class="o_col2">
								Loreal Message
							</div>
							<div class="o_col3">
								N2199
							</div>
							<div class="o_col4">
								05/02/2014
							</div>
							<div class="o_col5">
								<span class="pendin">Pending</span>
							</div>
						</div>

						<div class="o_row">
							<div class="o_col1">
								Fashion
							</div>
							<div class="o_col2">
								Loreal Message
							</div>
							<div class="o_col3">
								N2199
							</div>
							<div class="o_col4">
								05/02/2014
							</div>
							<div class="o_col5">
								Completed
							</div>
						</div>

						<div class="o_row">
							<div class="o_col1">
								Fashion
							</div>
							<div class="o_col2">
								Loreal Message
							</div>
							<div class="o_col3">
								N2199
							</div>
							<div class="o_col4">
								05/02/2014
							</div>
							<div class="o_col5">
								<span class="pendin">Pending</span>
							</div>
						</div>

						<div class="o_row">
							<div class="o_col1">
								Fashion
							</div>
							<div class="o_col2">
								Loreal Message
							</div>
							<div class="o_col3">
								N2199
							</div>
							<div class="o_col4">
								05/02/2014
							</div>
							<div class="o_col5">
								Completed
							</div>
						</div>

					</div>
</div>
				</div>

			</div>

			<div class="boxes">
				<div class="sortheading">
					<h3><a href="#" class="texth">My Rewards Points</a>
					<div class="closebutton" id="reward">
						<a href="#" id="rewardtext">-</a>
					</div></h3>

				</div>
				<div class="myreward_box">

					<h3 class="toreedom">You have 1000 points to Redeem </h3>
				
				<div class="overflow">
				
					<div class="tablecontent">

						<div class="re_row thead2">
							<div class="r8">
								Rewards Points Gained

							</div>
							<div class="r7">
								From
							</div>
						</div>

						<div class="re_row thead2">
							<div class="r1">

							</div>
							<div class="r2">
								Order Id
							</div>
							<div class="r3">
								Date
							</div>
							<div class="r4">
								Order Value
							</div>
							<div class="r5">
								Customer
							</div>
							<div class="r6">
								Status
							</div>
						</div>

						<div class="re_row">
							<div class="r1">
								110
							</div>
							<div class="r2">
								154852
							</div>
							<div class="r3">
								10/05/2014
							</div>
							<div class="r4">
								$110
							</div>
							<div class="r5">
								Matt Martin
							</div>
							<div class="r6">
								Completed
							</div>
						</div>
						<div class="re_row">
							<div class="r1">
								110
							</div>
							<div class="r2">
								154852
							</div>
							<div class="r3">
								10/05/2014
							</div>
							<div class="r4">
								$110
							</div>
							<div class="r5">
								Matt Martin
							</div>
							<div class="r6">
								Completed
							</div>
						</div>
						<div class="re_row lastrerow">
							<div class="r1">
								110
							</div>
							<div class="r2">
								154852
							</div>
							<div class="r3">
								10/05/2014
							</div>
							<div class="r4">
								$110
							</div>
							<div class="r5">
								Matt Martin
							</div>
							<div class="r6">
								Completed
							</div>
						</div>

					</div>
					
					</div>
					<div class="invoice_structure">
						<div class="halfinvoice">
							<div class="bottborder">
								<div class="lefttext">
									Total Reward Points Gained:
								</div>
								<div class="right_value">
									1068 points
								</div>
								<div class="clear"></div>
								<div class="lefttext">
									Redeemed Reward Points:
								</div>
								<div class="right_value">
									1068 points
								</div>
								<div class="clear"></div>
							</div>

							<div class="lefttext">
								Available Rewards Points :
							</div>
							<div class="right_value">
								1000 points
							</div>
							<div class="clear"></div>
						</div>

					</div>
				</div>

			</div>

			<div class="boxes">
				<div class="sortheading">
					<h3><a href="#" class="texth">My Wallet</a>
					<div class="closebutton" id="wallet">
						<a href="#" id="wallettext">-</a>
					</div></h3>

				</div>
				<div class="mywalletbox">
					<h2 class="cbalance"> Your currunt balance is <span>N25000</span></h2>
<div class="overflow">		
					<div class="simplebox">
						<div class="wallet_row">
							<div class="acc_img">
								<a href="#"><img src="common/images/acc_img.jpg" /></a>
							</div>
							<div class="acc_name">
							<h5 class="aname">Account Name :</h5>
							<p class="centertext">Travelogini</p>
							</div>
							<div class="acc_number">	<h5 class="aname">Account Number :</h5>
							<p class="centertext">0001237608</p>
							</div>
							<div class="send_payment">
							<a class="sendpayinstt fancybox" href="#map">Send me payment Instruction<span></span>  </a>
							</div>

						</div>

<div class="wallet_row">
							<div class="acc_img">
								<a href="#"><img src="common/images/acc_img.jpg" /></a>
							</div>
							<div class="acc_name">
							<h5 class="aname">Account Name :</h5>
							<p class="centertext">Travelogini</p>
							</div>
							<div class="acc_number">	<h5 class="aname">Account Number :</h5>
							<p class="centertext">0001237608</p>
							</div>
							<div class="send_payment">
							<a class="sendpayinstt fancybox" href="#inline1">Send me payment Instruction<span></span>  </a>
							</div>

						</div>
<div class="wallet_row">
							<div class="acc_img">
								<a href="#"><img src="common/images/acc_img.jpg" /></a>
							</div>
							<div class="acc_name">
							<h5 class="aname">Account Name :</h5>
							<p class="centertext">Travelogini</p>
							</div>
							<div class="acc_number">	<h5 class="aname">Account Number :</h5>
							<p class="centertext">0001237608</p>
							</div>
							<div class="send_payment">
							<a class="sendpayinstt fancybox" href="#inline1">Send me payment Instruction<span></span>  </a>
							</div>

						</div>

					</div>
</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div id="inline1" class="sendpaypopup">
	<div class="simplebox confirm_number">
		<div class="divleft"><label>Enter Phone Number</label></div>
		<div class="divright"><input type="text" class="phonenumber" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" value="Enter Your Phone Number" /></div>
		
	</div>
	<div class="simplebox">
		<a href="#" class="sendpayinstt">Send me payment Instruction<span></span>  </a>
	</div>
</div>

<div class="map_structure" id="map">
<iframe width="100%" height="523" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="padding:0; max-width:100%;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d56037.98123864608!2d77.2904751924962!3d28.618556143284184!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1403870913494"></iframe>
</div>
