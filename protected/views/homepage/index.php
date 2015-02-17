<?php
    $varBaseUrl = Yii::app()->baseUrl;
        /*echo "<pre>";
        print_r($data['cms']['0']['cmsPageTitle']);
        die();*/
?>
  <!-- Top Slider Part Start From Here -->
    <div class="main-slider-outer">
        <div class="top-slider">        
            <div id="top-slider" class="owl-carousel">
                <?php foreach($data['bannerModel'] as $banner) {?>
                <div class="item">
                <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.BANNERS_FOLDER.$banner->bannerImage,$banner->bannerAltTag,array('title'=>$banner->bannerTitle));?></li>
                <div class="container">
                        <div class="slider-text-outer">
                            <div class="slider-text-left"></div>
                            <div class="slider-text">
                                <?php echo $banner->bannerTagLine; ?>
                            </div>
                            <div class="slider-text-right"></div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
              </div>
        </div>
        
        
            <div class="container">
            <div class="services-outer">
                <ul>
                    <li>                        
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['0']['mascotImage'],$data['mascots']['0']['mascotAltTag']); ?>
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
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['1']['mascotImage'],$data['mascots']['1']['mascotAltTag']); ?>
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
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['2']['mascotImage'],$data['mascots']['2']['mascotAltTag']); ?>
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
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['3']['mascotImage'],$data['mascots']['3']['mascotAltTag']); ?>
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
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['4']['mascotImage'],$data['mascots']['4']['mascotAltTag']); ?>
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
    </div>  
    <!-- Top Slider Part End Here --> 

    <!--- Body Container Part Start From Here -->
    <div class="body-container-outer">
    <div class="outer-img">
                <?php echo CHtml::image($varBaseUrl . "/images/outerdesign.png"); ?>
    </div>
    <div class="container">
        <div class="body-container">
            
            <div class="body-top-box">
                <div class="about-travelogini">
                    <div class="about-outer-travelogini">
                        <div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
                        <div class="travelogini-heading"><?php echo $data['cms']['0']['cmsPageTitle']; ?></div>
                        <div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>      
                    </div>
                    <p><?php echo $data['cms']['0']['cmsContent']; ?></p>
                </div>
                
                <div class="body-left-box">
                    <div class="title"> Special Deals</div>
                    <div id="special-deals">
                        <div id="special-deals-slider" class="owl-carousel">                  
                            <div class="item border0">
                                <div class="offer-img">
                                    <?php echo CHtml::image($varBaseUrl . "/images/buraj.jpg", "Buraj", array('title' => 'Buraj')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <h3 class="city-trip">
                                    Dubai Holiday Trip Get Rs. 2500/ off on any hotel.
                                </h3>
                                <div class="offer-time">
                                    4N / 5D Starting @ Rs 7779
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Cras et mauris eu tellus venentis dapibus vel a turpis. Nulla facilisi.</p>
                                    
                            <a class="view-detail" href=""> View Details </a>       
                            </div>
                            <div class="item">
                                <div class="offer-img">
                                    <?php echo CHtml::image($varBaseUrl . "/images/buraj.jpg", "Buraj", array('title' => 'Buraj')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <h3 class="city-trip">
                                    Dubai Holiday Trip Get Rs. 2500/ off on any hotel.
                                </h3>
                                <div class="offer-time">
                                    4N / 5D Starting @ Rs 7779
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Cras et mauris eu tellus venentis dapibus vel a turpis. Nulla facilisi.</p>
                                <a class="view-detail" href=""> View Details </a>
                            </div>
                            <div class="item">
                                <div class="offer-img">
                                    <?php echo CHtml::image($varBaseUrl . "/images/buraj.jpg", "Buraj", array('title' => 'Buraj')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <h3 class="city-trip">
                                    Dubai Holiday Trip Get Rs. 2500/ off on any hotel.
                                </h3>
                                <div class="offer-time">
                                    4N / 5D Starting @ Rs 7779
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Cras et mauris eu tellus venentis dapibus vel a turpis. Nulla facilisi.</p>
                                <a class="view-detail" href=""> View Details </a>
                            </div>
                            <div class="item">
                                <div class="offer-img">
                                    <?php echo CHtml::image($varBaseUrl . "/images/buraj.jpg", "Buraj", array('title' => 'Buraj')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <h3 class="city-trip">
                                    Dubai Holiday Trip Get Rs. 2500/ off on any hotel.
                                </h3>
                                <div class="offer-time">
                                    4N / 5D Starting @ Rs 7779
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Cras et mauris eu tellus venentis dapibus vel a turpis. Nulla facilisi.</p>
                                <a class="view-detail" href=""> View Details </a>
                            </div>
                            <div class="item">
                                <div class="offer-img">
                                    <?php echo CHtml::image($varBaseUrl . "/images/buraj.jpg", "Buraj", array('title' => 'Buraj')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <h3 class="city-trip">
                                    Dubai Holiday Trip Get Rs. 2500/ off on any hotel.
                                </h3>
                                <div class="offer-time">
                                    4N / 5D Starting @ Rs 7779
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Cras et mauris eu tellus venentis dapibus vel a turpis. Nulla facilisi.</p>
                                <a class="view-detail" href=""> View Details </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="body-right-box">
                    <div class="title"> Featured Hotels</div>
                    <div class="featured-hotels">
                        <ul>
                            <li>
                                <div class="fhotels-leftbox">
                                    <?php echo CHtml::image($varBaseUrl . "/images/oberoi-hotel1.jpg", "Oberoi", array('title' => 'Oberoi')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <div class="fhotels-rightbox">
                                    <h4 class="hotel-name">Oberoi Hotel</h4>
                                    <div class="offer-package">Exclusive International Packages</div>
                                    <p>Book now and get discount</p>
                                    <a class="view-detail" href=""> View Details </a>
                                </div>
                            </li>
                            <li>
                                <div class="fhotels-leftbox">
                                    <?php echo CHtml::image($varBaseUrl . "/images/oberoi-hotel1.jpg", "Oberoi", array('title' => 'Oberoi')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <div class="fhotels-rightbox">
                                    <h4 class="hotel-name">Oberoi Hotel</h4>
                                    <div class="offer-package">Exclusive International Packages</div>
                                    <p>Book now and get discount</p>
                                    <a class="view-detail" href=""> View Details </a>
                                </div>
                            </li>
                            <li>
                                <div class="fhotels-leftbox">
                                    <?php echo CHtml::image($varBaseUrl . "/images/oberoi-hotel1.jpg", "Oberoi", array('title' => 'Oberoi')); ?>
                                    <div class="best-offer">
                                        Best Offer
                                    </div>
                                    <div class="enjoy-holiday">
                                        Enjoy Your Holiday
                                    </div>
                                </div>
                                <div class="fhotels-rightbox">
                                    <h4 class="hotel-name">Oberoi Hotel</h4>
                                    <div class="offer-package">Exclusive International Packages</div>
                                    <p>Book now and get discount</p>
                                    <a class="view-detail" href=""> View Details </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>