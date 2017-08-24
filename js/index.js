jQuery(document).ready(function(){

  alert("Funciona JQuery");

  $('#boton-primera').click( function() {
      $(window).scrollTo('#segunda', 500);
    }
  );
  $('#boton-segunda').click( function() {
      $(window).scrollTo('#tercera', 500);
    }
  );
  $('#boton-tercera').click( function() {
      $(window).scrollTo('#cuarta', 500);
    }
  );
  $('#boton-cuarta').click( function() {
      $(window).scrollTo('#quinta', 500);
    }
  );


});
