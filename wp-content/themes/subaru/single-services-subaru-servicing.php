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
<div class="banner banner-inner-service" style="background-image:url(<?php echo $url;?>);background-position:center center;">
<?php
}
else
{
?>
<div class="banner banner-inner-service" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
?>
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
<li><img class="img-responsive" src="<?php echo $small_url; ?>" alt="<?php echo $image_alt; ?>"></li>
<?php }
}
?>

</ul>
<?php $button_url = get_post_meta($post_id,"button_url",true); ?>
<a class="banner-black-btn" href="<?php if($button_url){echo '$button_url'; } else{ echo '#'; } ?>"><?php echo get_post_meta($post_id,"button_text",true); ?></a>

</div>

<div class="banner-text-bottom">
<h2><?php echo get_post_meta($post_id,"banner_desription",true); ?></h2>

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
<div class="opportunities thr-btn-main">
    
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
<li><a href="#packages" >View Packages</a></li> 
</ul>      
</div>
</div> <!-- End Show the Category Name and it's posts -->
<?php 
if($post_id==96){ $main=' lubri-main'; }
else{$main='';}
?>
<div class="row conditioning-repairs <?php echo $main; ?>">
<div class="col-xs-12 col-md-8 col-sm-8">
<div class="tab-content">
<div id="battery-services" class="tab-pane fade in active clutch-repair">
<?php echo get_the_content(); ?>
</div> <!--subaru-air-conditioning-repairs Close-->
</div>
</div> <!--col-md-8--->
<div class="col-xs-12 col-md-4 col-sm-4">
<?php get_sidebar('services'); ?>
</div> <!--col-md-4--->
</div>

<?php get_sidebar('three_buttons'); ?>
</div> <!--opportunities Close-->
</div>


<div class="subaroo-log-book">
<div class="container">
<h2><span style="color:#0080fd;">SUBARU</span><br>
LOG BOOK <br>
CHANGES
</h2> 
<?php echo get_post_meta($post->ID,"subaru_log_book_changes",true); ?>

<div class="log-book-tabbing">

<!-- Nav tabs -->
<ul role="tablist" class="nav nav-tabs">
<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="Models1991" href="#Models1991">Subaru Models From 1991 to 2005</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="models-present" href="#models-present">Subaru Models From 2006 to present</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div id="Models1991" class="tab-pane active" role="tabpanel">
<ul role="tablist" class="nav nav-tabs">
<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="general" href="#general">General <br> information </a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="log-flip" href="#log-flip">Log Flip <br> Book</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="suitable-models" href="#suitable-models">Suitable Models <br> &amp; Engines</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="manufacturer" href="#manufacturer">Manufacturer Suggested <br> servicing schedule</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="servicing-schedule" href="#servicing-schedule">ADS Suggested <br> servicing schedule</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div id="general" class="tab-pane active" role="tabpanel">
<?php echo get_post_meta($post->ID,"general_information",true); ?>
</div> <!--tab-pane-->

<div id="log-flip" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"log_flip_book",true); ?>
</div>

<div id="suitable-models" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"suitable_models_engines",true); ?>
</div>

<div id="manufacturer" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"manufacturer_suggested_servicing_schedule",true); ?>
</div>

<div id="servicing-schedule" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"ads_suggested_servicing_schedule",true); ?>
</div>
</div>


</div> <!---tab-pane close--->
<div id="models-present" class="tab-pane" role="tabpanel"> 
<ul role="tablist" class="nav nav-tabs">
<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="general1" href="#general1">General <br> information </a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="log-flip1" href="#log-flip1">Log Flip <br> Book</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="suitable-models1" href="#suitable-models1">Suitable Models <br> &amp; Engines</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="manufacturer1" href="#manufacturer1">Manufacturer Suggested <br> servicing schedule</a></li>
<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="servicing-schedule" href="#servicing-schedule">ADS Suggested <br> servicing schedule</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div id="general1" class="tab-pane active" role="tabpanel">
<?php echo get_post_meta($post->ID,"general_information_subaru",true); ?>

</div> <!--tab-pane-->

<div id="log-flip1" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"log_flip_book_subaru",true); ?>
</div>

<div id="suitable-models1" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"suitable_models_&_engines_subaru",true); ?>
</div>

<div id="manufacturer1" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"manufacturer_suggested_servicing_schedule_subaru",true); ?>  
</div>

<div id="servicing-schedule1" class="tab-pane" role="tabpanel">
<?php echo get_post_meta($post->ID,"ads_suggested_servicing_schedule_subaru",true); ?>  
</div>
</div>

</div> <!--tab-pane-->

</div>

</div> <!---log-book-tabbing-section--->

</div>
</div>


<div class="subaroo-six-star">
<h2>All Drive Subaroo Six Star Subaru Service</h2>
<div class="container">  
<div class="row subaroo-six-stars">
<div class="col-sm-6 col-md-4 prevention"> 
<h4><?php echo get_post_meta($post->ID,"prevention_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"prevention_description",true); ?>
</div> <!---col-sm-6 col-md-4--->

<div class="col-sm-6 col-md-4 independent"> 
<h4><?php echo get_post_meta($post->ID,"independent_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"independent_description",true); ?>

</div> <!---col-sm-6 col-md-4--->

<div class="col-sm-6 col-md-4 good-servicing"> 
<h4><?php echo get_post_meta($post->ID,"good_servicing_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"good_servicing_description",true); ?>
</div> <!---col-sm-6 col-md-4--->

<div class="col-sm-6 col-md-4 proactive"> 
<h4><?php echo get_post_meta($post->ID,"proactive_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"proactive_description",true); ?>
</div> <!---col-sm-6 col-md-4--->

<div class="col-sm-6 col-md-4 best-admin"> 
<h4><?php echo get_post_meta($post->ID,"best_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"best_description",true); ?>
</div> <!---col-sm-6 col-md-4--->

<div class="col-sm-6 col-md-4 knowledge-pool"> 
<h4><?php echo get_post_meta($post->ID,"knowledge_title",true); ?></h4> 
<?php echo get_post_meta($post->ID,"knowledge_description",true); ?>
</div> <!---col-sm-6 col-md-4--->

</div>  <!--row Close-->
</div> <!--container-->
</div>
<!-- Appointment Form -->
<div class="conditioning-service-package log-book" id="packages">
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
$args = array( 'post__in'=>$pack_uns, 'post_type' =>'packages','order'=> 'ASC','posts_per_page'   => -1 );
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
<?php get_sidebar('appointment'); ?>

<?php get_sidebar('online_store'); ?> <!-- Show products-->
<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>

