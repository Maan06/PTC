$(document).ready(function() {
    $('.flex-next').html('<i class="fa fa-chevron-right" aria-hidden="true"></i>');
    $('.flex-prev').html('<i class="fa fa-chevron-left" aria-hidden="true"></i>')
  });
  $('.slide-image').each(function() {
    var bg = $(this).data('bg');
    var pos = $(this).data('flex-start');
    $(this).css({
      "background-image" : "url("+bg+")",
      "transform-origin": pos,
    })
  });
  $('.flex-slider').flexslider({
    slideshow: true,
    slideshowSpeed: 8000,
    animationSpeed: 1000,
    controlNav: false,
    // autoplay
    pauseOnAction: true,
    after: function(slider) {
      if (!slider.playing) {
        slider.play();
      }
    }
    //autoplay
  });
  

   // Get the current page URL
 var currentPage = window.location.pathname;

 // Select all navigation links
 var navLinks = document.querySelectorAll('.navlink');
 
 // Loop through each navigation link
 navLinks.forEach(function(link) {
     // Check if the link's href matches the current page URL
     if (link.getAttribute('href') === currentPage) {
         // Add the 'active' class to the matching link
         link.classList.add('nav-active');
     }
 
     // Special case for Gallery link
     if (currentPage.includes("corporate-event.html") || currentPage.includes("fun-event.html")) {
         // Add the 'active' class to the Gallery link
         document.querySelector('.dropdown-toggle').classList.add('nav-active');
     }
 });
 