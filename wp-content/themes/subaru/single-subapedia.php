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
get_template_part( 'template-parts/content', 'single_subapedia' );
// End of the loop.
endwhile;
?>
<?php get_sidebar('latest_posts'); ?> <!-- Latest Posts -->
<?php get_sidebar('subapedia_slider'); ?> <!-- Subapedia Slider -->
<?php get_sidebar('departments'); ?> <!-- Four Listing Departments -->
<?php get_sidebar('testimonials_slider'); ?> <!-- Testimonials Slider -->

<div class="container">
<div class="reply-form">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<?php    
        //Gather comments for a specific page/post 
        $comments = get_comments(array(
            'post_id' => $postid,
            'status' => 'approve' //Change this to the type of comments to be displayed
        ));

        //Display the list of comments
        wp_list_comments(array(
            'per_page' => 10, //Allow comment pagination
            'reverse_top_level' => false //Show the latest comments at the top of the list
        ), $comments);
        
comment_form( $comments, $postid );
    ?>
</div> 
</div>
</div> <!--reply-form-->
</div>

<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->
<?php get_footer(); ?>
