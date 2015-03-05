//var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//$(document).ready(function() {
    /*$(".mobile_menu a").click(function () {
        $(".menu").slideToggle();
        $(".mobile_menu a").toggleClass("active");
        return false;
    });*/ 
    //$('.select-cat').sSelect();
    //$('#select-city').sSelect();
   // $('.bxslider').bxSlider({auto:true});
            
    /*var owl = $(".owl-carousel");
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
    });*/
    //$(".gotop").hide();
    /*$(function () {
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
    });*/
    /*$('.box-style .item').hover(function() {
        $(this).find('.hover-eff').stop(true,true).fadeIn('slow');
    }, function() {
        $(this).find('.hover-eff').fadeOut('slow');
    });*/
//});

/*function timer(time,update,complete) {
    var start = new Date().getTime();
    var interval = setInterval(function() {
        var now = time-(new Date().getTime()-start);
        if( now <= 0) {
            clearInterval(interval);
            complete();
        }
        else update(Math.floor(now/1000));
    },1000); // the smaller this number, the more accurate the timer will be
}*/

/*$(document).ready(function(){
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
    });*/

    


    /*Main Search JS Start Here*/
    /*$('.category-search').hide();
    $('.category-search').attr('disabled',true);
    $('.location-search').attr('disabled',false);
    $('.outlet-search').attr('disabled',true);
    $('.loc-btn').click(function(){
        $('.location-search').show();
        $('.location-search').attr('disabled',false);
        $('.category-search').hide();
        $('.category-search').attr('disabled',true);*/
        /*Main Search Tabbing*/
  /*      $('#mainSearchForm > a').removeClass('current');
        $(this).addClass('current');
    });
    $('.cat-btn').click(function(){
        $('.location-search').hide();
        $('.location-search').attr('disabled',true);
        $('.category-search').show();
        $('.category-search').attr('disabled',false);*/
        /*Main Search Tabbing*/
       /* $('#mainSearchForm > a').removeClass('current');
        $(this).addClass('current');
    });*/

    /*$('#mainSearchForm').submit(function(){
        if($('.location-search').css('display') != 'none' && $('.location-search').val() == 'Search By Location'){
            return false
        }
        if($('.category-search').css('display') != 'none' && $('.category-search').val() == 'Search By Category'){
            return false
        }
        return true;
    });*/
    /********************************/

    /*Search Result page JS Start Here*/
  /*  $('.sortBy').change(function(){
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
    });*/
    //subCategoryEvent();
    //paginationEvent();
  


    /*Deal Details page*/
    // $('#carousel').flexslider({
    //     animation: "slide",
    //     controlNav: false,
    //     animationLoop: false,
    //     slideshow: false,
    //     itemWidth: 80,
    //     itemMargin: 0,
    //     asNavFor: '#slider'
    // });

    // $('#slider').flexslider({
    //     animation: "slide",
    //     controlNav: false,
    //     animationLoop: false,
    //     slideshow: false,
    //     sync: "#carousel",
    //     start: function(slider){
    //         $('body').removeClass('loading');
    //     }
    // });




    /*Product Hover Effect*/
    /*$('.box-style .item').hover(function(){
        $(this).find('.hover-eff').show();
    });*/

 
    //Allow Numeric
  /*  $('#content').on('keydown','.numeric-10',function (event) {


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

});*/

/*function subCategoryEvent() {
    $('#filterBySubCategory').change(function(){
        loader();
        $.post(document.URL,{'sortBy':$('.sortBy').val(),'perPage':$('.perPage').val(),'filterByCategory':$('#filterByCategory').val(),'filterBySubCategory':$(this).val(),'filterByDiscount':$('#filterByDiscount').val()},function(data){
            resultedDeals(data);
            paginationEvent(data);
            callTimer();
            $(".loader-holder").hide();
        });
    });
}*/
/*function paginationEvent(data){
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
}*/

//**************************************//

/*function callTimer()
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
}*/

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


/*For MAP*/
/*function initialize(loc,lat,lng)
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
*/

