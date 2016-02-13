
$(document).ready(function(){
//alert("entra el script");
var altura = $('.navbar-default').offset().top;

$(window).on('scroll', function(){
			if ( $(window).scrollTop() > altura ){
					$('.navbar-default').addClass('menu-fixed');
			} else {
				$('.navbar-default').removeClass('menu-fixed');
			}
	});
});