$(document).ready(function(){
	$(window).on('scroll', function(){
		if ($(window).scrollTop() >= 0 && $(window).scrollTop() < 540){
			$('.border-edit1').addClass('border-nav');
			$('.border-edit2').removeClass('border-nav');
			$('.border-edit3').removeClass('border-nav');
			$('.border-edit4').removeClass('border-nav');
			$('.border-edit5').removeClass('border-nav');
			$('.border-edit6').removeClass('border-nav');
		}
		if ($(window).scrollTop() >= 540 && $(window).scrollTop() < 1070){
			$('.border-edit1').removeClass('border-nav');
			$('.border-edit2').addClass('border-nav');
			$('.border-edit3').removeClass('border-nav');
			$('.border-edit4').removeClass('border-nav');
			$('.border-edit5').removeClass('border-nav');
			$('.border-edit6').removeClass('border-nav');
		}
		if ($(window).scrollTop() >= 1070 && $(window).scrollTop() < 1400){
			$('.border-edit1').removeClass('border-nav');
			$('.border-edit2').removeClass('border-nav');
			$('.border-edit3').addClass('border-nav');
			$('.border-edit4').removeClass('border-nav');
			$('.border-edit5').removeClass('border-nav');
			$('.border-edit6').removeClass('border-nav');
		}
		if ($(window).scrollTop() >= 1400 && $(window).scrollTop() < 2200){
			$('.border-edit1').removeClass('border-nav');
			$('.border-edit2').removeClass('border-nav');
			$('.border-edit3').removeClass('border-nav');
			$('.border-edit4').addClass('border-nav');
			$('.border-edit5').removeClass('border-nav');
			$('.border-edit6').removeClass('border-nav');
		}
		if ($(window).scrollTop() >= 2200 && $(window).scrollTop() < 2650){
			$('.border-edit1').removeClass('border-nav');
			$('.border-edit2').removeClass('border-nav');
			$('.border-edit3').removeClass('border-nav');
			$('.border-edit4').removeClass('border-nav');
			$('.border-edit5').addClass('border-nav');
			$('.border-edit6').removeClass('border-nav');
		}
		if ($(window).scrollTop() >= 2650 && $(window).scrollTop() < 9250){
			$('.border-edit1').removeClass('border-nav');
			$('.border-edit2').removeClass('border-nav');
			$('.border-edit3').removeClass('border-nav');
			$('.border-edit4').removeClass('border-nav');
			$('.border-edit5').removeClass('border-nav');
			$('.border-edit6').addClass('border-nav');
		}
	});
});