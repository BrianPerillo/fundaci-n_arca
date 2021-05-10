
//Scroll Magic

$(document).ready(function(){

    //Inicio ScrollMagic:
    var controller = new ScrollMagic.Controller();

    //Construyo la escena: 
    
    var scene = new ScrollMagic.Scene({
        triggerElement: '#about_us' //El elemento que al pasar scrolleando por el, activará el efecto del que le pasamos a setClassToggle.
    })
    .setClassToggle('#nosotros .content', 'fade_in') //Agrego una clase, en este caso fade_in a vision, la cual creé en el main.css
    .addTo(controller) //Agrego la escena a controller

    var scene = new ScrollMagic.Scene({
        triggerElement: '#nosotros .content' 
    })
    .setClassToggle('#mision .content', 'fade_in') 
    .addTo(controller)

    var scene = new ScrollMagic.Scene({
        triggerElement: '#mision .content' 
    })
    .setClassToggle('#vision .content', 'fade_in') 
    .addTo(controller)
    
    var scene = new ScrollMagic.Scene({
      triggerElement: '#vision .content' 
    })
    .setClassToggle('#valores .content', 'fade_in') 
    .addTo(controller)

    var scene = new ScrollMagic.Scene({
      triggerElement: '#valores .content' 
    })
    .setClassToggle('#contacto .container', 'fade_in') 
    .addTo(controller)

});

// Scroll Smooth Effect

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1600, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});