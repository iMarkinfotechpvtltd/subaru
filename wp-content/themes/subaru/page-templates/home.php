<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?> 
<?php  
global $post;
while (have_posts()) : the_post(); 
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'Home_page_banner' );
$urla = $thumb['0'];
if(!empty($urla)) 
{
?>
<div class="banner" style="background-image:url(<?php echo $urla;?>">
<?php
}
else
{
?>
<div class="banner" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner.jpg)">
<?php 
}
?>


<div class="container">
<div class="banner-inner">
<?php the_field('banner_title'); ?> 
<div class="banner-text wow slideInLeft" data-wow-duration="1.5s">
<?php echo substr(($post->post_content), 0, 610);?>
</div>
</div>
</div>
</div>
<?php endwhile; ?>
<div class="clearfix"></div>

<div class="main-search-sec">
<div class="container">
<div class="main-search wow bounceInUp" data-wow-duration="2s">
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

<?php get_sidebar('departments'); ?>  
<div class="why-choose-subaru">
<div class="container">
<h2><?php the_field('why_choose_all_drive',4); ?></h2> 

<div class="row">
<?php 
global $post;
query_posts('post_type=whychoosesubaroo&showposts=9&order=ASC&orderby=post_date');
$i=1;
while (have_posts()) : the_post(); 
$post_id=$post->ID;
?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="why-choose-subaru-list wow slideInUp" data-wow-duration="1.2s">
<div class="why-choose-subaru-list-left"> 
<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'whychoosesubaroo_image' );
$urlas = $thumb['0'];
if(!empty($urlas)) 
{
?>
<img src="<?php echo $urlas;?>" class="img-responsive">
<?php
}
else
{
?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-choose-subaru-icon-1.png" class="img-responsive">
<?php
}
?></div>
<div class="why-choose-subaru-list-right">
<h4><?php the_title();?></h4>
<p><?php the_content();?></p>
</div>
</div>
</div>
<?php endwhile; ?> 
</div>
</div>
</div>

<div class="news-art-sec">
<div class="container">
<div class="news-art-heading">
<div class="news-art-left-hd">
<h2>News & Subapedia articles</h2>
</div>
<div class="news-art-right-hd">
<a href="<?php echo get_term_link(40,'subapedia_categories'); ?>">More News & Articles <i class="fa fa-angle-right" aria-hidden="true"></i> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
</div>
</div>

<div class="row">
<?php 
global $post;
$args=array(
'order'         => 'desc',
'post_type'     => 'subapedia',
'showposts' =>6,    
'tax_query' => array(
array(
'taxonomy' => 'subapedia_categories',
'field'    => 'term_id',
'terms'    => array( 40 ),
),
),    
);
query_posts($args);
$i=1;
while (have_posts()) : the_post(); 
$post_id=$post->ID;
?>

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="news-art-list">
<div class="news-art-list-left">
<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'news_image' );
$urs = $thumb['0'];
if(!empty($urs)) 
{
?>
<img src="<?php echo $urs;?>" class="img-responsive">
<?php
}
else
{
?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-artical-img-1.jpg" class="img-responsive">
<?php
}
?>
</div>
<div class="news-art-list-right">
<h5><?php the_title();?></h5>
<?php echo get_excerpt(28,'...'); ?>
<a href="<?php the_permalink(); ?>" class="news-art-btn">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>  
</div>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
</div>
</div>

<?php get_sidebar('testimonials_slider'); ?>
<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer();?>
