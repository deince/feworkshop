$(document).ready(function(){

 // Show more photos
 $('#show-more').click(function(event) {

   // Stop click event
   event.preventDefault();

   // Hide link
   $('#show-more').hide();

   // Show more photos
   // $('#more-photos').show();
   $('#more-photos').slideDown(1000);

 });

});