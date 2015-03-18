<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>
<!-- Create Account Part Start From Here -->
<div class="container">
	<div class="full-box">
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
				<div class="dashboard-menu-outerbox">
					<div class="dashboard-menu">
						<ul>
							<li class="active"><a href="#">Dashboard</a></li>
							<li><a href="../profile/index">Profile</a></li>
							<li><a href="#">Properties</a></li>
							<li><a href="#">Bookings</a></li>
							<li><a href="#">eWallet</a></li>	
							<li><a href="#">Special Deals</a></li>	
							<li><a href="#">Service Request</a></li>
							<li><a href="#">Report</a></li>
						</ul>
					</div>
					</div>
					<div class="dashboard-menu-form-box">
						<div class="dashboard-heading">
							Recent Bookings
						</div>
						<div class="table-outer">
						<table  width="100%" cellpadding="0" cellspacing="0">
							<thead>
							<tr class="gry-bg">
								<th class="bkng-id">Booking ID</th>
								<th class="customer-name">Customer Name</th>
								<th class="hotel">Hotels</th>
								<th class="no-rooms">No of Rooms</th>
								<th class="bkng-date">Booking Date</th>
								<th class="depart-date">Departure Date</th>
							</tr>
							</thead>
							<tbody>
								<tr>
									<td class="bkng-id">4F8100</td>
									<td class="customer-name">Tyagi</td>
									<td class="hotel">Taj</td>
									<td class="no-rooms">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
								</tr>
								<tr>
									<td class="bkng-id">4F8100</td>
									<td class="customer-name">Tyagi</td>
									<td class="hotel">Taj</td>
									<td class="no-rooms">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">05 Mar 2015</td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="today-requests form-heading">
							Today's Service Requests
						</div>
						<div class="table-outer">
						<table class="status-box" width="100%" cellpadding="0" cellspacing="0">
							<tr class="gry-bg">
								<th class="bkng-id">Customer Name</th>
								<th class="request-type">Type of request</th>
								<th class="request-date">Date of request</th>
								<th class="bkng-refID">Booking Ref ID</th>
								<th class="bkng-date">Comments</th>
								<th class="depart-date">Status</th>
								<th class="depart-date">Action</th>
							</tr>
							<tbody>
								<tr>
									<td class="bkng-id">4F8100</td>
									<td class="request-type">Tyagi</td>
									<td class="request-date">Taj</td>
									<td class="bkng-refID">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">
										<select data-placeholder="Opened" class="chosen-select" tabindex="1">
											<option value="select"></option>
											<option value="United States">Opened</option>
											<option value="United Kingdom">Closed</option>
										</select>
										</td>
									<td class="depart-date">
										<div class="tablebtn">
											<a href="#" class="reply mbot">Reply</a>
											<a href="#" class="remove margin0">Remove</a>
										</div>
									</td>
								</tr>
								<tr>
									<td class="bkng-id">4F8100</td>
									<td class="request-type">Tyagi</td>
									<td class="request-date">Taj</td>
									<td class="bkng-refID">1</td>
									<td class="bkng-date">27 Feb 2015</td>
									<td class="depart-date">
										<select data-placeholder="Closed" class="chosen-select" tabindex="1">
											<option value="select"></option>
											<option value="United States">Opened</option>
											<option value="United Kingdom">Closed</option>
										</select>
										</td>
									<td class="depart-date">
										<div class="tablebtn">
											<a href="#" class="reply mbot">Reply</a>
											<a href="#" class="remove margin0">Remove</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Create Account Part End Here -->