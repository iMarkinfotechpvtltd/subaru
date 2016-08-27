<div class="all-subro-operates">
<div class="container">
<h3><?php the_field('four_departments_title',4); ?></h3>

<div class="row">
<?php 
global $post;
query_posts('post_type=departments&showposts=4&order=ASC');
$i=1;
while (have_posts()) : the_post(); 
$post_id=$post->ID;
?>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="all-subro-operates-list <?php  if($i==1){echo "service-rep-sec";} else if($i==2){echo "subaru-engines-sec";} else if($i==3){ echo "subaru-transmissions-sec";}else if($i==4){ echo "new-used-parts-sec";}else {echo "service-rep-sec";}?> wow slideInLeft" data-wow-duration="<?php  if($i==1){echo "1.2s";} else if($i==2){echo "1.4s";} else if($i==3){ echo "1.6s";}else if($i==4){ echo "1.8s";}else {echo "1.2s";}?>">
<div class="all-subro-operates-heading">
<h4><?php the_title();?></h4></div>
<div class="all-subro-operates-list-img"> 
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'departments_image' );
$image_alt = get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);

$url = $thumb['0'];
if(!empty($url)) 
{
?>
<img src="<?php echo $url;?>" class="img-responsive" alt="<?php echo $image_alt; ?>">
<?php
}
else
{
?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/all-subro-operates-img-1.jpg" class="img-responsive" alt="subaru-engine">
<?php    
}
?>
</div>
<?php the_content();?> 

</div>
</div>
<?php $i++; endwhile; 
wp_reset_postdata();
?>
</div>

</div>
</div>

