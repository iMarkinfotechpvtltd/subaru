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
<div class="banner banner-inner-service" style="background-image:url(<?php echo $url;?>);<?php echo $background; ?>">
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
$image_alt = get_post_meta($banner_small, '_wp_attachment_image_alt', true);
$small_url = $small_image[0]; ?>
<li><img class="img-responsive" src="<?php echo $small_url; ?>" alt="<?php echo $image_alt; ?>"></li>
<?php }
}
?>

</ul>

<?php $button_url = get_post_meta($post_id,"button_url",true); ?>
<a class="banner-black-btn" href="<?php if($button_url){echo $button_url; } else{ echo '#'; } ?>"><?php echo get_post_meta($post_id,"button_text",true); ?></a>

</div>

<div class="banner-text-bottom">
<h2><?php echo get_post_meta($post_id,"banner_desription",true); ?></h2>

</div>

</div>


 </div> 
<!--- Banner Section End here ---->
<div class="clearfix"></div>

<?php get_sidebar('search'); ?> 
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
<li><a href="#appointment-main">Book Your Service</a></li>    
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
<?php 
$contid[]=array(96 => "battery-services", 97 => "clutuch-replacement", 98 => "battery-services", 99 => "brake-repair", 100 => "wheel-bearing-repair", 101 => "cv-shaft-repair", 102 => "battery-services", 103 => "shock-absorbers", 104 => "bushes-and-links", 105 => "battery-services", 106 => "battery-services", 107 => "power-window-repair", 108 => "battery-services", 109 => "door-mirrors-repair", 110 => "air-re-gas");

$contclass[]=array(95 => "subaru-air-conditioning-repairs", 96 => "subaru-air-conditioning-repairs", 98 => "clutch-repair transpCV", 101 => "clutch-repair transpCV", 103 => 'clutch-repair', 104 => "clutch-repair", 106 => "clutch-repair", 107 => "clutch-repair", 109 => "clutch-repair", 110 => "subaru-air-conditioning-repairs");

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
<div class="col-xs-12 col-md-4 col-sm-4">
<?php get_sidebar('services'); ?>
</div> <!--col-md-4--->
</div>

<?php get_sidebar('three_buttons'); ?>
</div> <!--opportunities Close-->
</div>

<?php
$show= get_post_meta($post->ID,"show_info",true);
if($show )
{
$auth_img=get_post_meta($post->ID,"author_image",true);
$image_alt = get_post_meta( $auth_img, '_wp_attachment_image_alt', true);

$auth_dec=get_post_meta($post->ID,"author_info",true);
$tool_img=get_post_meta($post->ID,"tool_image",true);
$image_alt1 = get_post_meta( $tool_img, '_wp_attachment_image_alt', true);

?>
<div class="clutch-norrie-andreson">
<div class="container">
<div class="row">
<div class="col-md-3">
<?php  if($auth_img){ ?>
<img alt="<?php echo $image_alt; ?>" src="<?php echo wp_get_attachment_url($auth_img); ?>">
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
<img alt="..." src="<?php echo wp_get_attachment_url($tool_img); ?>" alt="<?php echo $image_alt1; ?>">
<?php } ?>
</div>
</div> <!--row close-->
</div> <!--container-fluid-->
</div>
<?php } ?>

<div class="malfunction-gray">
<div class="container">
<h3><?php echo get_post_meta(get_the_ID(),"malfunction_codes_title",true); ?></h3>
<?php echo get_post_meta(get_the_ID(),"malfunction_codes_description",true); ?>

</div>
</div>

<div class="malfunction-search-cover">
<div class="container">
<h3>Subaru Malfunction &amp;  Error Codes</h3>

<div class="malf-search">
<form role="form" class="form-inline pull-left" action="" method="post" onsubmit="return malfsearch();" id="malfunction-search">
<div class="form-group">
<label>SEARCH by CODE</label>
<input type="text" name="malfunction-code" class="form-control" id="malfunction-code">
</div>
</form> 
<form role="form" class="form-inline pull-left" action="" method="post" onsubmit="return malfname();" id="malfname">    
<div class="form-group">
<label>SEARCH BY NAME</label>
<input type="text" name="malfunction-name" class="form-control" id="malfunction-name">
</div>
</form>    


<div class="pull-right adv-srch">
<p><a href="#">advanced search </a></p>

</div>

</div>

<div class="clearfix"></div>

<div class="malf-list" id="malf-list">
 <div class="loader"></div>    
<?php 
$args=array( 'post_type' => 'malfunction',
    'order' => 'ASC',
    'showposts' => -1,
    );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
echo '<ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
echo '<li><a href="#">' .get_post_meta(get_the_id(),"error_code",true).' '. get_the_title() . '</a></li>';
}
echo '</ul>';
/* Restore original Post Data */
wp_reset_postdata();
} 
?>
</div>



</div>

</div>

<!-- Appointment Form -->
<?php get_sidebar('appointment'); ?>

<?php get_sidebar('online_store'); ?> <!-- Show products-->
<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>

