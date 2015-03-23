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
							<?php $form=$this->beginWidget('CActiveForm', array(
									'action'=>Yii::app()->createUrl($this->route),
									'method'=>'get',
								    'id'=>'_search-form',
							)); ?>
							<li>
								<?php echo $form->textField($search,'faqQuestion',array('class'=>'mid-input','placeholder'=>'Enter Questions')); ?>
							</li>
							<li>
								<div class="mid-input">
									<?php echo $form->dropDownList($search, 'fkCategoryID',CHtml::listData(FaqsCategories::model()->findAll(array("condition"=>"faqCategoryStatus =  1")), 'pkCategoryID', 'faqCategoryName'), array('empty'=>'- Select Categories -', 'class' => 'chosen-select')); ?>			
							  </div>							  
						
							</li><li>		<div class="login-btn submit-btn">
									<?php echo CHtml::submitButton('Search',array('title'=>'Search','alt'=>'Search')); ?>
								</div></li>
							<?php $this->endWidget(); ?>
						</ul>
					</div>
					
				</div>
				<div class="faq-page">
				<div class="about-us-outer">
					<?php 
						$models = $search->search()->getData();
						$page = $search->search();
	                	$count = count($models); 
					 ?>
				</div>
					<?php $this->widget('CLinkPager', array('pages' => $page->pagination,'header' => false)); ?>
				</div>
				<div class="faq-page">
				<div class="about-us-outer">
					<?php 
						if( $count > 0) {
							foreach($models as $model){ 
							echo "<div class='faq-box'><div class='faq-heading'>";
							echo CHtml::link($model->faqQuestion,array('faqs/single','id'=>$model->pkFaqID));
							echo "</div><p>";
							echo $model->faqAnswer;
							echo "</p></div>";
					 		}
					 		$this->widget('CLinkPager', array('pages' => $page->pagination));
					 	}
					 	else
					 	{
					 		echo "No Data Found !";
					 	}
					  ?>
				</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->

