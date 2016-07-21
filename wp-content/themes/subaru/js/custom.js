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
            items:2,
          
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
            items:2,
          
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
    loop:false,
	autoplay:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
          
        },
        767:{
            items:2,
			
          
        },
        1000:{
            items:3,
            nav:true,
        }
    }
});

jQuery('.timing-belt-carosuel').owlCarousel({
    loop:true,

	autoplay:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
          
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
var refine=jQuery("#refine").val();
var date=jQuery("#datepicker-example14").val();

var r=true;

jQuery("#fname").removeClass('error');  
jQuery("#lname").removeClass('error');  
jQuery("#email").removeClass('error');  
jQuery("#phone").removeClass('error');  
jQuery("#vin").removeClass('error');  
jQuery("#subaru").removeClass('error');  
jQuery("#model").removeClass('error');  
jQuery("#modyear").removeClass('error');  
jQuery("#engine").removeClass('error');  
jQuery("#transmission").removeClass('error');  
jQuery("#km").removeClass('error');  
jQuery("#serviceint").removeClass('error');  

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
 
  if(vin=="" || vin==null)
 {
  jQuery("#vin").addClass('error');
   r=false;
  
 }
 
  if(subaru=="" || subaru==null)
 {
      jQuery("#subaru").addClass('error');
     r=false;
    
 }
 
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
 
  if(engine=="" || engine==null)
 {
  jQuery("#engine").addClass('error');
   r=false;

 }

  if(transmission=="" || transmission==null)
 {
   jQuery("#transmission").addClass('error');
   r=false;
 }
  if(km=="" || km==null)
 {
   jQuery("#km").addClass('error');
   r=false;
 }
 
  if(serviceint=="" || serviceint==null)
 {
  jQuery("#serviceint").addClass('error');
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
var qphone= jQuery("#qphone").val();
var qemail= jQuery("#qemail").val();
var atpos1 = qemail.indexOf("@");
var dotpos1 = qemail.lastIndexOf(".");
var qdate= jQuery("#qdate").val();
var qtime=jQuery("#qtime").val();
var qmodel=jQuery("#qmodel").val();
var qyear=jQuery("#qyear").val();
var qinfo=jQuery("#qinfo").val();
var r=true;

jQuery("#qname").removeClass('error');  
jQuery("#qphone").removeClass('error');  
jQuery("#qemail").removeClass('error');  
jQuery("#qdate").removeClass('error');  
jQuery("#qtime").removeClass('error');  

if(qname=="" || qname==null)
{
jQuery("#qname").addClass('error');  
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
if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=qemail.length) {
jQuery("#qemail").addClass('error');
r=false;
}
}

if(qdate=="" || qdate==null)
{
jQuery("#qdate").addClass('error');  
r=false;
}

if(qtime=="" || qtime==null)
{
jQuery("#qtime").addClass('error');  
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
qphone: qphone,
qemail: qemail,
qdate: qdate,
qtime: qtime,
qmodel: qmodel,
qyear: qyear,
qinfo: qinfo,
},  
beforeSend: function() {
// setting a timeout
jQuery("#quote_form .popup-get-fm-btn").addClass('loading');
},
success: function(data){
if(data=='1')
{
var msg="Your Enquiry has been Sent.";
jQuery("#quote_form .popup-get-fm-btn").removeClass('loading');
jQuery("#success-quote").html(''); 
jQuery("#success-quote").show();
jQuery("#success-quote").append(msg); 
jQuery('#quote_form').find("input[type=text], textarea,select").val("");
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
