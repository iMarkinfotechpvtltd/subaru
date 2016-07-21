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
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);background-position:center center;">
<?php
}
else
{
?>
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
?>
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
'orderby' => 'title',
'order'   => 'ASC',     
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
</div>
</div> <!-- End Show the Category Name and it's posts -->

<div class="row conditioning-repairs">
<div class="col-xs-12 col-md-8 ">
<div class="tab-pane active clutch-repair transpCV" id="head-gasket-repairs">
<?php echo get_the_content(); ?>
</div> <!--subaru-air-conditioning-repairs Close-->
</div> <!--col-md-8--->

<div class="col-xs-12 col-md-4">
<?php get_sidebar('services'); ?>
</div> <!--col-md-4--->
</div>

<div class="thr-btns">
<ul>
<li><a href='#appointment'><button class="btn btn-default btn-quote quote" type="button">Get A Quote</button></a></li>
<li><a class="btn btn-default btn-quote helpline" href="tel:+(02) 9915 9900">(02) 9915 9900</a></li>
<li><a class="btn btn-default btn-quote helpline" href="tel:+0420319049">0420 319 049</a></li>
</ul>
</div>
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
$url1 = $img[0];
?>
<img alt="subaro" src="<?php echo $url1; ?>">
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
<div class="col-md-4">
<span class="rely-00"></span>
<?php echo get_post_meta($post->ID,"section1",true); ?>
</div>  <!--col-md-4-->
<div class="col-md-4">
<span class="rely-01"></span>
<?php echo get_post_meta($post->ID,"section2",true); ?>
</div>  <!--col-md-4-->
<div class="col-md-4">
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
<div class="col-md-6">
<?php    
$img1 = get_post_meta($post->ID,"image1",true);
$contimg1 = wp_get_attachment_image_src($img1,'service_head_gasket');
$conturl1 = $contimg1[0];
?>
<img alt="..." src="<?php echo $conturl1; ?>">
<div class="system-cooling-caption">
<h3><?php echo get_post_meta($post->ID,"image_1_caption",true); ?></h3>
<?php $img_link_1 = get_post_meta($post->ID,"image_1_link",true); ?>
<a class="btn-morre" href="<?php if($img_link_1){echo $img_link_1;}else{ echo 'javascript:void(0);'; } ?>"></a>  
</div>
</div> <!--col-md-6-->

<div class="col-md-6">
<?php    
$img2 = get_post_meta($post->ID,"image2",true);
$contimg2 = wp_get_attachment_image_src($img2,'service_head_gasket');
$conturl2 = $contimg2[0];
?>
<img alt="..." src="<?php echo $conturl2; ?>">
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

<div class="srip-cose">
<div class="container">
<h2>ALL DRIVE SUBAROO PARTS ONLINE STORE</h2>
<a class="btn btn-default btn-mm" href="">VISIT OUR ONLINE STORE</a>   
</div> 
</div> <!--srip-cose-->

<div class="online-section"> 
<div class="container">
<p>If you're good with tools and want to replace the Subaru air compressor or evaporator kit yourself then we can supply you with all the necessary Subaru air conditioning parts, compressors, TX valves, evaporators and hoses. Our Subaru parts online website also offers a comprehensive range of new, pre-loved and reconditioned Subaru parts sourced locally and internationally. Our skilled technical staff will match you to the best part, at the best price. We will also provide technical advice and assistance in the installation of your parts.</p>
<div class="packagedeals">
<div clasas="row">
<div class="row-span-3">
<span class="package-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/package00.png);"></span>
<h3>Package Deals <br>
Saving You $$$$</h3>
</div> <!--row-span-3-->
<div class="row-span-3">
<span class="package-1" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/package01.png);"></span>

<h3>Customer Support <br>
For All Subaru Parts</h3>
</div> <!--row-span-3-->
<div class="row-span-3">
<span class="package-2" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/package02.png);"></span>
<h3>Hard To Find Subaru <br>
Parts</h3>
</div> <!--row-span-3-->
<div class="row-span-3">
<span class="package-3" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/package03.png);"></span>

<h3>New and Used  <br>
Subaru Part Options</h3>
</div> <!--row-span-3-->
<div class="row-span-3">
<span class="package-4" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/service/package04.png);"></span>

<h3>Exclusive Subaru <br>
Repair Kits Supplied</h3>
</div> <!--row-span-3-->
</div>
</div>

<div class="row timing-belt">
<div class="col-md-12 timing-belt-carosuel">
<div class="col-xs-6 col-md-3">
<div class="img-div">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/images00.jpg">
<div class="price-tags"> <small>ONLY</small> $349 </div>
</div> <!--img-div-->

<div class="products-description">
<h4>Subaru TIMING BELT ONLY</h4>
<p>Genuine Subaru Timing Belt. Designed and Manufactured specifically for your Subaru. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>


</div> <!--products-description-->
<button type="button" class="btn btn-default btn-order">ordeR PART ONLINE</button>
</div> <!--col-xs-6-->
<div class="col-xs-6 col-md-3">
<div class="img-div">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/images01.jpg">
<div class="price-tags"> <small>ONLY</small> $549 </div>
</div> <!--img-div-->

<div class="products-description">
<h4>Subaru TIMING BELT ONLY</h4>
<p>Genuine Subaru Timing Belt. Designed and Manufactured specifically for your Subaru. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>


</div> <!--products-description-->
<button type="button" class="btn btn-default btn-order">ordeR PART ONLINE</button>
</div> <!--col-xs-6-->
<div class="col-xs-6 col-md-3">
<div class="img-div">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/images02.jpg">
<div class="price-tags"> <small>ONLY</small> $749 </div>
</div> <!--img-div-->

<div class="products-description">
<h4>Subaru TIMING BELT ONLY</h4>
<p>Genuine Subaru Timing Belt. Designed and Manufactured specifically for your Subaru. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>


</div> <!--products-description-->
<button type="button" class="btn btn-default btn-order">ordeR PART ONLINE</button>
</div> <!--col-xs-6-->

<div class="col-xs-6 col-md-3">
<div class="img-div">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/images03.jpg">
<div class="price-tags"> <small>ONLY</small> $949 </div>
</div> <!--img-div-->

<div class="products-description">
<h4>Subaru TIMING BELT ONLY</h4>
<p>Genuine Subaru Timing Belt. Designed and Manufactured specifically for your Subaru. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
</div> <!--products-description-->
<button type="button" class="btn btn-default btn-order">ordeR PART ONLINE</button>
</div> <!--col-xs-6-->
</div>
</div>
</div>
</div> 
<?php get_sidebar('brands'); ?><!-- Client logo's Section -->


<?php get_footer(); ?>

