$(document).ready(function(){
 $("#top-slider").owlCarousel({
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
	  autoPlay:false,
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
		autoPlay:false,
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
		
	$(function() {
    $( "#datepicker" ).datepicker();
	});
		$( ".selector" ).datepicker({
	  dateFormat: "dd-mm-yy"
	});
	
	/*  Stylish select drop down  */

	 $('.my-dropdown').sSelect();


});