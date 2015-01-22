var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
$(document).ready(function() {
    $(".mobile_menu a").click(function () {
        $(".menu").slideToggle();
        $(".mobile_menu a").toggleClass("active");
        return false;
    }); 
    $('.select-cat').sSelect();
    //$('#select-city').sSelect();
    $('.bxslider').bxSlider({auto:true});
            
    var owl = $(".owl-carousel");
    owl.owlCarousel({        
        itemsCustom : [
        [320, 1],
        [470, 2],
        [600, 2],
        [768, 3],
        [1000, 3],
        [1200, 3],
        [1400, 3],
        [1600, 3]
        ],
        navigation : true,
        pagination : false,
        navigationText : ["<img src='images/owl-prev.png'>","<img src='images/owl-next.png'>"]
    });
    $(".gotop").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('.gotop').fadeIn();
            } else {
                $('.gotop').fadeOut();
            }
        });
        $('.gotop').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
    $('.box-style .item').hover(function() {
        $(this).find('.hover-eff').stop(true,true).fadeIn('slow');
    }, function() {
        $(this).find('.hover-eff').fadeOut('slow');
    });
});

function timer(time,update,complete) {
    var start = new Date().getTime();
    var interval = setInterval(function() {
        var now = time-(new Date().getTime()-start);
        if( now <= 0) {
            clearInterval(interval);
            complete();
        }
        else update(Math.floor(now/1000));
    },1000); // the smaller this number, the more accurate the timer will be
}

