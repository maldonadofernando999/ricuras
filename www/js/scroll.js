$(document).ready(function(){
	var altura = $('.nav').offset().top;
	$(window).on('scroll', function(){
		if ($(window).scrollTop() > altura){
			$('.nav').addClass('nav-scroll');
		}
		else{
			$('.nav').removeClass('nav-scroll');
		}
	});
	$('a[href*=#]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			&& location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 500);
				return false;
			}
		}
	});

	$(window).scroll(function(){
		var barra = $(window).scrollTop();
		var posicion = barra * 0.50;
		$('body').css({
			'background-position' : '0 -' + posicion + 'px'
		});
	});
});