<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php 
while ( have_posts() ) : the_post();
global $postid;
$postid = get_the_ID();
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'full');
$url = $image[0];
if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);background-position: center center;">
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

<div class="clearfix"></div>

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
<div class="col-xs-12 col-md-7 news-section">
 <div class="author-post-headding">
<?php $post_title=get_post_meta($post->ID,"author_post_heading",true);  
if($post_title){echo $post_title;}
?>
</div>    
<?php echo get_the_post_thumbnail(get_the_ID(),'subapedia_images'); ?>  
<?php echo get_the_content(); ?>
</div> <!--col-xs-12 col-md-7--->

<?php get_sidebar('subapedia'); ?>
</div> <!--row-->



</div> <!--opportunities Close-->
</div>
<div class="repair-dpf">
<div class="container">
<div class="row">
<div class="col-xs-12 col-md-4"> 
<?php 
$imgsrc11= get_post_meta($post_id,"pdf_image",true); 
$pdf_src = wp_get_attachment_image_src($imgsrc11,'full');
$imgsrc = $pdf_src[0];
if($imgsrc)
{ ?>
<img src="<?php echo $imgsrc; ?>">      
<?php }
else{ ?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=442&h=434">    
<?php }
?>
    
</div>
<div class="col-xs-12 col-md-8">
<?php echo get_post_meta($post_id,"pdf_description",true); ?>
</div>
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12 col-sm-4">
<button type="button" class="btn btn-default btn-quote quote">Get A Quote</button>
</div> <!--col-xs-12 col-sm-4-->
<div class="col-xs-12 col-sm-4">
<a href="tel:+(02) 9915 9900" class="btn btn-default btn-quote helpline">(02) 9915 9900</a>
</div> <!--col-xs-12 col-sm-4--> 
<div class="col-xs-12 col-sm-4">
<a href="tel:+0414 821 427" class="btn btn-default btn-quote helpline">0414 821 427</a>
</div> <!--col-xs-12 col-sm-4-->
</div>
</div> 
</div> <!--row Close-->
</div>
</div>
<?php endwhile; ?>
<?php get_sidebar('latest_posts'); ?> <!-- Latest Posts -->
<?php get_sidebar('subapedia_slider'); ?> <!-- Subapedia Slider -->
<?php get_sidebar('departments'); ?> <!-- Four Listing Departments -->
<?php get_sidebar('testimonials_slider'); ?> <!-- Testimonials Slider -->

<?php get_sidebar('leave_reply'); ?>

<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->
<?php get_footer(); ?>