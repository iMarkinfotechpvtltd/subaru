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
<div class="banner banner-inner-service banner-head-gaskets" style="background-image:url(<?php echo $url;?>);background-position:center center;">
<?php }
else{ ?>
<div class="banner banner-inner-service banner-head-gaskets" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
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
<div class="opportunities clutch-repair-page  thr-btn-main">
    
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
//'orderby' => 'title',
//'order'   => 'ASC',
'orderby' => 'menu_order',    
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
<div class="tab-pane active clutch-repair transpCV" id="head-gasket-repairs">
<?php echo get_the_content(); ?>
</div> <!--subaru-air-conditioning-repairs Close-->
</div> <!--col-md-8--->

<div class="col-xs-12 col-md-4 col-sm-4">
<?php get_sidebar('services'); ?>
</div> <!--col-md-4--->
</div>

<?php get_sidebar('three_buttons'); ?>
</div> <!--opportunities Close-->
</div>

<div class="advice-and-warnings">
<div class="container">
<h3>Advice and warnings from ADS</h3>

<div class="row"> 
<div class="col-xs-6 col-md-3">
<div class="white-block">
<span class="advice-icon00"></span>
<?php echo get_post_meta($post->ID,"section1",true); ?>
</div> 
</div> <!---col-xs-6 col-dm-3--->

<div class="col-xs-6 col-md-3">
<div class="white-block">
<span class="advice-icon01"></span>
<?php echo get_post_meta($post->ID,"section2",true); ?>
</div> 
</div> <!---col-xs-6 col-dm-3--->

<div class="col-xs-6 col-md-3">
<div class="white-block">
<span class="advice-icon02"></span>
<?php echo get_post_meta($post->ID,"section3",true); ?>
</div> 
</div> <!---col-xs-6 col-dm-3--->

<div class="col-xs-6 col-md-3">
<div class="white-block">
<span class="advice-icon03"></span>
<?php echo get_post_meta($post->ID,"section4",true); ?>
</div> 
</div> <!---col-xs-6 col-dm-3--->
</div> <!--row close-->
<h5><?php echo get_post_meta($post->ID,"call_text",true); ?></h5>
</div> <!--container close-->
</div>

<div class="internal-head-gasket-leaks advanced-warning">
<div class="container">
<div class="gasket-headding">
<h3>Early and advanced warning signs of head gasket failure</h3>
</div>
<?php echo get_post_meta($post->ID,"early_and_advanced_warning_signs_of_head_gasket_failure",true); ?>
</div> <!---container close--->
</div>

<div style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/Head-gasket-service-bg.jpg);" class="services-we-Offer">
<div class="container">
<div class="internal-service-section">
<h3><?php echo get_post_meta($post->ID,"main_title_right",true); ?></h3>
<div class="internal-service-section-image">
<?php
$rightimg = get_post_meta($post->ID,"main_image_right",true);
$img = wp_get_attachment_image_src($rightimg,'full');
$image_alt = get_post_meta( $rightimg, '_wp_attachment_image_alt', true);
$url1 = $img[0];
?>
<img alt="subaro" src="<?php echo $url1; ?>" alt="<?php echo $image_alt; ?>">
<p><?php echo get_post_meta($post->ID,"image_caption",true); ?></p>
</div> <!--internal-service-section-image-->
<?php echo get_post_meta($post->ID,"main_description_right",true); ?>
</div>
</div>

<div class="container">
<div class="forms-steps-section">

<!--<div class="forms-steps-section-internal">
<h3><span style="color:#027ffd;">Step 1 -</span> Select Your Vehicle</h3>
</div>-->
<!--<div class="form-bar">
<div class="row"> 
<div class="col-sm-4">
<select class="form-control">
<option>Model</option>
<option>Model DEMO</option>
<option>Model DEMO 1</option>      
</select>

</div> col-sm-4
<div class="col-sm-4">
<select class="form-control">
<option>Year</option>
<option>2010</option>
<option>2011</option>      
</select>
</div> col-sm-4

<div class="col-sm-4">
<select class="form-control">
<option>Engine</option>
<option>Engine V5</option>
<option>Engine V6</option>      
</select>
</div> col-sm-4
</div>
</div>-->
<div class="forms-steps-section-internal">
<h3><span style="color:#027ffd;">Step 1 -</span> Select Your Option</h3>

