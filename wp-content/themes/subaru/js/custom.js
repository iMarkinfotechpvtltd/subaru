// JavaScript Document


jQuery(function(){
  var shrinkHeader = 30;
 
  jQuery(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           jQuery('.navigation').addClass('shrink');
        }
        else {
            jQuery('.navigation').removeClass('shrink');
        }
  });
  jQuery(document).ready(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           jQuery('.navigation').addClass('shrink');
        }
        else {
            jQuery('.navigation').removeClass('shrink');
        }
	
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }

});


jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:25,
	autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
          
        },
        767:{
            items:3,
			
          
        },
        1000:{
            items:5,
            nav:true,
        }
    }
});
jQuery('.featured-carousel').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
          
        },
        767:{
            items:3,
			
          
        },
        1000:{
            items:4,
             nav:true,
        }
    }
});
jQuery('.parts-page-logo').owlCarousel({
    loop:true,
	autoplay:true,
    margin:25,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
          
        },
        767:{
            items:4,
			
          
        },
        1000:{
            items:6,
             nav:true,
        }
    }
});

jQuery('.price-grid').owlCarousel({
items : 3,
itemsDesktop : [1199,3],
itemsDesktopSmall : [980,2],
itemsTablet: [768,2],
itemsMobile : [479,1],
navigation : true,
pagination:false,
});

jQuery('.timing-belt-carosuel').owlCarousel({
items : 4,
itemsDesktop : [1199,4],
itemsDesktopSmall : [980,2],
itemsTablet: [768,2],
itemsMobile : [479,1],
navigation : true,
pagination:false,
});

/*************OWL CAROUSEL********************/

   if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            $('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();

                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }
		
/////////////   SlideBAr

jQuery(function(){
  jQuery('.btn.btn-default.btn-menu').click(function(){
     jQuery('.slidmenu').toggleClass('right-slide');	  
	  
	});	
	jQuery('.log-tabing li a').click(function (e) {     
   
    var href = $(this).attr('href');    

    jQuery('.log-tabing li').removeClass('active');

    jQuery('.log-tabing li a[href="'+href+'"]').closest('li').addClass('active');

         jQuery('.clutch-repair').removeClass('active');
         jQuery('.clutch-repair'+href).addClass('active');
      
	   });
	   
   

});		
//jQuery(document).ready(function(){		jQuery("a.custom-toggle").click(function(){			jQuery(this).toggleClass('collapsed').parent().parent().next().slideToggle('slow');		})	})

		
	
//////////////////////////////

////////validation for appointment form //////

function appointval(){
var fname= jQuery("#fname").val();
var lname= jQuery("#lname").val();
var email= jQuery("#email").val();
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
var phone= jQuery("#phone").val();
var vin= jQuery("#vin").val(); 
var fvin= jQuery("#afvin").val(); 
var subaru= jQuery("#subaru").val();
var model= jQuery("#model").val();
var modyear= jQuery("#modyear").val();
var engine= jQuery("#engine").val();
var transmission= jQuery("#transmission").val();  
var engineother=jQuery("#engineother").val();  
var km= jQuery("#km").val();
var serviceint= jQuery("#serviceint").val();   
var kmother=jQuery("#kmother").val(); 
var findus=jQuery("#findus").val(); 
var refine=jQuery("#refine").val();
var date=jQuery("#datepicker-example14").val();

var r=true;

jQuery("#fname").removeClass('error');  
jQuery("#lname").removeClass('error');  
jQuery("#email").removeClass('error');  
jQuery("#phone").removeClass('error');  
//jQuery("#vin").removeClass('error');  
jQuery("#subaru").removeClass('error');  
jQuery("#model").removeClass('error');  
jQuery("#modyear").removeClass('error');  
//jQuery("#engine").removeClass('error');  
//jQuery("#transmission").removeClass('error');  
//jQuery("#km").removeClass('error');  
//jQuery("#serviceint").removeClass('error');  
jQuery("#refine").removeClass('error');  

 if(fname=="" || fname==null)
 {
   jQuery("#fname").addClass('error');  
   r=false;
 }
  if(lname=="" || lname==null)
 {
   jQuery("#lname").addClass('error');
   r=false;
    }
 
 
  if(email=="" || email==null)
 {
   jQuery("#email").addClass('error'); 
   r=false;
 }
 

 if(email!=''){
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        jQuery("#email").addClass('error');
      r=false;
    }
 }
  
  if(phone=="" || phone==null)
 {
   jQuery("#phone").addClass('error');  
   r=false;

 }
 
//  if(vin=="" || vin==null)
// {
//  jQuery("#vin").addClass('error');
//   r=false;
//  
// }
 
  if(model=="" || model==null)
 {
   jQuery("#model").addClass('error');
   r=false;
     
 }
 
  if(modyear=="" || modyear==null)
 {
   jQuery("#modyear").addClass('error');
   r=false;
 
 }
 
