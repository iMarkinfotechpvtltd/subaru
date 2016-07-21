<?php
include('../../../../wp-config.php');
?>
<div class="row latestfirst">
<?php
$display_count=3;
$offSet=$_GET['page_val1'];
$offSet = ( $offSet - 1 ) * $display_count; 
?>
<?php
query_posts( array ( 'post_type' => 'subapedia', 
'order'=> 'DESC',
'posts_per_page'=>$display_count,
'offset'=>$offSet,
'tax_query' => array(
array(
'taxonomy' => 'subapedia_categories',
'field'    => 'term_id',
'terms'    => array( 41 ),
'operator' => 'NOT IN',
),
),
    
)
 ); 

while ( have_posts() ) : the_post();
$post_id=get_the_ID();	?>
<div class="col-xs-12 col-md-4">
<?php echo get_the_post_thumbnail($post_id,'latest_posts'); ?>
<div class="blog-tittles">
<h3><?php echo get_the_title($post_id); ?></h3>
<p><?php echo get_excerpt(250); ?></p>
<a href="<?php echo get_the_permalink(); ?>">Read More...</a>
</div>
</div> 

<?php
endwhile;
?>
</div>