$(document).ready(function(){
    $('.tab_container').hide();
    $('.tab_container:first').show();
    $('ul.tab li:first').addClass('active');
    $('ul.tab li a').click(function(){
        $('ul.tab li').removeClass('active');
        $(this).parent().addClass('active');
        var currentTab = $(this).attr('href');
        $('.tab_container').hide();
        $(currentTab).show();
        return false;
    });

    


    /*Main Search JS Start Here*/
    $('.category-search').hide();
    $('.category-search').attr('disabled',true);
    $('.location-search').attr('disabled',false);
    $('.outlet-search').attr('disabled',true);
    $('.loc-btn').click(function(){
        $('.location-search').show();
        $('.location-search').attr('disabled',false);
        $('.category-search').hide();
        $('.category-search').attr('disabled',true);
        /*Main Search Tabbing*/
        $('#mainSearchForm > a').removeClass('current');
        $(this).addClass('current');
    });
    $('.cat-btn').click(function(){
        $('.location-search').hide();
        $('.location-search').attr('disabled',true);
        $('.category-search').show();
        $('.category-search').attr('disabled',false);
        /*Main Search Tabbing*/
        $('#mainSearchForm > a').removeClass('current');
        $(this).addClass('current');
    });

    $('#mainSearchForm').submit(function(){
        if($('.location-search').css('display') != 'none' && $('.location-search').val() == 'Search By Location'){
            return false
        }
        if($('.category-search').css('display') != 'none' && $('.category-search').val() == 'Search By Category'){
            return false
        }
        return true;
    });
    /********************************/

    /*Search Result page JS Start Here*/
    $('.sortBy').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$(this).val(),'perPage':$('.perPage').val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$('#filterBySubCategory').val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();
        });
    });
    $('.perPage').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$('.sortBy').val(),'perPage':$(this).val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$('#filterBySubCategory').val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();
        });
    });
    $('#filterByCategory').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$('.sortBy').val(),'perPage':$('.perPage').val(),'filterByCategory':$(this).val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();

        });
        var catID = $(this).val();
        if(catID){
            $.post(SITE_ROOT_URL+'/search/getSubcategories',{'cateID':$(this).val()},function(data){
                data = '<select id="filterBySubCategory" class="select-cat" name="filterBySubCategory">'+data+'</select>';
               $('#filterBySubCategory').parent().html(data);
               $('#filterBySubCategory').sSelect();
               subCategoryEvent();
            });
        }else{
                data = '<select id="filterBySubCategory" class="select-cat" name="filterBySubCategory"><option value="">Select Sub-Category</option></select>';
                $('#filterBySubCategory').parent().html(data);
                $('#filterBySubCategory').sSelect();
                subCategoryEvent();
        }
    });
    subCategoryEvent();
    paginationEvent();
    $('#filterByDiscount').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$('.sortBy').val(),'perPage':$('.perPage').val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$('#filterBySubCategory').val(),'filterByDiscount':$(this).val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();
        });
    });
    callTimer();

    $('#showInMap').click(function(){
        viewInMap();
    });

    /*Script for load More deals in category-deal page*/
    $('#category-deals').on('click','#view_more',function(){
        var totalItem = $('.item_outer').length;
        loader();
        $.post(document.URL,{itemPlus:totalItem},function(data){
            if($(data).find('.item_outer').length){
                $('.view_more_outer').remove()
                $('#category-deals').append($(data).find('#category-deals').html());
            }
            if($('.item_outer').length==totalItem){
                $('.view_more_outer').hide();
            }
            callTimer();
            $(".loader-holder").hide();
        });
    });
    /*Deal Details page*/
    $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 80,
        itemMargin: 0,
        asNavFor: '#slider'
    });

    $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
            $('body').removeClass('loading');
        }
    });

    /*footer Mailchimp form*/
    $('#mc-embedded-subscribe-form').submit(function(){
        if($('#mce-EMAIL').val() == '' || $('#mce-EMAIL').val() == 'Enter your Email Address'){
            $('#mce-error-response').text('Please enter an Email Address.').css({"color":'#FF1919'});
            $('#mce-error-response').show();
            $('#mce-success-response').hide();
            $('#mce-error-response').fadeOut(5000);
            return false;
        }else if(!emailRegex.test($('#mce-EMAIL').val())){
            $('#mce-error-response').text('Please enter a valid Email Address.').css({"color":'#FF1919'});
            $('#mce-error-response').show();
            $('#mce-success-response').hide();
            $('#mce-error-response').fadeOut(5000);
            return false;
        }
    });

    /*Top City Dropdown*/
    $('#city').change(function(){
        if($(this).val()){
            window.location = SITE_ROOT_URL+'/category/city/'+$(this).val()
        }
    });

    /*Fancybox popup*/
    $('.fancybox').fancybox();

    /*Product Hover Effect*/
    $('.box-style .item').hover(function(){
        $(this).find('.hover-eff').show();
    });

    /***Shopping Cart JS***/
    //Remove
    $('#shopping-cart-form').on('click','.remove-from-cart',function(e){
        e.preventDefault();
        loader();
        $.post($(this).attr('href'),{},function(data){
            $('#shopping-cart-form').html($(data).find('#shopping-cart-form').html());
            $(".loader-holder").hide();
            $('.shopping-cart-error').fadeOut(5000);
        })
    });
    //Update
    $('#shopping-cart-form').on('click','#update-cart-button',function(e){
        e.preventDefault();
        loader();
        $.post($(this).attr('href'),$('#shopping-cart-form').serialize(),function(data){
            $('#shopping-cart-form').html($(data).find('#shopping-cart-form').html());
            $(".loader-holder").hide();
            $('.shopping-cart-error').fadeOut(5000);
        });
    });
    //Apply Coupon Code
    $('#shopping-cart-form').on('click','#applyCouponCode',function(e){
        e.preventDefault();
        if($('#couponCode').val() != '' && $('#couponCode').val()!= 'Enter Coupon Code'){
            loader();
            $.post(SITE_ROOT_URL+'/shoppingcart/applyCoupon',{couponCode:$('#couponCode').val()},function(data){
                $('#shopping-cart-form').html($(data).find('#shopping-cart-form').html());
                $(".loader-holder").hide();
                $('.shopping-cart-error').fadeOut(5000);
            });
        }else{
            $('#couponCode').css({'border-color':'red','color':'red'});
            $('#couponCode').keyup(function(){
                if($(this).val() != '' && $('#couponCode').val()!='Enter Coupon Code'){
                    $('#couponCode').css({'border-color':'#DFDFDF','color':'#6A737E'});
                }
            });
        }
    });


    //Toggle in the frontend customer dashboard

    $('#info').click(function() {
        var s = $("#infotext");
        $('.accountinfo_box').slideToggle('fast', function(){
            s.html(s.text() == '+' ? '-' : '+');
        });
        return false;
    });

    $('#order').click(function() {
        var s = $("#ordertext");
        $('.myorder_box').slideToggle('fast', function(){
            s.html(s.text() == '+' ? '-' : '+');
        });
        return false;
    });

    $('#reward').click(function() {
        var s = $("#rewardtext");
        $('.myreward_box').slideToggle('fast', function(){
            s.html(s.text() == '+' ? '-' : '+');
        });
        return false;
    });

    $('#wallet').click(function() {
        var s = $("#wallettext");
        $('.mywalletbox').slideToggle('fast', function(){
            s.html(s.text() == '+' ? '-' : '+');
        });
        return false;
    });


    //Allow Numeric
    $('#content').on('keydown','.numeric-10',function (event) {


        if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') === -1 && event.keyCode == 190)
            event.preventDefault(); 
        //if a decimal has been added, disable the "."-button

    });

});

