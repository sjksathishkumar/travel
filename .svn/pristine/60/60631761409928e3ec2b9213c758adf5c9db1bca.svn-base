<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="breadcrumb">
	<div class="layout">
		<ul>
			<li><?php echo CHtml::link('home',$siteUrl,array('title'=>'home'));?>&raquo;</li>
			<li class="active">order detail</li>
		</ul>
	</div>
</div>
<div class="body_container order_details">
	<div class="layout">
		<div class="order_details_page">
			<h3 class="head">Order Details</h3>
			<div class="simplebox">
				<div class="halfbox_left">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">ORDER</h3>
						</div>
						<div class="pdeatails_box">
							<div class="date_status">
								<p class="cont_discription">
									<strong>Order Status :</strong><span>Pending</span>
								</p>
								<p class="cont_discription">
									&nbsp;
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="halfbox_right">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">Account Information</a></h3>
						</div>
						<div class="pdeatails_box">
							<div class="date_status">
								<p class="cont_discription">
									<strong>Customer Name :</strong><span><?php echo $user->userFirstName.'&nbsp;'.$user->userLastName;?></span>
								</p>
								<p class="cont_discription">
									<strong>Customer Email :</strong><span><?php echo $user->userEmail;?></span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebox">
				<div class="halfbox_left">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">Billing Address</a><span class="editbutton fancybox" id="edit-billing" href="#edit-billing-address">Edit</span></h3>
						</div>
						<div class="pdeatails_box billing-address">
							<?php if(!empty($order->billingCity->cityName)){ ?>
								<ul class="addresses">
									<li><?php echo $order->orderBillingAddress1;?></li>
									<li><?php echo $order->orderBillingAddress2;?></li>
									<li><?php echo $order->billingCity->cityName;?></li>
									<li><?php echo $order->billingState->stateName;?></li>
									<li><?php echo $order->billingCountry->countryName;?></li>
									<li><?php echo $order->orderBillingZipcode;?></li>
									<li>Tel: <?php echo $order->orderBillingPhone;?></li>
								</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="halfbox_right">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">Shipping Address</a><span class="editbutton fancybox" id="edit-shipping" href="#edit-shipping-address">Edit</span></h3>
						</div>
						<div class="pdeatails_box shipping-address">
							<?php if(!empty($order->shippingCity->cityName)){ ?>
								<ul class="addresses">
									<li><?php echo $order->orderShippingAddress1;?></li>
									<li><?php echo $order->orderShippingAddress2;?></li>
									<li><?php echo $order->shippingCity->cityName;?></li>
									<li><?php echo $order->shippingState->stateName;?></li>
									<li><?php echo $order->shippingCountry->countryName;?></li>
									<li><?php echo $order->orderShippingZipcode;?></li>
									<li>Tel: <?php echo $order->orderShippingPhone;?></li>
								</ul>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebox">
				<div class="halfbox_left">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">Comment History</a></h3>
						</div>
						<div class="pdeatails_box">
							<div class="order_history_box">
								<p class="order_commentsp">
									Add Order Comments
								</p>
								<?php echo CHtml::textarea('orderCustomerComment',$order->orderCustomerComment,array("class"=>"commentshistory"));?>
							</div>
						</div>
					</div>
				</div>
				<div class="halfbox_right">
					<div class="boxes">
						<div class="requiredheading">
							<h3><a href="#" class="texth">Order Total</a></h3>
						</div>
						<?php
						$total = 0;
							foreach ($shoppingCart as $product) {
								$deal = Deals::model()->findByPk($product['dealID']);
								$total += $deal->dealPrice*$product['qty'];
							}
							$grandTotal = $total;
						?>
						<div class="pdeatails_box">
							<div class="order_total">
								<div class="border_bott firstbor">
									<div class="order_row">
										<div class="labelbold">
											Sub Total:
										</div>
										<div class="valuesmall">
											<?php echo CommonFunctions::addCurrencySymbol($total);?>
										</div>
									</div>
									<div class="order_row">
										<div class="labelbold">
											Shipping & Handling:
										</div>
										<div class="valuesmall">
											<?php 
												$shippingCharges = 0.00;
												$grandTotal += $shippingCharges;
												echo CommonFunctions::addCurrencySymbol($shippingCharges);
											?>
										</div>
									</div>
									<?php if(isset(Yii::app()->session['discountCoupon'])){?>
										<div class="order_row">
											<div class="labelbold">
												Coupon Discount:
											</div>
											<div class="valuesmall">
												<?php 
													$discount = unserialize(Yii::app()->session['discountCoupon']); 
													if($discount['couponType'] == 'Flat'){
														$discountPrice = $discount['couponDiscountVariable'];
													}else{
														$discountPrice = ($total*$discount['couponDiscountVariable'])/100;
													}
													$grandTotal -= $discountPrice;
													echo CommonFunctions::addCurrencySymbol($discountPrice);
												?>
											</div>
										</div>
									<?php } ?>
									<div class="order_row">
										<div class="labelbold">
											Grand Total:
										</div>
										<div class="valuesmall">
											<?php echo CommonFunctions::addCurrencySymbol($grandTotal);?>
										</div>
									</div>
								</div>
								<div class="border_bott">
									<div class="order_row">
										<div class="labelbold">
											Reward Points Earned:
										</div>
										<div class="valuesmall">
											20 Points
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="simplebox">
				<div class="overflow">
				<table width="1000" class="items_table" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
						<th align="left">ITEMS ORDERED</th>
						<th>CATEGORY</th>
						<th>PRICE</th>
						<th>QTY. </th>
						<th>SUBTOTAL</th>
						<th>GRAND </th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($shoppingCart as $product) { $deal = Deals::model()->findByPk($product['dealID']);?>
							<tr>
								<td class="firsttd"><?php echo ucfirst($deal->dealName);?></td>
								<td><?php echo ucfirst($deal->category->categoryName);?></td>
								<td><?php echo CommonFunctions::addCurrencySymbol($deal->dealPrice);?></td>
								<td><?php echo $product['qty'];?></td>
								<td><?php 
									$subtotal = $product['qty']*$deal->dealPrice;
									echo CommonFunctions::addCurrencySymbol($subtotal);
								?></td>
								<td class="lasttd"><?php echo CommonFunctions::addCurrencySymbol($subtotal);?></td>
								
							</tr>
						<?php }?>
					</tbody>
				</table>
				</div>
			</div>
			<div class="simplebox">
				<?php echo CHtml::link('Submit<span></span>',$siteUrl.'/checkout/payment',array('class'=>'nextbutton order_submit'));?>
			</div>
		</div>
	</div>
</div>
<div id="edit-billing-address" style="display:none;" class="user-reg-popup"></div>
<div id="edit-shipping-address" style="display:none;" class="user-reg-popup"></div>
<script type="text/javascript">
$('.order_submit').click(function(e){
	e.preventDefault();
	$.post(SITE_ROOT_URL+'/checkout/updateOrderComment',{comment:$('.commentshistory').val()},function(data){
		window.location = $('.order_submit').attr('href');
	});
});
$('body').on('click','#edit-billing',function(){
	$.get(SITE_ROOT_URL+'/checkout/editBillingAddress',{},function(data){
		$('#edit-billing-address').html($(data).find('#user-billing-content').html());
		editBillingForm();
		$('.select-cat').resetSS();
	});
});

function editBillingForm(){
    $('#Order_orderBillingCountry').change(function(){
        $.post('<?php echo CController::createUrl("dynamicstates");?>',{country:$(this).val()},function(data){
				$("#orderbillingstate").html(data);
                $('.select-cat').resetSS();
        });
    });

    $('#orderbillingstate').change(function(){
    	$.post('<?php echo CController::createUrl("dynamiccities");?>',{state:$(this).val()},function(data){
        	$("#orderbillingcity").html(data);
			$('.select-cat').resetSS();
        });
    });

    $('#user-billing-form').submit(function(e){
    	e.preventDefault();
    	$.post($(this).attr('action'),$(this).serialize(),function(data){
    		if(data){
    			$('.validation_errors').html(data);
    		}else{
    			$.post(window.location.href,{},function(data){
    				if($(data).find('.billing-address').html())
    				{
    					$('.billing-address').html($(data).find('.billing-address').html());
    					$.fancybox.close();
    				}
	    		});
    		}
    	});
    });
}


$('#edit-shipping').click(function(){
	$.get(SITE_ROOT_URL+'/checkout/editShippingAddress',{},function(data){
		$('#edit-shipping-address').html($(data).find('#user-shipping-content').html());
		editShippingForm();

		$('.select-cat').resetSS();
	});
});

function editShippingForm(){
    $('#Order_orderShippingCountry').change(function(){
        $.post('<?php echo CController::createUrl("dynamicstates");?>',{country:$(this).val()},function(data){
				$("#ordershippingstate").html(data);
                $('.select-cat').resetSS();
        });
    });

    $('#ordershippingstate').change(function(){
    	$.post('<?php echo CController::createUrl("dynamiccities");?>',{state:$(this).val()},function(data){
        	$("#ordershippingcity").html(data);
			$('.select-cat').resetSS();
        });
    });

    $('#user-shipping-form').submit(function(e){
    	e.preventDefault();
    	$.post($(this).attr('action'),$(this).serialize(),function(data){
    		if(data){
    			$('.validation_errors').html(data);
    		}else{
	    		$.post(window.location.href,{},function(data){
	    			$('.shipping-address').html($(data).find('.shipping-address').html());
	    			$.fancybox.close();
	    		});
	    	}
    	});
    });
}
</script>