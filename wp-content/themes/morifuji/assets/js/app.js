( function( $ ) {
	$(window).ready(function() {
		$('a[href*=#top]').click(function(e) {
			e.preventDefault();
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 800);
					return false;
				}
			}
		});
	});
	$(document).ready(function() {
 
      $("#owl-demo").owlCarousel({
     
          autoPlay: 3000, //Set AutoPlay to 3 seconds
     
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
     
      });
     
    });
} )( jQuery );