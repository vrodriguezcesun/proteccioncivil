//esta es una funcion para el tooger que cierra y abre el sidebar
$(function() {

  'use strict';

  $('.js-menu-toggle').click(function(e) {

  	var $this = $(this);

  	

  	if ( $('body').hasClass('show-sidebar') ) {
  		$('body').removeClass('show-sidebar');
  		$this.removeClass('active');
  	} else {
  		$('body').addClass('show-sidebar');	
  		$this.addClass('active');
  	}

  	e.preventDefault();

  });
// Evitar que el sidebar se cierre o actualice al hacer clic en un span dentro de un li
$('aside .nav-menu ul li a span').click(function(e) {
    e.stopPropagation(); // Detener la propagación del evento
  });

    

});