<?php
/* Template Name: Thankyou Page
 */
get_header();

global $post;
while (have_posts()) : the_post(); 
?>
<div class="thanku-banner">
<div class="container">
<div class="thanku-banner-inner">
<div class="row">
<div class="col-md-7">
<div class="thanku-banner-text">
<?php echo get_the_content(); ?>
</div>
    
</div>
<div class="col-md-5">
<?php echo get_the_post_thumbnail(get_the_ID(),'full'); ?>
</div>

</div>

</div>
</div>

</div>

<?php 
 endwhile; 
get_sidebar('brands');
get_footer();
?>