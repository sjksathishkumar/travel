<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>
<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="membership-plan-outer">
			<div class="left-box-services">
				<div class="services-outer">
					<ul>
						<li>						
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['0']['mascotImage'],$data['mascots']['0']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href="" class="service-title">
									<?php echo $data['mascots']['0']['mascotName']; ?>                                                                
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['1']['mascotImage'],$data['mascots']['1']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['1']['mascotName']; ?>                                                             
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['2']['mascotImage'],$data['mascots']['2']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['2']['mascotName']; ?>                                                                  
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['3']['mascotImage'],$data['mascots']['3']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['3']['mascotName']; ?>                                                                    
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['4']['mascotImage'],$data['mascots']['4']['mascotAltTag'],array('width'=>166,'height'=>166)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['4']['mascotName']; ?>
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">My Account</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?> </div>
				</div>	
				<div class="dashboard-outer">
					<div class="dashboard-menu">
						<ul><?php if((Yii::app()->user->userPlan) == '0'){ ?>
								<li class="active"><?php echo CHtml::link('dashboard',$varBaseUrl.'/member/dashboard',array('title'=>'dashboard','alt'=>'dashboard'));?></li>
								<li><?php echo CHtml::link('Profile',$varBaseUrl.'/member/profile',array('title'=>'profile','alt'=>'profile'));?></li>
								<li><a href="#">Bookings</a></li>
								<li><a href="#">eWallet</a></li>
							<?php }else { ?>
								<li class="active"><?php echo CHtml::link('dashboard',$varBaseUrl.'/member/dashboard',array('title'=>'dashboard','alt'=>'dashboard'));?></li>
								<li><?php echo CHtml::link('Profile',$varBaseUrl.'/member/profile',array('title'=>'profile','alt'=>'profile'));?></li>
								<li><a href="#">Bookings</a></li>
								<li><a href="#">eWallet</a></li>
								<li><a href="#">Service Request</a></li>
								<li><a href="#">Gift Card</a></li>
								<li><a href="#">Invite Friends</a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="dashboard-menu-form-box">
						<div class="dashboard-heading">
							Your Upcoming Flight Bookings
						</div>
						<div class="table-outer">
						<table width="100%" cellpadding="0" cellspacing="0">
							<tr class="gry-bg">
								<th class="bkng-ref">Booking Reference</th>
								<th class="last-name">Last Name</th>
								<th class="nmber-passanger">No of Passengers</th>
								<th class="route">Route</th>
								<th class="bkng-date">Booking Date</th>
								<th class="depart-date">Departure Date</th>
								<th class="status">Status</th>
							</tr>
							<tbody>
								<tr>
									<td class="bkng-ref">4F8100</td>
									<td class="last-name">Tyagi</td>
									<td class="nmber-passanger">Taj</td>
									<td class="route">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
									<td class="status">Confirmed</td>
								</tr>
								<tr>
									<td class="bkng-ref">4F8100</td>
									<td class="last-name">Tyagi</td>
									<td class="nmber-passanger">Taj</td>
									<td class="route">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
									<td class="status">Confirmed</td>
								</tr>
								<tr>
									<td class="bkng-ref">4F8100</td>
									<td class="last-name">Tyagi</td>
									<td class="nmber-passanger">Taj</td>
									<td class="route">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
									<td class="status">Confirmed</td>
								</tr>
								<tr>
									<td class="bkng-ref">4F8100</td>
									<td class="last-name">Tyagi</td>
									<td class="nmber-passanger">Taj</td>
									<td class="route">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
									<td class="status">Confirmed</td>
								</tr>
								<tr>
									<td class="bkng-ref">4F8100</td>
									<td class="last-name">Tyagi</td>
									<td class="nmber-passanger">Taj</td>
									<td class="route">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
									<td class="status">Confirmed</td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="link-outer dashboard-profile">
							<a href="#" class="link">Your Upcoming Hotel Bookings</a>
						</div>
						<div class="btn-outer">
							<div class="login-btn submit-btn">
								<input type="submit" value="View Full Booking Details" name="submit">
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->