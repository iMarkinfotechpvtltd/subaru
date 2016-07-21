<div class="client-logo-sec">
<div class="container">
<?php 
$args = array('post_type' => 'brand', 'posts_per_page' => 15);
$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
$the_query->the_post();
$link= get_post_meta(get_the_ID(),'client_link',true); 
?>
<div class="client-logo-list">
<a href="<?php if($link){ echo $link; } else { echo 'javascript:void(0);'; } ?>" target="_blank"><?php echo get_the_post_thumbnail(); ?></a>
</div>    
<?php    
}
/* Restore original Post Data */
wp_reset_postdata();
} 
?>
</div>
</div>