<script>
jQuery(document).ready(function () {

jQuery("#engine-testi-inner").owlCarousel({

autoPlay: 3000, //Set AutoPlay to 3 seconds

items: 2,
itemsDesktop: [1199, 2],
itemsDesktopSmall: [979, 1]

});
});

</script> 
<?php
$id=$_POST['id'];	 
include('../../../../wp-config.php');
$term = get_term( $id, 'testimonial_categories' );	 
$args = array('post_type' => 'testimonial',
'posts_per_page' => 10,
'tax_query' => array(
array(
'taxonomy' => 'testimonial_categories',
'field' => 'slug',
'terms' => $term->slug,
),
),
);

$loop = new WP_Query($args); 
?>
<div id="engine-testi-inner">
<?php  while($loop->have_posts()) : $loop->the_post(); ?>

<div class="item">
<div class="engine-testi-text">
<?php echo get_excerpt(220).'...'; ?>
<div class="engine-testi-name">
<h4><?php echo get_the_title();?> </h4>
<p><?php the_field('client_role'); ?></p>
</div>
</div>
</div>
<?php  endwhile; ?>
</div>

