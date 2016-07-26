<div class="col-xs-12 col-md-4 col-md-offset-1">
<div class="side-bar-section">
<div class="recenta-post"> 
<h3>Recent Posts</h3> 
<ul>
<?php 
$args = array(
'post_type' => 'subapedia',
'orderby' => 'date',
'order'   => 'ASC',
'posts_per_page' => 5     
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
echo '<ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
$id=get_the_ID();
echo '<li><a href="'.get_permalink($id).'">' . get_the_title() . '</a></li>';
}
echo '</ul>';

wp_reset_postdata();
} 
?>
</ul>
</div>
<div class="category-post"> 
<h3>Categories</h3>
<ul>
<?php    
$terms = get_terms( array(
'taxonomy' => 'subapedia_categories',
'hide_empty' => false,
) );
foreach ( $terms as $term ) { 
echo '<li><a href="' . esc_url( get_term_link( $term ) ) .'">' . $term->name . '</a></li>';
}
?>
</ul>
</div>
<?php /*
<div class="category-post"> 
<h3>Recent Comments</h3>
<ul>
<?php
$args = array(
'parent'=>0,   
'post_type' => 'subapedia',
'number' => '5',
'orderby' => 'date',
'order' => 'DESC'
);

$comments = get_comments($args);
foreach($comments as $comment) :
?><li><a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo($comment->comment_content);?></a></li>
<?php endforeach;
?>
</ul>
</div>
*/ ?>
</div> <!--side-bar-section Close-->
</div> <!--col-xs-12 col-md-4 col-md-offset-1-->