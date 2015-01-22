$(document).ready(function() {
    $(".mobile_menu a").click(function () {
        $(".menu").slideToggle();
        $(".mobile_menu a").toggleClass("active");
        return false;
    }); 
    $('.select-cat').sSelect();
    //$('#select-city').sSelect();
    $('.bxslider').bxSlider();
            
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
        navigationText : ["<img src='common/images/owl-prev.png'>","<img src='common/images/owl-next.png'>"]
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
});