/*This function is used to ajax login*/
function fireMemberLoginEvent(form){
     //$('#deals-review-form .success_msg').focus();
    $.post($(form).attr('action'),$(form).serialize(),function(data){
        if(data == 'Success'){
            /*if(form.isReviewForm){
                $('#deals-review-form').submit();
                $.fancybox.close();
            }else{*/
                window.location = SITE_ROOT_URL+'/member/dashboard'
            //}
        }else{
            $(form).find('.validation_errors').html(data);
        }
    })
}

// Function for load State to Custom dropdown in Customer Update 

function getBstate(bstate){
    var country=bstate;
    $("#customerCity").trigger("chosen:updated");
    $.ajax({
        type: "POST",
        url: "../member/dynamicstates",
        data: {
            country: country
        },
        success: function(result){
            $("#customerState").html(result);
            $("#customerState").trigger("chosen:updated");
            //$("#customerCity").trigger("chosen:updated");
            //$("#customerState").resetSS();
            //$("#customerCity").resetSS();
        }
    });
}

// Function for load city to Custom dropdown in Customer Update 

function getBcity(bcity){
    var state=bcity;
    $.ajax({
        type: "POST",
        url: "../member/dynamiccities",
        data: {
            state: state
        },
        success: function(result){
            $("#customerCity").html(result);
            $("#customerCity").trigger("chosen:updated");
            //$("#customerCity").resetSS();
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
                var state     = $("#customerState option:selected").val();
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
                var city     = $("#customerCity option:selected").val();
                //$('#userShippingCity').val($('#customerCity').val()).change();
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
            $('#userShippingAddress1').val($('#customerAddress').val());
            $('#userShippingCountry').val($('#customerCountry').val()).change();
            getSstate($('#customerCountry').val(),'complete');
            getScity($('#customerState').val(),'complete');
            $('#userShippingPhone').val($('#userBillingPhone').val());
            $('#userShippingZip').val($('#customerZip').val());
        }
      }
}

/* Front end Js Contents */

$(document).ready(function(){
 $("#top-slider").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay:3000,
      loop:true
      });
      
      /* Top Slider End Here*/
      
      var owl = $("#special-deals-slider"),
          status = $("#owlStatus");       

      owl.owlCarousel({
        items: 3,
        itemsDesktop: [1400, 3],
        itemsDesktopSmall: [1100, 3],
        itemsTablet: [700, 2],
        itemsMobile: [500, 1],
        navigation : true,
        autoPlay:3000,
        stopOnHover:true,
        afterAction : afterAction
      });

      function updateResult(pos,value){
        status.find(pos).find(".result").text(value);
      }

      function afterAction(){
        updateResult(".owlItems", this.owl.owlItems.length);
        updateResult(".currentItem", this.owl.currentItem);
        updateResult(".prevItem", this.prevItem);
        updateResult(".visibleItems", this.owl.visibleItems);
        updateResult(".dragDirection", this.owl.dragDirection);
      }
        /* Body Container Slider End Here*/
        
      /* Choosen start here*/   
      var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
      
      /*  Fancybox Member sign up goes here */
     $('.fancybox').fancybox(); 
     
     
     
     /* Stylish Checkbox and Radio Buttons */   
            $('input.radio').checkradios();
            
              
    /*  Partners Register Tabing Start Here  */
    
    $(".register-form-outer .register-form-inner").hide();
    $(".register-form-outer .register-form-inner").eq(0).show();
    $(".partner-name").eq(0).addClass("active");
    $(".partner-name").click(function(){
    var a = $(this).index();
    $(".partner-name").removeClass("active");
    $(this).addClass("active");
    $(".register-form-outer").find(".register-form-inner").hide();
    $(".register-form-outer .register-form-inner").eq(a).show();    
    });
    /*  Datepicker Start Here  */
        
    /*$(function() {
    $( "#datepicker" ).datepicker();
    });
        $( ".selector" ).datepicker({
      dateFormat: "dd-mm-yy"
    });*/
    
    /*  Stylish select drop down  */

     $('.my-dropdown').sSelect();


});


