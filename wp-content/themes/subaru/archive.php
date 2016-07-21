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

<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
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
<?php if ( have_posts() ) : ?>

<!--<header class="page-header">-->
<?php
the_archive_title( '<h2>', '</h2>' );
//the_archive_description( '<div class="taxonomy-description">', '</div>' );
?>
<!--</header> .page-header -->

<?php
// Start the Loop.
while ( have_posts() ) : the_post();

/*
* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part( 'template-parts/content', get_post_format() );

// End the loop.
endwhile;

// Previous/next page navigation.
the_posts_pagination( array(
'prev_text'          => __( 'Previous page', 'twentysixteen' ),
'next_text'          => __( 'Next page', 'twentysixteen' ),
'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
) );

// If no content, include the "No posts found" template.
else :
get_template_part( 'template-parts/content', 'none' );

endif;
?>
</div>
</div>    

<?php get_footer(); ?>
