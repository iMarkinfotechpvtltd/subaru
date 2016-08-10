<?php 



/* Template Name: home

*/ 

get_header();

?>

<div id="main-carousel" class="carousel slide main-slide wow fadeInUp" data-ride="carousel"> 

 

 <!-- Wrapper for slides -->

 <div class="carousel-inner" role="listbox">

<?php

$args = array('post_type' => 'banner_slider',

'order' => 'ASC');

$loop = new WP_Query( $args );

$i=0;

while ( $loop->have_posts() ) : $loop->the_post();

if($i==0)

{

?>

   <div class="item active"> 

<?php the_post_thumbnail();?>

     <div class="main-carousel-caption">

       <div class="container">

         <h2><?php the_content();?> </h2>

       </div>

     </div>

   </div>

<?php

}

else

{

?>

   <div class="item"> <?php the_post_thumbnail();?>

<div class="main-carousel-caption">

       <div class="container">

         <h2><?php the_content(); ?> </h2>

       </div>

     </div>

   </div>

<?php

}

$i++;

endwhile;

?>

 </div>

 

 <!-- Controls --> 

 <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

<!---main-slide Close--->



<section class="grey-section wow fadeInUp">

 <div class="container">

   <div class="row">

<?php

$img=get_post_meta(5,"section_one_image",true);	

$thumb = wp_get_attachment_image_src($img, 'home_img' );

?>	

     <div class="col-xs-12 col-md-3"> <img src="<?php echo $url=$thumb['0'];?>" alt="..." /> </div>

     <!--col-xs-12-->

     <div class="col-xs-12 col-md-9">

       <div class="content-section">

         <p><?php the_field("section_one",5);?> <a class="read-m" href="">More Details</a></p>

       </div>

       <!--content-section--> 

     </div>

     <!--col-xs-12--> 

   </div>

   <!--row Close--> 

 </div>

 <!--container--> 

</section>

<section class="latest-update">

 <div class="container">
<?php
$arg = array('post_type' => 'post',
 'posts_per_page' => -1,
 'order' => 'DESC');
$loop = new WP_Query( $arg );
while ( $loop->have_posts() ) : $loop->the_post(); 
?>
 <div class="row wow fadeInUp">
     <div class="col-xs-12 col-md-4"><?php the_post_thumbnail();?> </div>
     <!--col-md-3-->
     <div class="col-xs-12 col-md-8">
       <div class="contect-update">
         <h3>LATEST UPDATES</h3>
         <p><?php the_title();?></p>
         <p><?php the_content();?></p>
         <!--<a class="read-more" href="">More Updates</a>--> </div>
     </div>
     <!--col-md-3--> 
   </div>	
<?php
endwhile;
?>
   <!--row--> 

 </div>

 <!--container--> 

</section>

<!--latest-update-->



<?php 

get_footer();

?>  