function subCategoryEvent() {
    $('#filterBySubCategory').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$('.sortBy').val(),'perPage':$('.perPage').val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$(this).val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();
        });
    });
}
function paginationEvent(data){
    if($(data).find('.pager-outer').html() != undefined){
        if($(data).find('.pagination').html() != undefined){
            $('.pager-outer').html($(data).find('.pager-outer').html());
        }else{
            $('.pager-outer').html('');
        }
    }
    if($('.pagination').hasClass('review-pagination')){
        $('.pagination').on('click','a',function(e){
            e.preventDefault();
            loader();
            $.post($(this).attr('href'),{},function(data){
                $('.review_inner').html($(data).find('.review_inner').html());
                paginationEvent(data);
                callTimer();
                $(".loader-holder").hide();
            });
        });
    }else{
        $('.pagination').on('click','a',function(e){
            e.preventDefault();
            loader();
            $.post($(this).attr('href'),{'sortBy':$('.sortBy').val(),'perPage':$('.perPage').val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$('#filterBySubCategory').val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
                $('#deal-items').html($(data).find('#deal-items').html());
                paginationEvent(data);
                callTimer();
                $(".loader-holder").hide();
            });
        });
    }
}

function resultedDeals(data)
{
    if($(data).find('#deal-items').html().trim()){
        $('#deal-items').html($(data).find('#deal-items').html());
    }else{
        $('#deal-items').html('<p class="no-record">No records found.</p>');
    }
}
//**************************************//

function callTimer()
{
    $('.item .txt-box .clck-ico,.hours_icon').each(function(i){
        var obj = $(this);
        if(!isNaN($(this).text())){
            timer(
                $(this).text(), // milliseconds
                function(timeleft) { // called every step to update the visible countdown
                    hours = Math.floor(timeleft / 3600);
                    timeleft %= 3600;
                    minutes = Math.floor(timeleft / 60);
                    seconds = timeleft % 60;
                    obj.html(hours+" Hours  "+minutes+" Mins  "+seconds+" Secs");
                },
                function() { // what to do after
                    obj.html('Time Out');
                    $('.buy-now').remove();
                    $('.qty').remove();
                }
            );
        }
    });
}

function getInternetExplorerVersion()
{
var rv = -1; // Return value assumes failure.
if (navigator.appName == 'Microsoft Internet Explorer')
{
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
       rv = parseFloat( RegExp.$1 );
}
return rv;
}


function loader() {
    var browser=navigator.appName;
    if (browser != "Microsoft Internet Explorer") {
        $(".loader-holder").show();
    } else {
        $(document).ready(function() {
            var IEVersion = getInternetExplorerVersion();
            if(IEVersion>  7.0) {
                $(".loader-holder").show();
            }
        });
    }
}

function viewInMap()
    {
     var address = $('#dealAddress').text();
     $.post('http://maps.googleapis.com/maps/api/geocode/json?address='+address+'&sensor=false',{},function(data){
        $('#map_canvas').hide();
        $('#map_canvas').html('');
        var obj = data;
        if(obj.status == "OK"){
          $('#map_canvas').show();
          $('#map1').css({"padding-top":"0px"});
          var lat = obj.results[0].geometry.location.lat;
          var lng = obj.results[0].geometry.location.lng;
          initialize(address,lat,lng);
        }else{
            $('#map1').text('Address not found on the map.');
            $('#map1').attr('style',"padding-top:110px");
        }
      },"json");

    $('#map').show();

    $("#close").click(function(){
        $("#map").hide();
    });
}

