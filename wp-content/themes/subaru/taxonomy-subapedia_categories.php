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
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
if($term->term_id==41)
{ ?>
<div class="banner-caption">
<div style="position:static;" class="container">
<div class="row">
<div class="col-md-6">
<?php echo get_field('banner_caption_text', $term->taxonomy.'_'.$term->term_id);
?>
</div> <!--col-sm-->
<div class="col-sm-5">
<?php 
$banner_cap= get_field('banner_caption_image', $term->taxonomy.'_'.$term->term_id);
if($banner_cap)
{
?>
<img alt="subaroo" src="<?php echo $banner_cap; ?>">
<?php } 
?>
</div>
</div> 
</div>
</div>
<?php }
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
<li><a href="<?php echo get_term_link($term->term_id,'subapedia_categories'); ?>"><?php echo $term->name; ?></a></li>
</ol>
</div>

<h2><?php echo $term->name; ?></h2> 

<div class="row mk00">
<div class="col-xs-12 col-md-7">   
<?php
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( 
array(
'order'         => 'asc',
'post_type'     => 'subapedia',
'paged'=> $paged,
'tax_query' => array(
array(
'taxonomy' => 'subapedia_categories',
'field'    => 'term_id',
'terms'    => array( $term->term_id ),
),
),    
)
);
if($query->have_posts())
{
// Start the Loop.
while ( $query->have_posts() ) : $query->the_post();

/*
 Include the Post-Format-specific template for the content.
 If you want to override this in a child theme, then include a file
 called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part( 'template-parts/content', 'subapedia' );

// End the loop.
endwhile;
wp_reset_postdata();
/* Pagination */
if (function_exists("pagination")) {
pagination($query->max_num_pages);
} 
/* End Pagination */
}
else{ // If no content, include the "No posts found" template.
get_template_part( 'template-parts/content', 'none' );    
}
?>
<div class="row mk11">
<div class="col-xs-12 col-sm-4">
<button class="btn btn-default btn-quote quote" type="button">Get A Quote</button>
</div> <!--col-xs-12 col-sm-4-->
<div class="col-xs-12 col-sm-4">
<a class="btn btn-default btn-quote helpline" href="tel:+(02) 9915 9900">(02) 9915 9900</a>
</div> <!--col-xs-12 col-sm-4--> 
<div class="col-xs-12 col-sm-4">
<a class="btn btn-default btn-quote helpline" href="tel:+0414 821 427">0414 821 427</a>
</div> <!--col-xs-12 col-sm-4-->
</div>  
</div> <!--col-xs-12 col-md-7--->

<?php get_sidebar('subapedia'); ?>
</div> <!--row-->

</div> <!--opportunities Close-->
</div>

<?php get_sidebar('latest_posts'); ?> <!-- Latest Posts -->
<?php get_sidebar('subapedia_slider'); ?> <!-- Subapedia Slider -->
<?php get_sidebar('departments'); ?> <!-- Four Listing Departments -->
<?php get_sidebar('testimonials_slider'); ?> <!-- Testimonials Slider -->
<?php get_sidebar('leave_reply'); ?>


<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>
<!--<script>
jQuery(document).ready(function () {
jQuery('#page_val').val();
});

function pagination() {
jQuery('#loading_sec').show();
jQuery('.load_more').hide();
var page_val = jQuery('#page_val').val();
var page_val1 = parseInt(page_val) + 1;
jQuery.ajax({
type: "GET",
url: "<?php //echo get_stylesheet_directory_uri(); ?>/ajax/latest-posts.php",
data: {
page_val1: page_val1,
format: 'raw'
},

success: function (resp) {
if (resp != "") {
jQuery("#loading_sec").hide();
jQuery(resp).insertAfter(jQuery('.latestposts .container>div.row.latestfirst:last')).fadeIn('slow');
jQuery('#page_val').val(page_val1);

} else if (resp == "") {
jQuery("#loading_sec").hide();
jQuery(".load_more").hide();
}
}
});

}
</script>-->