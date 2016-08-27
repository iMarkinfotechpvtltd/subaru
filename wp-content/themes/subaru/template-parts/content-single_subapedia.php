<?php
/**
* The template part for displaying single posts
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/
?>

<!--- Banner Section start here ---->
<?php 
if(has_term( 41, 'subapedia_categories', $post_id ))
{ 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_caption_banner_background",true);
$image = wp_get_attachment_image_src($banner,'full');
$url = $image[0];
if($url!="") 
{
?>
<div class="banner banner-inner-service banner-pedia" style="background-image:url(<?php echo $url;?>);background-position: center center;">
<?php
}
else
{
?>
<div class="banner banner-inner-service banner-pedia" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
?>
<div class="banner-caption">
<div style="position:static;" class="container">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<?php echo get_post_meta($post->ID,"banner_caption_text",true); ?>
</div> <!--col-sm-->
</div> 
</div>
</div>
<div class="rob-chris-img"> 
<?php 
$banner_cap= get_post_meta($post->ID,"banner_caption_image",true);
$bann_image = wp_get_attachment_image_src($banner_cap,'full');
$cap_url = $bann_image[0];
if($cap_url)
{
?>
<img alt="subaroo" src="<?php echo $cap_url; ?>">
<?php } 
?>
</div>
</div>    
<?php }
else{ 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_background_image",true);
$image = wp_get_attachment_image_src($banner,'full');
$url = $image[0];
if($url!="") 
{
?>
<div class="banner banner-inner-service banner-pedia" style="background-image:url(<?php echo $url;?>);background-position: center center;">
<?php
}
else
{
?>
<div class="banner banner-inner-service banner-pedia" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}   
    ?>
<div class="container-fluid">
<div class="banner-left">
<h1><?php echo get_post_meta($post->ID,"main_title_subapedia",true); ?></h1>
<h2><?php echo get_post_meta($post->ID,"sub_title_subapedia",true); ?></h2>
</div>
</div>  
</div>
<?php }
?>


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



<div class="container">
<div class="opportunities">

<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<li>Subapaedia</li>
<?php $cat=get_the_terms($post_id, 'subapedia_categories'); 
if($cat){
$cat_id= $cat[0]->term_id;
?>
<li><a href='<?php echo get_term_link($cat_id,'subapedia_categories'); ?>'><?php echo $cat[0]->name; ?></a></li>
<?php } ?>
<li class="active"><?php echo get_the_title(); ?></li>
</ol>
</div>

<div class="particular-steo">  
<h2><?php the_title(); ?></h2> 
<ul class="post-cmts">
<li class="time"><?php echo get_the_date(); ?></li>
<li class="author-name"><?php $fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
echo $fname.' '.$lname;
?></li>
<li class="folder-name"><?php echo get_field('designation', 'user_'.get_the_author_meta('ID')); ?></li>
<li class="commetns"><?php echo get_comments_number(); ?> Comments</li>
</ul>
</div>  
    
<div class="row mk00">
<div class="col-xs-12 col-md-7 col-sm-8 news-section">
 <div class="author-post-headding">
<?php $post_title=get_post_meta($post->ID,"author_post_heading",true);  
if($post_title){echo $post_title;}
?>
</div>    
<?php echo get_the_post_thumbnail(get_the_ID(),'subapedia_images'); ?>    
<?php the_content(); ?>

<div class="row mk11">
<div class="col-xs-12 col-sm-4">
<button type="button" class="btn btn-default btn-quote quote">Get A Quote</button>
</div> <!--col-xs-12 col-sm-4-->
<div class="col-xs-12 col-sm-4">
<a href='tel:+(02) 9915 9900' class="btn btn-default btn-quote helpline">(02) 9915 9900</a>
</div> <!--col-xs-12 col-sm-4--> 
<div class="col-xs-12 col-sm-4">
<a href="tel:+0420 319 049" class="btn btn-default btn-quote helpline">0420 319 049</a>
</div> <!--col-xs-12 col-sm-4-->
</div>  <!--row-->

</div> <!--col-xs-12 col-md-7--->



<?php get_sidebar('subapedia'); ?>
</div> <!--row-->

</div> <!--opportunities Close-->
</div>


