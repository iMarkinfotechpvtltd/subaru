(function ($) {
jQuery(window).load(function () {
jQuery("#scroll-overflow").mCustomScrollbar({
theme: "minimal-dark"
});
});
})(jQuery);

$(document).ready(function () {
$("#engine-testi").owlCarousel({
autoPlay: 3000, //Set AutoPlay to 3 seconds
items: 2,
itemsDesktop: [1199, 2],
itemsDesktopSmall: [979, 1]
});

jQuery('#datepicker-example14').Zebra_DatePicker({
format: 'm/d/Y',
always_visible: jQuery('#container')
});
});

jQuery(document).ready(function() {
jQuery('#service').trigger('click');    
});    
jQuery(".link").click(function(){
jQuery("a.active").removeClass("active");
jQuery(this).addClass("active");
});
function get_record(id)
{
jQuery.ajax({
type: "POST", 
url:"/wp-content/themes/subaru/ajax/tesmonails.php",
data:{id:id,format:'raw'},
success:function(resp){
if( resp !="") 
{
jQuery('#engine-testi').empty().append(resp);
}
}
});
}

jQuery( function() {
jQuery( "#qdate" ).datepicker();
  } );

jQuery(function() {
jQuery('#qtime').timepicker();
});

function more_test(id)
{
jQuery.ajax({
type: "POST", 
url:ajaxurl,
data:{
action: 'moretest',
id:id},
success:function(resp){
if( resp !="") 
{
jQuery("#testimonial-cont"+id).html(resp);
}
}
});
}