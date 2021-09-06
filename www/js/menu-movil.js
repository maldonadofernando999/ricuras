$(document).ready(main);

var verificador=1;

function main(){
	$('.menu_bar').click(function(){
		if (verificador==1) {
			$('.nav-2').animate({
				left: '0'
			});
			verificador=0;
		}
		else{
			$('.nav-2').animate({
				left: '-100%'
			});
			verificador=1;
		}
	});
	$('.correr').click(function(){
		if (verificador==0) {
			$('.nav-2').animate({
				left: '-100%'
			});
			verificador=1;
		}
	});
}