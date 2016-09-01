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
//items: 2,
//itemsDesktop: [1199, 2],
//itemsDesktopSmall: [979, 1],
//    itemsTablet:	[768,1],
//itemsMobile: [600, 1]
items : 2,
itemsDesktop : [1199,2],
itemsDesktopSmall : [980,2],
itemsTablet: [768,2],
itemsMobile : [479,1],
});

jQuery('#datepicker-example14').Zebra_DatePicker({
format: 'd/m/Y',
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

function more_test(id,parent)
{
var par="#"+parent;
jQuery.ajax({
type: "POST", 
url:ajaxurl,
data:{
action: 'moretest',
id:id},
success:function(resp){
if( resp !="") 
{
var mainid=par+" "+"#testimonial-cont"+id;
jQuery(mainid).html(resp);
}
}
});
}

jQuery(document).ready(function () {
jQuery(window).bind('scroll', function () {
if (jQuery(window).scrollTop() > 10) {
jQuery('header').addClass("fixed animated fadeInDown");
} else {
jQuery('header').removeClass("fixed animated fadeInDown");
}
});
});

jQuery(document).ready(function()
{
// Stop user to press enter in textbox
jQuery("#search-ajax").keypress(function(event) {
if (event.keyCode == 13) {
event.preventDefault();
return false;
}
});
    
});

//$(document).ready(function () {
//    $('a[href*="#"]:not([href="#"])').click(function () {
//        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//            var target = $(this.hash);
//            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//            if (target.length) {
//
//                $('html, body').animate({
//                    scrollTop: target.offset().top
//                }, 1000);
//                return false;
//            }
//        }
//    });
//    
//});


$('input[name=headsol]').change(function(){
$("#head-second-step").show();
});