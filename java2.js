$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
                                
			});
			var elemento = document.getElementById('menu1'); 
            elemento.style.display = "none";
            var elemento = document.getElementById('menu2'); 
            elemento.style.display = "block";
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
                                
			});
			var elemento = document.getElementById('menu2'); 
            elemento.style.display = "none";
            var elemento = document.getElementById('menu1'); 
            elemento.style.display = "block";
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}

function mostrarImagen(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('#img_destino').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
 }
}

$("#file_url").change(function(){
 mostrarImagen(this);
});

