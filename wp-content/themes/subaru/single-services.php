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
if($post_id==100){$background="background-position:left center;";}
else if($post_id==99 || $post_id==102 || $post_id==104 || $post_id==105 || $post_id==106 || $post_id==109){$background="background-position:center center;";}
else{$background="background-position:72% 50%;";}
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);<?php echo $background; ?>">
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
<div class="opportunities clutch-repair-page thr-btn-main">
<!-- Breadcrumbs start here-->
<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<li>Services</li>
<?php $cat=get_the_terms($post_id, 'categories_services'); 
$cat11=$cat[0]; ?>
<!--<li><a href="<?php //echo get_permalink(122); ?>"><?php //echo $cat11->name; ?></a></li>-->
<li><?php echo $cat11->name; ?></li>
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
<?php 
if($post_id==96){ $main=' lubri-main'; }
else{$main='';}
?>
<div class="row conditioning-repairs <?php echo $main; ?>">
<div class="col-xs-12 col-md-8 ">
<div class="tab-content">
<?php 
$contid[]=array(96 => "battery-services", 97 => "clutuch-replacement", 98 => "battery-services", 99 => "brake-repair", 100 => "wheel-bearing-repair", 101 => "cv-shaft-repair", 102 => "battery-services", 103 => "shock-absorbers", 104 => "bushes-and-links", 105 => "battery-services", 106 => "battery-services", 107 => "power-window-repair", 108 => "battery-services", 109 => "door-mirrors-repair", 110 => "air-re-gas");

$contclass[]=array(96 => "subaru-air-conditioning-repairs", 98 => "clutch-repair transpCV", 101 => "clutch-repair transpCV", 103 => 'clutch-repair', 104 => "clutch-repair", 106 => "clutch-repair", 107 => "clutch-repair", 109 => "clutch-repair", 110 => "subaru-air-conditioning-repairs");

if (array_key_exists($post_id, $contid[0])) {
if($contid[0][$post_id]){$displayid=$contid[0][$post_id];}
}
else{$displayid='air-re-gas';}

if (array_key_exists($post_id, $contclass[0])){
if($contclass[0][$post_id]){$displaycls=$contclass[0][$post_id];}
}
else{$displaycls='clutch-repair';}
?>
<div id="<?php echo $displayid; ?>" class="tab-pane fade in active <?php echo $displaycls; ?>">
<?php echo get_the_content(); ?>
</div> <!--subaru-air-conditioning-repairs Close-->
</div>
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

<?php
$show= get_post_meta($post->ID,"show_info",true);
if($show )
{
$auth_img=get_post_meta($post->ID,"author_image",true);
$auth_dec=get_post_meta($post->ID,"author_info",true);
$tool_img=get_post_meta($post->ID,"tool_image",true);
?>
<div class="clutch-norrie-andreson">
<div class="container">
<div class="row">
<div class="col-md-3">
<?php  if($auth_img){ ?>
<img alt="..." src="<?php echo wp_get_attachment_url($auth_img); ?>">
<?php } ?>
</div> <!--col-md-3-->
<div class="col-md-6">
<?php if($auth_dec){
echo $auth_dec;
}
?>
</div> <!--col-md-6-->
<div class="col-md-3">
<?php if($tool_img){ ?>
<img alt="..." src="<?php echo wp_get_attachment_url($tool_img); ?>">
<?php } ?>
</div>
</div> <!--row close-->
</div> <!--container-fluid-->
</div>
<?php } ?>
<div class="conditioning-service-package air-conditioning">
<div class="container">
<?php
$pack_title=get_post_meta($post->ID,"package_title",true);
$pack_desc=get_post_meta($post->ID,"package_desc",true);
if($pack_title){   echo '<h2>'.$pack_title.'</h2>'; } 
else{ ?><h2>CHOOSE <?php echo get_the_title(); ?> PACKAGE</h2> <?php }
if($pack_desc){echo '<p>'.$pack_desc.'</p>';}
else{ ?><p>Subaru replacement air conditioner compressors or evaporator  kits can be installed to most Subaru models within one (1) day at our Subaru workshop in Peakhurst. We can provide loan vehicles for your convenience. A complimentary car wash is included after a comprehensive Subaru quality inspection, conducted by a senior Subaru mechanic before you collect your Subaru vehicle. Check out our service packages.</p> <?php }
?>    

<div class="row price-blocks">
<div class="col-md-12 price-grid"> 
<?php $packages= get_post_meta( $post_id, '_test_value', true); 
$pack_uns=explode(',',$packages);
$args = array( 'post__in'=>$pack_uns, 'post_type' =>'packages','order'=> 'ASC', 'posts_per_page'   => -1 );
$lastposts = get_posts( $args );
foreach ( $lastposts as $post ) {

setup_postdata( $post ); 	     
$pack_id=get_the_ID();
?>
<div class="col-xs-12 col-md-4">
<h3><?php echo get_the_title($pack_id); ?></h3>
<div class="price-circle">
<?php if(get_post_meta( $pack_id, 'package_price', true)){ ?>    
From <?php echo '$'.get_post_meta( $pack_id, 'package_price', true);
}
else{ echo 'POA'; }
?>
</div> <!--price-circle Close-->
<div class="absorvers">   
<?php echo get_the_content($pack_id); ?>
</div> <!---->
<div class="bottom-buttons">
<a href="#appointment"><button type="button" class="btn btn-default">Book Now</button></a>
<a href="#appointment"><button type="button" class="btn btn-default right">Inquire Now</button></a>
</div>
</div> <!--col-xs-12 col-md-4-->  
<?php } ?>
</div> <!--col-xs-12 carousel--> 
</div> <!--row-close-->
</div>
</div>
<!--price -Tag-close-->

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
<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>

