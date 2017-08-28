jQuery(document).ready(function(){

  alert("Funciona JQuery");

  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var y = document.getElementsByClassName("img-centered");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
         y[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      y[myIndex-1].style.display = "block";
      setTimeout(carousel, 9000);
    }

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
  $('#boton-quinta').click( function() {
      $(window).scrollTo('#footer', 500);
    }
  );


});
