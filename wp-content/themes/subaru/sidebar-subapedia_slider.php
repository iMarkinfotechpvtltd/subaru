<div id="carousel-example-generic" class="carousel slide team-carousel" data-ride="carousel">

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php
$args=array(
'showposts' => -1,
'post_type' => 'team',
);
$the_query = new WP_Query( $args );
$k=1;
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) {
$the_query->the_post();
if($k==1){$active='active';}else{$active='';}
?>
<div class="item <?php echo $active; ?>">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-4 col-xs-12">
<?php $team_id= get_the_ID();
$meta_id = get_post_meta($team_id,"team_member_slider",true);

$image = wp_get_attachment_image_src($meta_id ,'full');
$image_alt = get_post_meta( $meta_id, '_wp_attachment_image_alt', true);

$url = $image[0];
if($url!="") 
{
?>
<img src="<?php echo $url ; ?>" alt="<?php echo $image_alt; ?>">
<?php
}
else{ ?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=No Image&w=350&h=300" alt="<?php the_title();?>">
<?php } ?>
</div>
<div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4 col-xs-12">
<h2><?php the_title(); ?></h2>
<h4><?php the_field('designation'); ?></h4>
<?php the_content(); ?>

<button class="btn btn-default btn-read" type="button">Meet the team</button>
</div>
</div>
</div> <!--row-->
</div> <!--item Close-->
<?php 
$k++;
}
/* Restore original Post Data */
wp_reset_postdata();
}  ?>

</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div> <!--team-carousel close-->