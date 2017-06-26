jQuery(document).ready(function(){
  var ph = jQuery('#et-info-phone').text();
  jQuery('#et-info-phone').html('<a href="tel:' + ph + '">' + ph + '</a>');
  var email = jQuery('#et-info-email').text().length;
  if(email == 0) {
  	jQuery('#et-info-email').css('display', 'none');
  }
});