//  if(engine=="" || engine==null)
// {
//  jQuery("#engine").addClass('error');
//   r=false;
//
// }
//
//  if(transmission=="" || transmission==null)
// {
//   jQuery("#transmission").addClass('error');
//   r=false;
// }
//  if(km=="" || km==null)
// {
//   jQuery("#km").addClass('error');
//   r=false;
// }
 
//  if(serviceint=="" || serviceint==null)
// {
//  jQuery("#serviceint").addClass('error');
//   r=false;
// }

if(refine=="" || refine==null)
 {
  jQuery("#refine").addClass('error');
   r=false;
 }
 
 if(r==true)
 {

jQuery.ajax({  
type: 'POST',  
url: ajaxurl,  
data: {  
action: 'appointmentmail',  
fname: fname,
lname: lname,
email: email,
phone: phone,
vin: vin,
fvin: fvin,
subaru: subaru,
model: model,
modyear: modyear,
engine: engine,
transmission: transmission,
engineother: engineother,
km: km,
serviceint: serviceint,
kmother: kmother,
findus: findus,
refine: refine,
date: date,

},  
beforeSend: function() {
        // setting a timeout
jQuery(".appointment-form").addClass('loading');
},
success: function(data){
    if(data=='1')
    {
window.location.href = 'http://www.alldrivesubaru.com.au/thank-you-for-book-an-appointment/';        
var msg="Your Appointment has been booked.";
jQuery(".appointment-form").removeClass('loading');
jQuery("#success-app").html('');  
jQuery("#success-app").append(msg); 
jQuery('#appointment').find("input[type=text], textarea,select").val("");
jQuery("#datepicker-example14").val(cdate);
setTimeout(function(){ jQuery("#success-app").html(''); }, 3000);
    }
},  
error: function(errorThrown){  
alert(errorThrown);  
}  
}); 
return false;
}
 else{
    return false;
}
}

jQuery('#phone').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
        event.preventDefault();
    }
});
jQuery('#phone1, #qphone').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
        event.preventDefault();
    }
});

function enquiryval(){

var fname1= jQuery("#fname1").val();
var lname1= jQuery("#lname1").val();
var email1= jQuery("#email1").val();
var atpos1 = email1.indexOf("@");
var dotpos1 = email1.lastIndexOf(".");
var phone1= jQuery("#phone1").val();
var model1= jQuery("#model1").val();
var modyear1= jQuery("#modyear1").val();
var engine1= jQuery("#engine1").val();
var vin1= jQuery("#vin1").val();
var comments1=jQuery("#comments1").val();
var r=true;

jQuery("#fname1").removeClass('error');  
jQuery("#lname1").removeClass('error');  
jQuery("#email1").removeClass('error');  
jQuery("#phone1").removeClass('error');  
 

if(fname1=="" || fname1==null)
{
jQuery("#fname1").addClass('error');  
r=false;
}
if(lname1=="" || lname1==null)
{
jQuery("#lname1").addClass('error');
r=false;
}

if(email1=="" || email1==null)
{
jQuery("#email1").addClass('error'); 
r=false;
}
 
if(email1!=''){
if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=email1.length) {
jQuery("#email1").addClass('error');
r=false;
}
}

if(phone1=="" || phone1==null)
{
jQuery("#phone1").addClass('error');  
r=false;
}
 
if(r==true)
{
jQuery.ajax({  
type: 'POST',  
url: ajaxurl,  
data: {  
action: 'enquirymail',  
fname: fname1,
lname: lname1,
email: email1,
phone: phone1,
model: model1,
modyear: modyear1,
engine: engine1,
vin: vin1,
comments: comments1,
},  
beforeSend: function() {
// setting a timeout
jQuery(".enquire-form").addClass('loading');
},
success: function(data){
if(data=='1')
{
var msg="Your Enquiry has been Sent.";
jQuery(".enquire-form").removeClass('loading');
jQuery("#success-msg").html(''); 
jQuery("#success-msg").show();
jQuery("#success-msg").append(msg); 
jQuery('#enquiry').find("input[type=text], textarea,select").val("");
setTimeout(function(){ jQuery("#success-msg").hide(); }, 3000);
}
},  
error: function(errorThrown){  
alert(errorThrown);  
}  
}); 
return false;
}
else{
return false;
}

    return false;
}

////////validation for Enquiry form //////

