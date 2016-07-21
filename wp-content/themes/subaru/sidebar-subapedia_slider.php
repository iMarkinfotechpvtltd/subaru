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
<div class="col-md-5">
<?php if(get_the_post_thumbnail()){ echo get_the_post_thumbnail(get_the_ID(),'team_slider');}
else{ ?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=No Image&w=350&h=300" alt="<?php the_title();?>">
<?php } ?>
</div>
<div class="col-md-7 col-md-offset-5">
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