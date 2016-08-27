<?php 
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<!--- Banner Section start here ---->
<?php 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'full');
$url = $image[0];
if($url!="") 
{ ?>
<div class="banner banner-inner-service banner-head-gaskets banner-cooling" style="background-image:url(<?php echo $url;?>);background-position:center center;">
<?php }
else{ ?>
<div class="banner banner-inner-service banner-head-gaskets banner-cooling" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php } ?>
<div class="container-fluid">
<div class="banner-left">
<h1><?php echo get_post_meta($post_id,"banner_title",true); ?></h1>
<ul class="banner-thr-box">
<?php
for($i=1;$i<=3;$i++){
 $bann= "small_banner_image_".$i;
$banner_small = get_post_meta($post_id,$bann,true);
if($banner_small){
$small_image = wp_get_attachment_image_src($banner_small,'banner_small');
$image_alt = get_post_meta( $banner_small, '_wp_attachment_image_alt', true);
$small_url = $small_image[0]; ?>
<li><img class="img-responsive" src="<?php echo $small_url; ?>" alt="<?php echo $image_alt; ?>">
<h2><?php echo get_the_title($banner_small); ?></h2>
</li>

<?php }
}
?>

</ul>

</div>
    
</div>
    
</div> 
<!--- Banner Section End here ---->
<div class="clearfix"></div>

<!--- Search Section start here ---->
<div class="main-search-sec">
<div class="container">
<div class="main-search ">
<form>
<div class="form-group select-in">
<select class="form-control">
<option>Search by category</option>
<option>Engine</option>
<option>Gearbox</option>
<option>Parts</option>
</select>
</div>
<div class="form-group search-in">
<input type="text" class="form-control" placeholder="Search website">
</div>
<button type="submit" class="main-search-btn">search</button>
</form>
</div>
</div>
</div>
<!--- Search Section End here ---->

<div class="container">
<div class="opportunities clutch-repair-page cooling-sys thr-btn-main">
    
<!-- Breadcrumbs start here-->
<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<li><a href="<?php echo get_permalink(122); ?>">Services</a></li>
<?php $cat=get_the_terms($post_id, 'categories_services'); 
$cat11=$cat[0]; ?>
<li><?php echo $cat11->name; ?></li>
<!--<li><a href="<?php //echo get_permalink(122); ?>"><?php //echo $cat11->name; ?></a></li>-->
<li class="active"><?php echo get_the_title($post_id); ?></li>
</ol>
</div>    
<!-- Breadcrumbs End here-->

<!-- Start Show the Category Name and it's posts -->
<div class="row air-conditioning">     
<div class="col-md-12">
<?php foreach((get_the_terms($post_id, 'categories_services')) as $term) { 
echo '<h2>'.$term->name.'</h2>'; 
?>
<?php 
$args = array(
'post_type'   => 'services',
'orderby' => 'menu_order',     
//'orderby' => 'title',
//'order'   => 'ASC',   
'tax_query' => array(
array(
'taxonomy' => 'categories_services',
'field'    => 'id',
'terms'    => $term->term_id
)
)
);
$the_query = new WP_Query( $args );
$i=0;
// The Loop
if ( $the_query->have_posts() ) {
?>
<ul class="nav nav-tabs log-tabing">    
<?php
while ( $the_query->have_posts() ) {
$the_query->the_post();
if(get_the_ID()==$post_id){$class='active';} else{$class='';}
echo '<li class="'.$class.'"><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
}
}
}
wp_reset_postdata();
?>
</ul> 
    <ul class="services-top-buttons">
<li><a href="#appointment">Book Your Service</a></li>    
</ul>  
</div>
</div> <!-- End Show the Category Name and it's posts -->

<div class="row conditioning-repairs">
<div class="col-xs-12 col-md-8 col-sm-8">
<div id="cooling-system" class="tab-pane active clutch-repair transpCV">
<?php echo get_the_content(); ?>
<div class="cooling-system-comprises">  
<div class="row"> 
<h3>The Subaru Cooling System Comprises the Following Parts:</h3>
<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle00"></span>
<p>Water pump</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->
<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle01"></span>
<p>Radiator</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle02"></span>
<p>Thermostat</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->
<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle03"></span>
<p>Thermostatic switch</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle04"></span>
<p>Electric cooling fan</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle05"></span>
<p>Various rubber hoses</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle06"></span>
<p>Drive belt</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle07"></span>
<p>Cabin heater 
core and fan</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle08"></span>
<p>Radiator caps on 
header and radiator</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle09"></span>
<p>Overflow tank</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle10"></span>
<p>Remote header tank</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

<div class="col-sm-4 col-md-3"> 
<div class="white-box">
<span class="blue-circle11"></span>
<p>Head Gaskets</p>
</div> 
</div> <!---col-sm-4 col-md-3 Close--->

</div>  <!---row Close--->
</div>   
</div> <!--subaru-air-conditioning-repairs Close-->
</div> <!--col-md-8--->
<div class="col-xs-12 col-md-4 col-sm-4">
<?php get_sidebar('services'); ?>
</div> <!--col-md-4--->
</div>

<?php get_sidebar('three_buttons'); ?>
</div> <!--opportunities Close-->
</div>

<!--black bar start here-->
<div class="black-bar">
<div class="container">
<h4>We have all these components in stock and ready to go. <a href="#">Visit our Online Parts Store</a></h4>
</div>
</div>
<!-- Black Bar End here -->

<!----------------------------------->
<div class="overheating-diagnosis-section">
<div class="container">
<?php echo get_post_meta($post_id, 'difficulty_of_subaru_engine_overheating_diagnosis', true); ?>
</div>
</div>
<!----------------------------------->

<!----------------------------------->
<div style="background-image:url(http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/service/Cooling-systme-middle-banner.jpg);" class="services-we-Offer">
<div class="container">
<div class="internal-service-section">
<?php echo get_post_meta($post_id, 'cooling_system_services_we_offer', true); ?>
</div>
</div>
</div>
<!----------------------------------->

<!-- Appointment Form -->
<?php get_sidebar('appointment'); ?>

<?php get_sidebar('online_store'); ?> <!-- Show products-->

<?php get_sidebar('brands'); ?><!-- Client logo's Section -->

<?php get_footer(); ?>