////////validation for Quote form (Header) //////
function quoteval(){

var qname= jQuery("#qname").val();
var qlname= jQuery("#qlname").val();
var qphone= jQuery("#qphone").val();
var qemail= jQuery("#qemail").val();
var atpos1 = qemail.indexOf("@");
var dotpos1 = qemail.lastIndexOf(".");
var dotpos2= qemail.indexOf(".");
var qdate= jQuery("#qdate").val();
var qtime=jQuery("#qtime").val();
var qmodel=jQuery("#qmodel").val();
var qyear=jQuery("#qyear").val();
var locateus=jQuery("#locateus").val();
var qinfo=jQuery("#qinfo").val();
var urgent=jQuery("input[name='urgent']:checked").val();
if(urgent=='yes')
{ urgent='Yes'; }
else{ urgent='No'; }
var r=true;

jQuery("#qname").removeClass('error');  
jQuery("#qlname").removeClass('error');
jQuery("#qphone").removeClass('error');  
jQuery("#qemail").removeClass('error');  
jQuery("#qmodel").removeClass('error'); 
jQuery("#qyear").removeClass('error'); 
jQuery("#qinfo").removeClass('error'); 

if(qname=="" || qname==null)
{
jQuery("#qname").addClass('error');  
r=false;
}

if(qlname=="" || qlname==null)
{
jQuery("#qlname").addClass('error');  
r=false;
}

if(qphone=="" || qphone==null)
{
jQuery("#qphone").addClass('error');
r=false;
}

if(qemail=="" || qemail==null)
{
jQuery("#qemail").addClass('error'); 
r=false;
}

if(qemail!=''){
if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=qemail.length || atpos1==dotpos2-1 ||  dotpos2==atpos1-1 ) {
jQuery("#qemail").addClass('error');
r=false;
}
}

if(qmodel=="" || qmodel==null)
{
jQuery("#qmodel").addClass('error');  
r=false;
}

if(qyear=="" || qyear==null)
{
jQuery("#qyear").addClass('error');  
r=false;
}

if(qinfo=="" || qinfo==null)
{
jQuery("#qinfo").addClass('error');  
r=false;
}
 
if(r==true)
{
jQuery.ajax({  
type: 'POST',  
url: ajaxurl,  
data: {  
action: 'quotemail',  
qname: qname,
qlname: qlname,
qphone: qphone,
qemail: qemail,
qdate: qdate,
qtime: qtime,
qmodel: qmodel,
qyear: qyear,
locateus: locateus,
qinfo: qinfo,
urgent: urgent
},  
beforeSend: function() {
// setting a timeout
jQuery("#quote_form").addClass('loading');
jQuery("#ajax-loader").show();
},
success: function(data){
if(data=='1')
{
jQuery("#quote_form").removeClass('loading');
jQuery("#ajax-loader").hide();
window.location.href = 'http://www.alldrivesubaru.com.au/thank-you-for-book-an-appointment/'; 
jQuery('<span id="success-quote">Your Quote has been submitted, Will get back to you shortly.</span>').insertAfter('#ajax-loader');
jQuery('#quote_form').find("input[type=text], textarea, select, input[type=checkbox]").val("");
jQuery("#urgent").attr('checked', false); 
setTimeout(function(){ jQuery("#success-quote").hide(); }, 3000);
}
},  
error: function(errorThrown){  
alert(errorThrown);  
}  
}); 
return false;
}
else{
return false;
}

    return false;
}

jQuery('#malfunction-code').keypress(function (e) {
  if (e.which == 13) {
    jQuery('form#malfunction-search').submit();
    return false;    //<---- Add this line
  }
});

jQuery('#malfunction-name').keypress(function (e) {
  if (e.which == 13) {
    jQuery('form#malfname').submit();
    return false;    //<---- Add this line
  }
});

function malfsearch(){
var code= jQuery("#malfunction-code").val().toUpperCase();
if(code!='')
{
jQuery.ajax({  
type: 'POST',  
url: ajaxurl,  
data: {  
action: 'malfsearch',  
code: code,
},  
beforeSend: function() {
// setting a timeout
jQuery("#malf-list").addClass('loading');
},
success: function(data){
if(data)
{
jQuery("#malf-list").removeClass('loading');
jQuery("#malf-list").html(data); 
jQuery('form#malfunction-search').find("input[type=text]").val("");
}
},  
error: function(errorThrown){  
alert(errorThrown);  
}  
}); 
return false;
}
else{
return false;
}

return false;
}

function malfname(){
var malfname= jQuery("#malfunction-name").val();
if(malfname!='')
{
jQuery.ajax({  
type: 'POST',  
url: ajaxurl,  
data: {  
action: 'malfname',  
malfname: malfname,
},  
beforeSend: function() {
// setting a timeout
jQuery("#malf-list").addClass('loading');
},
success: function(data){
if(data)
{
jQuery("#malf-list").removeClass('loading');
jQuery("#malf-list").html(data); 
jQuery('form#malfname').find("input[type=text]").val("");
}
},  
error: function(errorThrown){  
alert(errorThrown);  
}  
}); 
return false;
}
else{
return false;
}

return false;
}