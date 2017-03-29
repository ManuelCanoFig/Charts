$(document).ready(main);
 
var contador = 1;

function main(){
	$('.icon-2menu').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});

			$('.menu_bar2').animate({
				left: '-1000'
			});
			//$('span').animate({
				//class: 'icon-cross'
			//});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
 
};