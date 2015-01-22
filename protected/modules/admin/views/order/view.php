<style>
	table.detail-view tr th{text-align: right;padding-right: 10px;}
</style>
<div class="page-header">
	<div class="pull-left">
		<h1>View Order</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin'),array());?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Order',array('/admin/order'),array());?><i class="icon-angle-right"></i></li>
		<li><a href="#">View Order</a></li>
	</ul>
	<div class="close-bread"><?php echo CHtml::link('<i class="icon-remove"></i>',array('#'));?></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>
					View Order
				</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/order'),array('alt'=>'Back', 'title'=>'Back','data-toggle'=>'modal','class'=>'btn pull-right'));?>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Order ID</h3>
							</div>
							<div class="box-content">
								<table id="yw0" class="detail-view">
									<tr class="odd"><th>Order Details:</th><td><?php echo date('d/m/Y h:i A',strtotime($model->orderDateAdded));?></td></tr>
									<tr class="even">
										<th>Order Status:</th>
										<td><?php echo CHtml::dropDownList('orderStatus',$model->orderStatus,
		                                					array('Canceled'=>'Canceled','Completed'=>'Completed','Disputed'=>'Disputed','Pending'=>'Pending','Posted'=>'Posted'),
		                                					array('class'=>'select2-me input-large','empty'=>'-Select Status-'));?></td>
									</tr>
								</table>
					    	</div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Accout Information</h3>
							</div>
							<div class="box-content">
								<table id="yw0" class="detail-view">
									<tr class="odd"><th>Customer Name:</th><td><?php echo $model->orderCustomerFirstName.' '.$model->orderCustomerLastName;?></td></tr>
									<tr class="even"><th>Email:</th><td><?php echo $model->orderCustomerEmail;?></td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Billing Address</h3>
							</div>
							<div class="box-content">
								<table id="yw0" class="detail-view">
									<tr class="odd"><th>Address1:</th><td><?php echo $model->orderBillingAddress1;?></td></tr>
									<tr class="even"><th>Address2:</th><td><?php echo $model->orderBillingAddress2;?></td></tr>
									<tr class="odd"><th>Country:</th><td><?php echo $model->billingCountry->countryName;?></td></tr>
									<tr class="even"><th>State:</th><td><?php echo $model->billingState->stateName;?></td></tr>
									<tr class="odd"><th>City:</th><td><?php echo $model->billingCity->cityName;?></td></tr>
									<tr class="even"><th>Zipcode:</th><td><?php echo $model->orderBillingZipcode;?></td></tr>
									<tr class="odd"><th>Phone:</th><td><?php echo $model->orderBillingPhone;?></td></tr>
								</table>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Shipping Address</h3>
							</div>
							<div class="box-content">
								<table id="yw0" class="detail-view">
									<tr class="odd"><th>Address1:</th><td><?php echo $model->orderShippingAddress1;?></td></tr>
									<tr class="even"><th>Address2:</th><td><?php echo $model->orderShippingAddress2;?></td></tr>
									<tr class="odd"><th>Country:</th><td><?php echo $model->shippingCountry->countryName;?></td></tr>
									<tr class="even"><th>State:</th><td><?php echo $model->shippingState->stateName;?></td></tr>
									<tr class="odd"><th>City:</th><td><?php echo $model->shippingCity->cityName;?></td></tr>
									<tr class="even"><th>Zipcode:</th><td><?php echo $model->orderShippingZipcode;?></td></tr>
									<tr class="odd"><th>Phone:</th><td><?php echo $model->orderShippingPhone;?></td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<div class="box box-color box-bordered">
							<?php $configurations = Configurations::model()->findByPk('1'); ?>
							<div class="box-title">
								<h3>Shipping and Handling Information</h3>
							</div>
							<div class="box-content"><?php if(isset($configurations->configurationFreeShippingOver)){echo "Free Shipping (Order > ".CommonFunctions::addCurrencySymbol($configurations->configurationFreeShippingOver).")";}?></div>
						</div>
					</div>
					<div class="span6">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Comments</h3>
							</div>
							<div class="box-content"><?php echo $model->orderCustomerComment;?></div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Order Items</h3>
							</div>
							<div class="box-content">
								<div class="table-responsive" style="width:100%; overflow-x:auto;">
									<table class="table table-hover table-nomargin table-bordered">
										<thead>
										<tr>
											<th id="deals-grid_c0" class="hidden-480">Sr. No.</th>
											<th id="deals-grid_c1">Items Ordered</th>
											<th id="deals-grid_c2">Category</th>
											<th id="deals-grid_c3">Price</th>
											<th id="deals-grid_c4">Qty.</th>
											<th id="deals-grid_c5">Sub-Total</th>
										</thead>
										<tbody>
											<?php 
											$items = $model->orderItem;
											$orderTotal = 0.00;
											$i = 1;
											foreach ($items as $item) { ?>
												<tr class="odd">
													<td class="hidden-480" style="text-align:center"><?php echo $i;?></td>
													<td style="text-align:center"><?php echo $item->orderItemName;?></td>
													<td style="text-align:center"><?php echo $item->orderItemName;?></td>
													<td style="text-align:center"><?php echo CommonFunctions::addCurrencySymbol($item->orderItemPrice);?></td>
													<td style="text-align:center"><?php echo $item->orderItemQuantity;?></td>
													<td style="text-align:center"><?php echo CommonFunctions::addCurrencySymbol($item->orderItemTotalPrice);?></td>
												</tr>
											<?php 
											$orderTotal += $item->orderItemTotalPrice;
											$i++; }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span9">
						&nbsp;
					</div>
					<div class="span3">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>Order Totals</h3>
							</div>
							<div class="box-content">
								<table id="yw0" class="detail-view">
									<tr class="odd"><th>Subtotal:</th><td><?php echo CommonFunctions::addCurrencySymbol($orderTotal);?></td></tr>
									<tr class="even"><th>Shipping & Handling:</th><td><?php echo CommonFunctions::addCurrencySymbol('0.00');?></td></tr>
									<?php if(!empty($model->orderCouponDiscount)){?>
										<tr class="odd"><th>Coupon Discount:</th><td><?php echo CommonFunctions::addCurrencySymbol($model->orderCouponDiscount);?></td></tr>
									<?php $orderTotal -= $model->orderCouponDiscount;} ?>
									<tr class="even"><th>Grand Total:</th><td><?php echo CommonFunctions::addCurrencySymbol($orderTotal);?></td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#orderStatus').change(function(){
	$.post(
		'<?php echo Yii::app()->baseUrl;?>/admin/order/changeStatus',
		{
			'order-grid_c1':'<?php echo $model->pkOrderID;?>',
			'orderStatus':$(this).val()
		},
		function(){

		}
	);
});
</script>