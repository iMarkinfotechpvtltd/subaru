jQuery(document).ready(function(){
jQuery(function(){
      SyntaxHighlighter.all();
	  
	      });	
   
    jQuery(window).load(function(){

  // The slider being synced must be initialized first
  jQuery('#product-desin0').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#product-desin'
  });
 
  jQuery('#product-desin').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#product-desin0"
  });

	 
	 jQuery('#carousel-0').flexslider({
        animation: "slide",
	//	direction: "vertical",
        animationLoop: false,
        slideshow: false,
		useCSS: true, 
		itemWidth:150, 
        asNavFor: '#slider-0'
      });

   jQuery('#slider-0').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-0",
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
      });
	  
	       jQuery('#carousel-1').flexslider({
        animation: "slide",
		//direction: "vertical",
        animationLoop: false,
        slideshow: false,
		useCSS: true, 
		itemWidth:150, 
        asNavFor: '#slider-1'
      });

   jQuery('#slider-1').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-1",
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
      });
	  
	  	       jQuery('#carousel-2').flexslider({
        animation: "slide",
	//	direction: "vertical",
        animationLoop: false,
        slideshow: false,
		useCSS: true, 
		itemWidth:150, 
        asNavFor: '#slider-2'
      });

   jQuery('#slider-2').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-2",
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
      });
	 	       jQuery('#carousel-3').flexslider({
        animation: "slide",
		//direction: "vertical",
        animationLoop: false,
        slideshow: false,
		useCSS: true, 
		itemWidth:150, 
        asNavFor: '#slider-3'
      });

   jQuery('#slider-3').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-3",
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
      }); 
	  
	   jQuery('#carousel-4').flexslider({
        animation: "slide",
	//	direction: "vertical",
        animationLoop: false,
        slideshow: false,
		useCSS: true, 
		itemWidth:150, 
        asNavFor: '#slider-4'
      });

   jQuery('#slider-4').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel-4",
        start: function(slider){
        jQuery('body').removeClass('loading');
        }
      });  
	  
	  });
	  

	
});	