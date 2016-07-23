<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<?php
$term=get_queried_object();
$url= get_field('banner_image', $term->taxonomy.'_'.$term->term_id);

if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);background-position:center center;">
<?php
}
else
{
?>
<div style="background-image:url(http://www.alldrivesubaru.com.au/wp-content/uploads/2016/07/testimonial-slide-1920x725.jpg);background-position:72% 50%;" class="banner">
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
<div class="testimonial-breadcrumb breadcrumb-container">
<ol class="breadcrumb">
<li><a href="<?php echo site_url(); ?>">Home</a></li>
<li class="active">Testimonials</li>
</ol>
</div>

<h2><?php echo $term->name; ?></h2> 

<div class="testimonial-main">
<div class="tab-content">  
<div id="menu0" class="tab-pane fade in active">    
<?php
$i=0;
$k=0;
if ( have_posts() ) 
{
// Start the Loop.
while ( have_posts() ) : the_post();
$id=get_the_ID();
?>
<article>
<div class="testimonial-inner">
<div class="testimonial-slider">
<div id="myCarouseltestimonial<?php echo $k.$i; ?>" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarouseltestimonial<?php echo $k.$i; ?>" role="button" data-slide="prev">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</a>
<a class="right carousel-control" href="#myCarouseltestimonial<?php echo $k.$i; ?>" role="button" data-slide="next">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</a>

<?php
if( have_rows('slides') ):
$j=1;
while ( have_rows('slides') ) : the_row();
$slide_id=get_sub_field('slide'); 
$slide_image = wp_get_attachment_image_src($slide_id,'full');
$slide_url = $slide_image[0];
if($j==1){ $clas=' active'; } else{ $clas=''; }
?>
<div class="item <?php echo $clas; ?>" style="background-image:url('<?php echo $slide_url; ?>');"></div>
<?php 
$j++;
endwhile;
endif; ?>
</div>

<div class="content">
<ol class="carousel-indicators ">
<?php
if( have_rows('slides') ):
$j=1;
while ( have_rows('slides') ) : the_row();
$slide_id=get_sub_field('slide'); 
$slide_image = wp_get_attachment_image_src($slide_id,'full');
$slide_url = $slide_image[0];
if($j==1){ $clas=' active'; } else{ $clas=''; }
?>
<li data-target="#myCarouseltestimonial<?php echo $k.$i; ?>" data-slide-to="<?php echo $j-1; ?>" class="<?php echo $clas; ?>" style="background-image:url('<?php echo $slide_url; ?>');"></li>
<?php 
$j++;
endwhile;
endif; ?>
</ol>
</div>
</div>
</div>
<div class="testimonial-descp">
<div class="tittle-date"><h3><?php echo get_the_title(); ?></h3> 
<div class="date-calender"><?php echo get_the_date('m/d/Y'); ?></div>
</div> <!--tittle-date-->

<h4><?php echo get_post_meta($id,"client_role",true); ?></h4>
<?php $test_id=get_the_ID(); ?>
<div id="testimonial-cont<?php echo $test_id; ?>">
<?php 
$parent="menu$k";
echo get_excerpt_test(75,$test_id,$parent); ?>
</div>
<div class="tags-section">
<h5>Tags :</h5>
<?php echo get_the_term_list( $id, 'tags_testimonial', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
</div> 
</div>
</div>
</article>
<?php 
// End the loop.
$i++;
endwhile;
wp_reset_postdata();
}
else{ // If no content, include the "No posts found" template.
get_template_part( 'template-parts/content', 'none' );    
}
?>
 
</div>
</div>
</div>    
</div> <!--col-xs-12 col-md-7--->
</div>

<div class="clearfix"></div>

<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>

