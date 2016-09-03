jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 200) {
			jQuery("#logo").addClass("logo");
      jQuery("#logo").removeClass("animated-logo");   
        } else {
            jQuery("#logo").removeClass("logo");
			jQuery("#logo").addClass("animated-logo");
        }
    });

/*flexslider*/
$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function(){
  $('.flexsliderTop').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});

/*Google Maps*/
var myCenter = new google.maps.LatLng(33.2038857,-96.2260363);

function initialize() {
var mapProp = {
center:myCenter,
zoom:15,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);


// /*Smooth Scrolling*/
// $(document).ready(function(){
//   // Add smooth scrolling to all links in navbar + footer link
//   $(".navbar a, footer a[href='#body']").not('.ext_link').on('click', function(event) {

//     // Prevent default anchor click behavior
//     event.preventDefault();

//     // Store hash
//     var hash = this.hash;

//     // Using jQuery's animate() method to add smooth page scroll
//     // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
//     $('html, body').animate({
//       scrollTop: $(hash).offset().top
//     }, 900, function(){
   
//       // Add hash (#) to URL when done scrolling (default click behavior)
//       window.location.hash = hash;
//     });
//   });
  
//   $(window).scroll(function() {
//     $(".slideanim").each(function(){
//       var pos = $(this).offset().top;

//       var winTop = $(window).scrollTop();
//         if (pos < winTop + 600) {
//           $(this).addClass("slide");
//         }
//     });
//   });
// })


/*Lightbox*/
lightbox.option({
      'wrapAround': true,
      'alwaysShowNavOnTouchDevices': true
    })