jQuery(document).ready(function(){

  alert("Funciona JQuery");

  $('#primera').bind('mousewheel DOMMouseScroll', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      e.preventDefault();
      $(window).scrollTo('#segunda', 500);
    }
  });
  $('#segunda').bind('mousewheel DOMMouseScroll', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      e.preventDefault();
      $(window).scrollTo('#tercera', 500);
    }
  });
  $('#tercera').bind('mousewheel DOMMouseScroll', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      e.preventDefault();
      $(window).scrollTo('#cuarta', 500);
    }
  });
  $('#cuarta').bind('mousewheel DOMMouseScroll', function(e) {
    if (e.originalEvent.wheelDelta < 0) {
      e.preventDefault();
      $(window).scrollTo('#quinta', 500);
    }
  });


});
