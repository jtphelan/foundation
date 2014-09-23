(function ($) {
  $( document ).ready(function() {
    $( "#mobile-button" ).click(function() {
      $( "#mobile-menu" ).slideToggle( "fast", function() {
        // Animation complete.
      });
    });
  });
}(jQuery));