/*For MAP*/
function initialize(loc,lat,lng)
{
    var var1 = [loc,lat,lng];
    var markers = [ var1 ];
    var latlng = new google.maps.LatLng(lat,lng);
    var myOptions = {
       zoom: 10,
       center: latlng,
       mapTypeId: google.maps.MapTypeId.ROADMAP,
       mapTypeControl: false
    };
    var map = new google.maps.Map(document.getElementById("map1"),myOptions);
    var infowindow = new google.maps.InfoWindow(), marker, i;
    for (i = 0; i < markers.length; i++) {
         marker = new google.maps.Marker({
            position: new google.maps.LatLng(markers[i][1],markers[i][2]),
            map: map,
            icon:SITE_ROOT_URL+'/img/red-icon.png'
        });
        google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
            return function() {
                infowindow.setContent('<div class="mapSec"><div class="toolTip" style="overflow:auto" >'+markers[i][0]+'</div></div>');
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}

/*For User Registration*/
function fireUserRegistrationEvent(form){
    $.post(
        $(form).attr('action'), 
        $(form).serialize() , 
        function(data){
            if(data == 'Success'){
                $('.fancybox-inner').html('<div id="inline1" class="user-reg-popup" style="display: block;">We have just sent you a verification mail. Please check your email and complete the registration.</div>');
                setTimeout(function(){window.location = SITE_ROOT_URL;},5000);
            }else{
                $('.validation_errors').html(data);
            }
        }
    );
}

/*For User Review Submitting*/
function fireUserReviewEvent(form){
    $.post(
        $(form).attr('action'), 
        $(form).serialize() , 
        function(data){
            if(data == 'Success'){
                form.reset();
                $(form).find('.success_msg').html('Your review has been submitted successfully.');
                $("html, body").animate({scrollTop: $("#deals-review-form .success_msg").offset().top + 10},500); 
                $('.success_msg').fadeOut(5000);
            }else if(data == 'LoginPlease'){
                $("#loginuser").trigger('click');
                $("#user-login-form").append('<input type="hidden" name="isReviewForm" value="yes"/>')

            }else if(data == 'AlreadyReviewed'){
                $(form).find('.validation_errors').html('You have already given review to this deal.');
                $("html, body").animate({scrollTop: $("#deals-review-form .validation_errors").offset().top + 10},500); 
                $('.validation_errors').fadeOut(5000);
            }else{
                $('.validation_errors').html(data);
                $("html, body").animate({scrollTop: $("#deals-review-form .validation_errors").offset().top + 10},500); 
                $('.validation_errors').fadeOut(5000);
            }
        }
    );
}

/*This function is used to ajax login*/
function fireUserLoginEvent(form){
     $('#deals-review-form .success_msg').focus();
    $.post($(form).attr('action'),$(form).serialize(),function(data){
        if(data == 'Success'){
            if(form.isReviewForm){
                $('#deals-review-form').submit();
                $.fancybox.close();
            }else{
                window.location = SITE_ROOT_URL+'/customer/dashboard'
            }
        }else{
            $(form).find('.validation_errors').html(data);
        }
    })
}

// Function for load State to Custom dropdown in Customer Update 

function getBstate(bstate){
    var country=bstate;
    $("#userBillingCity").resetSS();
    $.ajax({
        type: "POST",
        url: "../customer/dynamicstates",
        data: {
            country: country
        },
        success: function(result){
            $("#userBillingState").html(result);
            $("#userBillingState").resetSS();
            //$("#userBillingCity").resetSS();
        }
    });
}

// Function for load city to Custom dropdown in Customer Update 

function getBcity(bcity){
    var state=bcity;
    $.ajax({
        type: "POST",
        url: "../customer/dynamiccities",
        data: {
            state: state
        },
        success: function(result){
            $("#userBillingCity").html(result);
            $("#userBillingCity").resetSS();
        }
    });
}

//-------------Shipping address same as billing address------------------------------

// Function for getStates by calling getStates event in Controller

function getSstate(bstate,event){
    var country=bstate;
    event = event || "none";
    $.ajax({
        type: "POST",
        url: "../customer/dynamicstates",
        data: {
            country: country
        },
        success: function(result){
            $("#userShippingState").html(result);
            $("#userShippingState").resetSS();
        },
        complete:function(){
            if(event == 'complete'){
                var state     = $("#userBillingState option:selected").val();
                $('#userShippingState').val(state).change();
                //$("#userShippingState option[value='"+state+"']").attr('selected', 'selected');
                //$("#userShippingState").data('ssOpts',options);
            }
        }
    });
}

// Function for getCitys by calling getCites event in Controller

function getScity(bcity,event){
    var state=bcity;
    event = event || "none";
    $.ajax({
        type: "POST",
        url: "../customer/dynamiccities",
        data: {
            state: state
        },
        success: function(result){
            $("#userShippingCity").html(result);
            $("#userShippingCity").resetSS();
        },
        complete:function(){
            if(event == 'complete'){
                var city     = $("#userBillingCity option:selected").val();
                //$('#userShippingCity').val($('#userBillingCity').val()).change();
                $('#userShippingCity').val(city).change();
            }
        }
    });
}

// Funtion for copy same Address

function shipSameAsBill()
{
    if(copyAddress.checked){
        var value = $("input:checkbox[name='copyAddress']:checked").val();
        if(typeof(value)=='undefined')
        {
            $('#userShippingAddress1').val('');
            $('#userShippingAddress2').val('');
            $('#userShippingCountry').val('');
            $('#userShippingState').val('');
            $('#userShippingCity').val('');
            $('#userShippingZip').val('');
            $('#userShippingPhone').val('');       
        }
        else
        {
            $('#userShippingAddress1').val($('#userBillingAddress1').val());
            $('#userShippingAddress2').val($('#userBillingAddress2').val());
            $('#userShippingCountry').val($('#userBillingCountry').val()).change();
            getSstate($('#userBillingCountry').val(),'complete');
            getScity($('#userBillingState').val(),'complete');
            $('#userShippingPhone').val($('#userBillingPhone').val());
            $('#userShippingZip').val($('#userBillingZip').val());
        }
      }
}

