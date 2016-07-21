/* jQuery.Categories (https://github.com/Imdsm/jQuery.Categories)
 * Adam K Dean (Imdsm)
 * 01/07/2013 10:27
 */
 jQuery(function() {

 	var $tabbing = $('.tab-content');

 	// we use imagesLoaded here so that all images are downloaded 
 	// before isotope makes any width/height calculations.
 	$tabbing.imagesLoaded( function(){
	 	$tabbing.isotope({
	 		itemSelector: '.filter-tab'
	 	});
	});

	jQuery('.categories li a').click(function() {
		var category = $(this).data('category');
		category = (category == '*') ? category : '.' + category;
		$tabbing.isotope({ filter: category });

		jQuery('.categories li a').parent().removeClass('active');
		jQuery(this).parent().addClass('active');		
	});
 });	