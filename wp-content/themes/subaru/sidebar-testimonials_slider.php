<div class="engine-testi-cvr home-testi-cvr">
<div class="container">
<h1>what our clientS say about us</h1>
<div class="engine-testi-tab-btn">
<ul class="nav nav-pills">
<?php

$args=array(
'taxonomy' => 'testimonial_categories',
'orderby' => 'name',
'order' => 'desc'						
);

$categories=get_categories($args);
$k=1;
foreach($categories as $cat) {  
if($k==1){ $id="service"; $k=0; }  
else{$id='';}
?><li><a href="javascript:void(0);" id="<?php echo $id ?>" class="link" onclick="get_record('<?php echo $cat->cat_ID; ?>');"><?php echo $cat->cat_name;?></a></li> 
<?php } ?>
</ul> 
</div>
<div class="tab-content">
<div class="tab-pane fade active in" id="home">   
<div id="engine-testi">
<?php
echo $thecatid = get_query_var('cat'); echo $thecatid;
global $post;
query_posts('post_type=testimonial&showposts=15&cat='.$thecatid.'order=asc');
$i=1;
?> 
<?php while (have_posts()) : the_post(); ?>
<div class="item">
<div class="engine-testi-text">
<?php echo get_excerpt(220).'...'; ?>
<div class="engine-testi-name">
<h4><?php echo get_the_title();?> </h4>
<p><?php the_field('client_role'); ?></p>
</div>
</div>
</div>
<?php endwhile;
wp_reset_postdata();
?>
</div>

<div class="text-center">
<a href="<?php echo get_permalink(85); ?>" class="testi-btn">View More TESTIMONIALS</a>
</div>
</div>    
</div>

</div>
</div>
