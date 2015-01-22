<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="clear"></div>
    <div class="breadcrumb">
        <div class="layout">
            <ul>
                <li><?php echo CHtml::link('home',$siteUrl);?>&raquo;</li>
                <li class="active">shopping cart</li>
            </ul>
        </div>
    </div>
    <div class="body_container">
        <div class="layout">
            <div class="contact_pg">
                <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'shopping-cart-form',
                                                            'enableAjaxValidation'=>false,
                                                            'method'=>'post',
                                                            'action'=>Yii::app()->baseUrl.'/shoppingcart/update',
                                                            'htmlOptions'=>array(
                                                                    'novalidate'=>'novalidate',
                                                            ),
                                                        )
                                    );?>
                    <span class="shopping-cart-error error"><?php echo Yii::app()->user->getFlash('quantity_exceed'); ?></span>
                    <span class="shopping-cart-error green"><?php echo Yii::app()->user->getFlash('cart_updated'); ?></span>
                    <span class="shopping-cart-error green"><?php echo Yii::app()->user->getFlash('product_removed'); ?></span>
                    <h3 class="head">shopping cart</h3>
                    <div class="mob_shop">
                        <ul class="shop_details">
                            <li class="first">
                                <div class="items"><span>ITEMS</span></div>
                                <div class="price"><span>PRICE</span></div>
                                <div class="qty"><span>QTY.</span></div>
                                <div class="sub_total"><span>SUB TOTAL</span></div>
                            </li>
                            <?php 
                            $i = 0;
                            $sub_total = 0;
                            foreach ($cartDeals as $deal) { ?>
                                <li>
                                    <div class="items">
                                        <figure><?php echo CHtml::image($siteUrl."/uploads/deals/80X70/".$deal->dealImagePath,$deal->dealImageAlt,array('title'=>$deal->dealImageAlt));?></figure>
                                        <p><?php echo 'Pay '.CommonFunctions::addCurrencySymbol($deal->dealPrice)." for ".$deal->dealName;?> </p>
                                    </div>
                                    <div class="price"><p><?php echo CommonFunctions::addCurrencySymbol($deal->dealPrice);?></p></div>
                                    <div class="qty">
                                        <span class="drop1">           
                                            <?php echo CHtml::textField('dealQuantity[]',$arrSessionCart[$i]['qty'],array('class'=>'numeric-10','max'=>5));?>
                                            <?php echo CHtml::hiddenField('dealID[]',$deal->pkDealID);?>
                                        </span>
                                        <?php echo CHtml::link('X',$siteUrl.'/shoppingcart/remove/pid/'.$deal->pkDealID,array('class'=>'remove-from-cart','title'=>'Remove'));?>
                                    </div>
                                    <div class="sub_total"><p class="green"><?php echo CommonFunctions::addCurrencySymbol($deal->dealPrice*$arrSessionCart[$i]['qty']);?></p></div>
                                </li>
                            <?php 
                                $sub_total += $deal->dealPrice*$arrSessionCart[$i]['qty'];
                                $i++;
                            } ?>
                        </ul>
                    </div>
                    <?php if(count($cartDeals)>0){ ?>
                        <div class="total_price">
                            <p class="green"><?php echo CommonFunctions::addCurrencySymbol($sub_total)?></p>
                            <small>ORDER SUB TOTAL:</small>
                            <?php $discountValue = 0; if(isset(Yii::app()->session['discountCoupon'])){ ?>
                                    <?php 
                                        $discountOption = unserialize(Yii::app()->session['discountCoupon']);
                                        if($discountOption['couponType'] == 'Percentage'){
                                            $discountValue = ($sub_total*$discountOption['couponDiscountVariable'])/100;
                                        }else{
                                            $discountValue = $discountOption['couponDiscountVariable'];
                                        }
                                    ?>
                                    <div class="clear"></div>
                                    <p class="green"><?php echo CommonFunctions::addCurrencySymbol($discountValue)?></p>
                                    <small>Coupon Dicount:</small>
                            <?php } ?>
                            <div class="clear"></div>
                            <p class="green"><?php 
                                $total = $sub_total - $discountValue;
                                echo CommonFunctions::addCurrencySymbol($total)?></p>
                            <small>ORDER TOTAL:</small>
                        </div>
                        <div class="cupan_sec">
                            <?php if(!isset(Yii::app()->session['discountCoupon'])){ ?>
                                <label>Have a Coupon Code?</label>
                                <?php echo CHtml::textField('couponCode','Enter Coupon Code',array("onfocus"=>"if(this.value==this.defaultValue)this.value='';", "onblur"=>"if(this.value=='')this.value=this.defaultValue;"));?>
                                <?php echo CHtml::submitButton('applyCouponCode',array('value'=>'APPLY','id'=>'applyCouponCode'));?>
                                <label class="coupon-code-error">Please enter a coupon code.</label>
                                <?php if(Yii::app()->user->hasFlash('invalid_coupon')){ ?>
                                    <label class="coupon-code-error" style="display:block;"><?php echo Yii::app()->user->getFlash('invalid_coupon'); ?></label>
                                <?php } ?>
                            <?php }else{ ?>
                                <label>Coupon code applied.</label>
                            <?php } ?>
                        </div>
                        <div class="checkout_outer">
                            <?php echo CHtml::link('UPDATE CART',$siteUrl.'/shoppingcart/update',array('class'=>'checkout_btn shop_btn','id'=>'update-cart-button'));?>
                            <?php echo CHtml::link('CONTINUE SHOPPING',$siteUrl,array('class'=>'checkout_btn shop_btn'));?>
                            <?php echo CHtml::link('CHECKOUT',$siteUrl.'/checkout',array('class'=>'checkout_btn'));?>
                        </div>
                    <?php }else{ ?>
                            <div class="total_price">
                                <p style="float:left;">Your shopping cart is empty.</p>
                            </div>
                    <?php } ?>
                <?php $this->endWidget();?>
            </div>
            <?php $this->widget('application.components.front.newsletterSubscriptionForm');?>
        </div>
    </div>