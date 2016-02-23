/*---------------------------------------------------------------------*/
;(function($){
/*================= Global Variable Start =================*/		   
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var IEbellow9 = !$.support.leadingWhitespace;
var iPhoneAndiPad = /iPhone|iPod/i.test(navigator.userAgent);
function isIE () {
  var myNav = navigator.userAgent.toLowerCase();
  return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
}
//if (isIE () == 8) {}
/*================= Global Variable End =================*/	
function showme() {
     alert(1)
}
/*================= On Document Load Start =================*/	
$(document).ready( function(){
	if( $(".site-header").length) {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 1){  
				$('.site-header').addClass("sticky");
			} else {
				$('.site-header').removeClass("sticky");
			}
		}); 
	}
	/*Navigation */
	if( $("#menu-main").length) {
		$(".toggleMenu").click(function(e) {
			e.preventDefault();
			$(this).toggleClass("active");
			$("#menu-main").slideToggle();
			$("#menu-main li").removeClass("resHover")
			$(".resIcon").removeClass("active")
			return false;
		});
		$("#menu-main li a").each(function() {
			if ($(this).next().length) {
				$(this).parent().addClass("parent");
			};
		})
		$("#menu-main li.parent").each(function () {
			if ($(this).has(".menuIcon").length <= 0) $(this).append('<i class="menuIcon">&nbsp;</i>')
		});
		dropdown('menu-main', 'hover', 1);
		adjustMenu();
	}
	
	if( $(".searchIcon").length){
	   $('.searchIcon').click(function(){
		  if ($(this).hasClass('active')) {
			   $(this).removeClass('active');
			   $(this).find('.genericon').removeClass('genericon-close');
			   $(this).find('.genericon').addClass('genericon-search');
			   $(this).next().animate({width: '0'}); 
		  } else {
			   $(this).addClass('active');
			   $(this).find('.genericon').removeClass('genericon-search');
			   $(this).find('.genericon').addClass('genericon-close');
			    $(this).next().animate({width: '180px'});
		  }
		  return false;
	   });
	};
	
	
	
	// Index Banner Slider
	if( $(".lookBookSlider").length) {
		var owl = $(".sliderBanner");
		owl.owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			smartSpeed:1200,
			nav:false,
			items : 1,
			//dots : false		
		});
	}
	if( $(".carouselBlock").length) {
		$('.carouselBlock').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout:3000,
			smartSpeed:1200,
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	}

	// Responsive Tabing Script
	if( $(".resTab").length) {
		$('.resTab').responsiveTabs({
			rotate: false,
			scrollToAccordion: true,
			startCollapsed: 'tab', //accordion
			collapsible: 'tab', //accordion
		});
	}
	if( $(".accordion").length){
	   $('.accordion .accordDetail').hide();
	   $(".accordion .accordDetail:first").show(); 
	   $(".accordion .accTrigger:first").addClass("active");	
	   $('.accordion .accTrigger').click(function(){
		  if ($(this).hasClass('active')) {
			   $(this).removeClass('active');
			   $(this).next().slideUp();
		  } else {
			   $('.accordion .accTrigger').removeClass('active');
			   $(this).addClass('active');
			   $('.accordion .accordDetail').slideUp();
			   $(this).next().slideDown();
		  }
		  return false;
	   });
	};
	
	// Responsive Table
	if( $(".responsiveTable").length){
		$(".responsiveTable").each(function(){
		$(this).wrap('<div class="tableOut"></div>');
		$(this).find('td').removeAttr('width');
		//$(this).find('td').removeAttr('align');
		var head_col_count =  $(this).find('tr th').size();
		// loop which replaces td
		for ( i=0; i <= head_col_count; i++ )  {
			// head column label extraction
			var head_col_label = $(this).find('tr th:nth-child('+ i +')').text();
			// replaces td with <div class="column" data-label="label">
			$(this).find('tr td:nth-child('+ i +')').attr("data-label", head_col_label);
		}
		});
	}
	
	// Responsive Table
	if( $(".tableScroll").length){
		$(".tableScroll").each(function(){
			$(this).wrap('<div class="tableOut"></div>');
		});
	}
	
	// Back to Top function
	if( $("#backtotop").length){
		$(window).scroll(function(){
			if ($(window).scrollTop()>120){
			$('#backtotop').fadeIn('250').css('display','block');}
			else {
			$('#backtotop').fadeOut('250');}
		});
		$('#backtotop').click(function(){
			$('html, body').animate({scrollTop:0}, '200');
			return false;
		});
	};
	
	// Get Focus Inputbox
	if( $(".getFocus").length){
			$(".getFocus").each(function(){
			$(this).on("focus", function(){
			if ($(this).val() == $(this)[0].defaultValue) { $(this).val("");};
		  }).on("blur", function(){
			  if ($(this).val() == "") {$(this).val($(this)[0].defaultValue);};
		  });								  
		});
	};
	
	// For device checking
	if (isMobile == false) {
	
	}
	if( $("#gmap").length){	
		var map = new google.maps.Map(document.getElementById('gmap'), {
		zoom: 15,
		center: new google.maps.LatLng(23.021666 , 72.55464),
		mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var infoWindow = new google.maps.InfoWindow;
		var onMarkerClick = function() {
		  var marker = this;
		  var latLng = marker.getPosition();
		  infoWindow.setContent('<strong>Jayanti Solanki</strong><br>Friends Colony,<br>Ambavadi,<br>Ahmedabad, Gujarat 380006');
		  infoWindow.open(map, marker);
		};
		google.maps.event.addListener(map, 'click', function() {
		  infoWindow.close();
		});
		var marker = new google.maps.Marker({
		  map: map,
		  position: new google.maps.LatLng(23.021666 , 72.55464)
		});
		google.maps.event.addListener(marker, 'click', onMarkerClick);
	}
	if( $(".litebox").length){	
		$('.litebox').liteBox();
	}
	
	/*================= On Document Load and Resize Start =================*/
	$(window).on('resize', function () {
			
    }).trigger('resize');
	/*================= On Document Load and Resize End =================*/
	
});
/*================= On Document Load End =================*/

/*================= On Window Resize Start =================*/	
$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

/*================= On Window Resize End =================*/	

/*================= On Window Load Start =================*/
$(window).load(function() {
						
});
/*================= On Document Load End =================*/

})(jQuery);

