<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?>

<!-- Primary Footer Start -->
<div class="footer-up">
<div class="container">
<?php dynamic_sidebar('primary-footer1'); ?>   
<?php dynamic_sidebar('primary-footer2'); ?>  
<?php dynamic_sidebar('primary-footer3'); ?>    
<?php dynamic_sidebar('primary-footer4'); ?> 
</div>
</div>
<!-- Primary Footer End -->

<!-- Secondary Footer Start -->
<footer style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/footer-back-new.jpg)">
<div class="container">
<div class="footer-list service-list">
<h3>SERVICES</h3>
<?php 
$args = array(
'post_type'   => 'services',
'orderby' => 'title',
'order'   => 'ASC', 
'posts_per_page'=> -1    
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
$inc=0;
while ( $the_query->have_posts() ) {
if($inc==0){echo '<ul>'; }
$the_query->the_post(); 
?> <li><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
<?php
$inc++;
if($inc==12){
$inc=0;
echo '</ul>';}
}
}
?>
</div>

<div class="footer-list engines-list">
<h3>Engines</h3>
<?php wp_nav_menu( array( 'theme_location' => 'footer-engine-menu' ) ); ?>
</div>
<div class="footer-list parts-list">
<h3>Parts</h3>
<?php wp_nav_menu( array( 'theme_location' => 'footer-parts-menu' ) ); ?>
</div>
<div class="footer-list gearbox-list">
<h3>Gearbox</h3>
<?php wp_nav_menu( array( 'theme_location' => 'footer-gearbox-menu' ) ); ?>
</div>
<div class="footer-list subapedia-list">
<h3>Subapedia</h3>
<?php wp_nav_menu( array( 'theme_location' => 'footer-subpedia-menu' ) ); ?>
<h3 style="margin:20px 0 15px;">aBOUT ADS</h3>
<ul>
<li><a href="<?php echo get_permalink(85); ?>">Testimonials</a></li>
</ul>
<h3 style="margin:20px 0 15px;">cONTACT US</h3>
<ul>
<li><a href="<?php echo get_permalink(133); ?>">Contact US</a></li>
</ul>
  
</div>
</div>
</footer>
<?php get_sidebar('quote'); ?>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/liberary.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<?php if(!is_page(85)){ ?>
<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<?php } 
else{ ?>
<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.min.css">   
<script src="http://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.0.6/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
(function ($) {
jQuery(window).on("load", function () {
jQuery(".content").mCustomScrollbar();
axis: "y"
});
})(jQuery);
</script>
<?php } ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mCustomScrollbar.min.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-date.css" type="text/css">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/zebra_datepicker.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/core.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery-ui.css" type="text/css">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-ui.js"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.timepicker.css" />
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom-footer.js"></script>
</body>
</html>
