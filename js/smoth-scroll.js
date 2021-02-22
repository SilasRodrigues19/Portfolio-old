/* Smoth scroll */
 jQuery(document).ready(function($) {
   $("#back").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 3500);
   });
  });