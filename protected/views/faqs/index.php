	<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
    $contact = Configurations::model()->findByPK('1');

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
					<div class="travelogini-heading">FAQs</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>
				<div class="faq-search-outer">
					<div class="search-box">
						<ul class="acc-login acc-login1">
							<li>
								<input class="mid-input" type="text" name="email" value="" placeholder="Name" />
							</li>
							<li>
								<div class="mid-input">
								  <select data-placeholder=".....all help topics...." class="chosen-select">
									<option value="select"></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>								
								  </select>
							  </div>							  
						
							</li><li>		<div class="login-btn submit-btn">
									<input type="submit" value="Search" name="Search">
								</div></li>
						</ul>
					</div>
				</div>
				<div class="faq-page">
				<div class="about-us-outer">
					<?php foreach($models as $model){ 
						echo "<div class='faq-box'><div class='faq-heading'>";
						echo CHtml::link($model->faqQuestion,array('faqs/single','id'=>$model->pkFaqID));
						echo "</div><p>";
						echo $model->faqAnswer;
						echo "</p></div>";
					 } ?>
				</div>
					<?php $this->widget('CLinkPager', array('pages' => $pages,'header' => false)); ?>
				</div>

			</div>
			
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->