<div class="basic-head-gasket-repair-option">  
<h3><span>Option 1 -</span><?php echo get_post_meta($post->ID,"option_1_title",true); ?></h3>
<div class="basic-head-gasket-iner">
<?php echo get_post_meta($post->ID,"option_1_description",true); ?>
<button class="btn btn-default btn-option" type="button"></button>
</div> <!---basic-head-gasket-iner--->
</div>   <!--basic-head-gasket-repair-option-->   

<div class="basic-head-gasket-repair-option">  
<h3><span>Option 2 -</span>Head Gasket Repair And Maintenance Option</h3>
<div class="basic-head-gasket-iner">
<?php echo get_post_meta($post->ID,"option_2_description",true); ?>
<button class="btn btn-default btn-option" type="button"></button>
</div> <!---basic-head-gasket-iner--->
</div>   <!--basic-head-gasket-repair-option--> 
</div>

<div class="forms-steps-section-internal">
<h3><span style="color:#027ffd;">Step 2 -</span> Send Your Enquiry</h3>
<?php echo get_sidebar('enquiry'); ?>
</div>
</div> <!---forms-steps-section Close--->
</div> <!--container-->
</div>

<div class="rely-section">
<div class="container">
<h3>you can rely on all Drive subaroo</h3>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12">
<span class="rely-00"></span>
<?php echo get_post_meta($post->ID,"section1",true); ?>
</div>  <!--col-md-4-->
<div class="col-md-4 col-sm-4 col-xs-12">
<span class="rely-01"></span>
<?php echo get_post_meta($post->ID,"section2",true); ?>
</div>  <!--col-md-4-->
<div class="col-md-4 col-sm-4 col-xs-12">
<span class="rely-02"></span>
<?php echo get_post_meta($post->ID,"section3",true); ?> 
</div>  <!--col-md-4-->
</div> <!---row--->
</div> <!--container-->
</div>

<div class="comman-question">
<div class="container">
<h3>Some Commonly Asked Questions:</h3>
</div>
</div>

<div class="comaon-faq-section">
<div class="container">

<?php 


// check if the repeater field has rows of data
if( have_rows('faq') ):
//
// 	// loop through the rows of data
    while ( have_rows('faq') ) : the_row();
//    ?>
    <div class="q-wrap">
    <?php
       // display a sub field value     ?>
       <div class="question-faq"><h3><?php the_sub_field('faq_title'); ?></h3></div>
      <div class="answer-faq"><?php the_sub_field('faq_answer'); ?></div>
     
     </div>
  <?php endwhile;
  endif; ?>
<?php echo get_post_meta($post->ID,"contact_details",true); ?> 
<div class="two-coloumns">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<?php    
$img1 = get_post_meta($post->ID,"image1",true);
$contimg1 = wp_get_attachment_image_src($img1,'service_head_gasket');
$image_alt = get_post_meta( $img1, '_wp_attachment_image_alt', true);
$conturl1 = $contimg1[0];
?>
<img alt="..." src="<?php echo $conturl1; ?>" alt="<?php echo $image_alt; ?>">
<div class="system-cooling-caption">
<h3><?php echo get_post_meta($post->ID,"image_1_caption",true); ?></h3>
<?php $img_link_1 = get_post_meta($post->ID,"image_1_link",true); ?>
<a class="btn-morre" href="<?php if($img_link_1){echo $img_link_1;}else{ echo 'javascript:void(0);'; } ?>"></a>  
</div>
</div> <!--col-md-6-->

<div class="col-md-6 col-sm-6 col-xs-12">
<?php    
$img2 = get_post_meta($post->ID,"image2",true);
$contimg2 = wp_get_attachment_image_src($img2,'service_head_gasket');
$image_alt = get_post_meta( $img2, '_wp_attachment_image_alt', true);
$conturl2 = $contimg2[0];
?>
<img alt="..." src="<?php echo $conturl2; ?>" alt="<?php echo $image_alt; ?>">
<div class="system-cooling-caption">
<h3><?php echo get_post_meta($post->ID,"image_2_caption",true); ?></h3>
<?php $img_link_2 = get_post_meta($post->ID,"image_2_link",true); ?>
<a class="btn-morre" href="<?php if($img_link_2){echo $img_link_2;}else{ echo 'javascript:void(0);'; } ?>"></a>  
</div>
</div> <!--col-md-6-->

</div>  <!---row Close--->      
</div>
        
</div>
</div>  
<!-- Appointment Form -->
<?php get_sidebar('appointment'); ?>

<?php get_sidebar('online_store'); ?> <!-- Show products-->
<?php get_sidebar('brands'); ?><!-- Client logo's Section -->


<?php get_footer(); ?>

