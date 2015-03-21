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
			<div class="">
			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">FAQs</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>
				<div class="faq-search-outer"></div>
				<div class="faq-page">
				<div class="about-us-outer">
					<div class="faq-box">
					<div class="faq-heading"><?php echo $model['0']['faqQuestion']; ?></div>
						<p><?php echo $model['0']['faqAnswer']; ?></p>
						<?php if(!empty($model['0']['faqAttachment']))
								{
									echo "<a class='link_icon' href=".Yii::app()->getBaseUrl(true)."/uploads/faq/".$model['0']['faqAttachment']." download=".$model['0']['faqAttachment'].">Download File</a>";
								}

								if(!empty($model['0']['faqHelpTopics']))
								{
									echo "<div class='tags'><span class='tag_heading'>Related</span></div>";
									echo "<div class='tags_name'>";
									$help = explode(',', $model['0']['faqHelpTopics']);
									$topics = $this->getRelatedTopics($help);
									$i = 0 ;
									while ( $i < 3) {
									foreach ($topics as $topic) {
											foreach ($topic as $obj) {
												echo CHtml::link($obj['faqQuestion'],array('faqs/single','id'=>$obj['pkFaqID']));
											}
										$i++;
										}
									}
									echo "</div>";
								}
						 ?>
						</div>
					
				</div>
				
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->