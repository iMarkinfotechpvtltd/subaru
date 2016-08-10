<div class="latestposts">
<div class="container">
    
<h2>Latest Posts</h2>
<!--<p>Soluta consequat no has. Has ex deleniti consulatu, tamquam interpretaris sit ex <br>
no has. Has ex deonsul vivendum ullamcorper et his.</p>-->
<div class="row latestfirst">
<?php 
$k=1;
$args = array('post_type' => 'subapedia',
'posts_per_page' => 3,
'order'        => 'DESC',
'offset'       =>  0,
'tax_query' => array(
array(
'taxonomy' => 'subapedia_categories',
'field'    => 'term_id',
'terms'    => array( 41 ),
'operator' => 'NOT IN',
),
),    
);

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

while ( $the_query->have_posts() ) {
$the_query->the_post(); 
$post_id=get_the_ID();
?>
<div class="col-xs-12 col-md-4">
<?php echo get_the_post_thumbnail($post_id,'latest_posts'); ?>
<div class="blog-tittles">
<h3><?php echo get_the_title($post_id); ?></h3>
<p><?php echo get_excerpt(55); ?></p>
<a href="<?php echo get_the_permalink(); ?>">Read More...</a>
</div>
</div> <!--col-md-4-->
<?php 
$k++;
}
wp_reset_postdata();
}  

?>
</div> <!--row Close-->

<div class="row">
<!--<div id="loading_sec" style="display:none" align="center">
<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/loader.gif" id="loader">
</div>-->
<!--<input type="hidden" name="page_val" id="page_val" value="1">-->
<!--<div class="col-xs-12"><a class="custom bg bg_grn inner_pages loadmore" onclick="pagination();"><span class="plus-btn"><i class="mor-plus"></i></span></a><hr></div>    -->
<div class="col-xs-12"><a class="custom bg bg_grn inner_pages loadmore"><span class="plus-btn"><i class="mor-plus"></i></span></a><hr></div>
</div>  

</div>
</div>  <!--latest-post-->

