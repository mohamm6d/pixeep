/**
 * Acoustics Theme Scripts
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     Acoustics
 * @version     1.0.0
 *
 */



jQuery(window).scroll(function(){
  var sticky = jQuery('.site-header'),
      scroll = jQuery(window).scrollTop();

  if (scroll >= 80) sticky.addClass('header-fixed');
  else sticky.removeClass('header-fixed');
});


(function($) {
  var navMenu = {
	    init: function(){
			var $selector = $( '.menu-item-has-children, .page_item_has_children' );
  $selector.append('<span class="item-toggle"><i class="fa fa-angle-down"></i></span>');

			$('.item-toggle').on('click', function(){
				$(this).siblings('.sub-menu, .children').toggleClass('active');
});
		}
    };

var productSlider = {
  init: function(){
			$('.products-grid').each(function( index ) {
				var data = $(this).parents('.section-products').attr('type');
  $(this).owlCarousel({
					loop: true,
				    margin:0,
					lazyLoad: true,
				    responsiveClass:true,
					dots: false,
					navContainer: '.owl-nav-'+data,
					navText: [$('.owl-next-'+data),$('.owl-prev-'+data)],
				    responsive:{
				        0:{
				            items:1,
				            nav:true,
							autoplay:true,
						    autoplayTimeout:2000,
						    autoplayHoverPause:true
},
600: {
  items: 3,
				            nav:true,
							autoplay:true,
						    autoplayTimeout:2000,
						    autoplayHoverPause:true
},
1000: {
  items: 6,
				            nav:true,
				            loop:false
}
				    }
				});
			});
	    }
	};

navMenu.init();
    productSlider.init();







})(window.jQuery );



function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

jQuery(document).ready(function(){
if (!getCookie('cookie-bar') || getCookie('cookie-bar') == ""){
jQuery('.cookie-bar').css('display','block').show();
}
jQuery('#cookie-understand').click(function(){
  setCookie('cookie-bar',1,20);
  jQuery('.cookie-bar').fadeOut();
});

	
	/*Social proof*/
	function getRandomArbitrary(min, max) {
  return parseInt(Math.random() * (max - min) + min);
}
jQuery('.product-description').append(`<div class="slider-text-container"><p class="item-1">${getRandomArbitrary(3,6)} people are visiting this item.</p><p class="item-2">${getRandomArbitrary(1,3)} people have this in their cart</p><p class="item-3">buy it with a 20% discount code</p></div>`);
	
	
	
		jQuery('.branding-container').hide();
	
});