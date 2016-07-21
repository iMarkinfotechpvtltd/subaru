<?php
/**
* Template Name: Test
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?> 
<style>
  .tab-content>.tab-pane {
    visibility: hidden !important;
    height: 0px !important;
    overflow:hidden !important;
}
.tab-content>.active {
    visibility: visible !important;
    height: auto !important;
    overflow: visible !important;
}
</style>
<?php  
global $post;
while (have_posts()) : the_post(); 

$post_id= $post->ID;
$image3 = get_post_meta($post->ID,"banner_image",true);
$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
$url = $aggregate_image[0];

if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>">
<?php
}
else
{
?>
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php 
}
?>
</div>
<?php endwhile; ?>
<div class="clearfix"></div>

<div class="main-search-sec">
<div class="container">
<div class="main-search wow bounceInUp" data-wow-duration="2s">
<form>
<div class="form-group select-in">
<select class="form-control">
<option>Search by category</option>
<option>Engine</option>
<option>Gearbox</option>
<option>Parts</option>
</select>
</div>
<div class="form-group search-in">
<input type="text" class="form-control" placeholder="Search website">
</div>
<button type="submit" class="main-search-btn">search</button>

</form>
</div>
</div>
</div>

<div class="container">
<div class="opportunities">


<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">ABOUT US</li>
</ol>
</div>

<div class="about-section">
<?php the_content();?>

</div>


</div> <!--opportunities Close-->
</div>


<div class="promise-section">
<div class="container">
<div class="row"> 
<div class="col-xs-12 col-sm-8">
<?php echo get_field('about_us_content',65); ?>

</div> <!--col-xs-12-->

<div class="col-xs-12 col-sm-4">
<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'about_inner_image' );
$urs = $thumb['0'];
if(!empty($urs)) 
{
?>
<img alt="<?php the_title();?>" src="<?php echo $urs;?>" class="img-responsive">
<?php
}
else
{
?>
<img alt="<?php the_title();?>" src="https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=562&h=681" class="img-responsive">
<?php
}
?>

</div>
</div> <!--row-->  
</div> <!--container--> 
</div> <!--promise-section Close-->

 

<div class="teams-section">
<div class="container">
<h3>Meet the team</h3>
<p>In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") <br>
is a filler text commonly used to demonstrate the</p>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$args = array(
'type'                     => 'team',
'orderby'                  => 'term_id',
'taxonomy'                 => 'team_categories',
);
$categories = get_categories( $args );
$i=1;
foreach ( $categories as $category )
{

?>
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="headingOne<?php echo $i;?>">
<h4 class="panel-title"> 

<!--   <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
<a href="javascript:void(0)" class="custom-toggle" >
<?php echo $name = $category->name; ?>
</a>
</h4>
</div>
<div id="collapseOne<?php echo $i;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne<?php echo $i;?>">
<div class="panel-body">
<?php 
$posts=get_posts(array(
'showposts' => -1,
'post_type' => 'team',
'tax_query' => array(
array(
'taxonomy' => 'team_categories',
'field' => 'name',
'terms' => array($name))
),
//'orderby' => 'title',
'order' => 'ASC')
);
$j=1;
foreach($posts as $post)
{ setup_postdata( $post ); 
 ?> 	
<div class="img-box">
<div class="image-section">

<?php
$post_id= $post->ID;
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'team_image' );
$urlv = $thumb['0'];
if(!empty($urlv)) 
{
?>

<img src="<?php echo $urlv;?>" alt="<?php the_title();?>" />
<?php
}
else
{
?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=No Image&w=270&h=270" alt="<?php the_title();?>">		
<?php
}
?>
<!--<div class="plus-sign">+</div>-->
<button type="button" class="plus-sign" data-toggle="modal" data-target="#myModal<?php echo $j; ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
<!-- Modal -->
<div id="myModal<?php echo $j; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><?php echo get_the_title($post_id);?></h4>
<span><?php the_field('designation'); ?></span>
</div>
<div class="modal-body">
<div class="left-modal">
<p><?php echo get_the_post_thumbnail($post_id); ?></p>
</div>
<div class="right-modal">
<p><?php echo get_the_content($post_id); ?></p>    
</div>    
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
</div> 
<h4><?php the_title();?></h4>
<p><?php the_field('designation');?></p>
</div>
<?php
$j++;
}

?>		 <!--img-box Close-->

</div>
</div>
</div>
<?php
$i++;
}
?>
</div> 	  

</div>
</div>

<?php get_sidebar('departments'); ?> 

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
$inc=1;
foreach($categories as $cat) {  
if($inc==1){ $class=" class='active'"; } else{$class='';}
?>
<li <?php echo $class; ?>><a href="#menu<?php echo $inc; ?>" class="link" data-toggle="pill"><?php echo $cat->cat_name;?></a></li> 
<?php 
$inc++;
} ?>
</ul>
</div>

<div class="tab-content">
<div id="menu1" class="tab-pane fade in active">
<div class="owl-carousel">
<div id="engine-testi">

<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>
</div>

<div class="text-center">
<a href="#" class="testi-btn">View More TESTIMONIALS</a>
</div>
</div>
</div>
<div id="menu2" class="tab-pane fade active in">
 <div class="owl-carousel">   
<div id="engine-testi">

<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>


<div class="item">
<div class="engine-testi-text">
<p>Hi Niazi, Just wanted to take a minute to thank you for the work done on my Forester. I'll be forwarding your workshop details to anybody and everybody I know who has a Subaru. My work contact details are listed in the signature of this email. If you ever need any help with computers, networks, websites and databases, let me know. </p>

<div class="engine-testi-name">
<h4>Michael Zagami </h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>

<div class="item">
<div class="engine-testi-text">
<p>Hi ADS guys! Thanks for getting me back on the road so fast. I’ve had this car for three years, and it’s never gone as well as it does now--can’t hear it running in traffic, and it just eats hills. Getting your reconditioned 2.5 liter engine was the best decision I’ve ever made. It’s lIke having a new car, only cheaper. </p>

<div class="engine-testi-name">
<h4>Joanna Doe</h4>
<p>Client Role (If any)</p>
</div>

</div>
</div>



</div>

<div class="text-center">
<a href="#" class="testi-btn">View More TESTIMONIALS</a>
</div>
</div>    
</div>
<div id="menu3" class="tab-pane fade">

</div>
<div id="menu4" class="tab-pane fade">

</div>
</div>

</div>

</div>
<!-- Client logo's Section -->
<?php get_sidebar('brands'); ?>
<!-- Client logo's Section End -->

<?php get_footer();?>
<script>
//jQuery(document).ready(function(){
//jQuery("a.custom-toggle").click(function(){
//jQuery(this).toggleClass('collapsed').parent().parent().next().slideToggle('slow');
//})
//})


</script>

<script type="text/javascript">
$(document).ready(function () {
	$(".owl-carousel").each(function(){
		$(this).owlCarousel({
		loop: true,
		margin: 0,
		responsiveClass: true,
		autoWidth:true,
		responsive: {
			0: {
				items: 2,
				nav: true
			},
			600: {
				items: 2,
				nav: false
			},
			1000: {
				items: 2,
				nav: true,
				loop: false
			}
		}
		});
	});
	setTimeout(function(){ 
		$("#menu3").removeClass("in");
		$("#menu3").removeClass("active");
		$("#menu2").removeClass("in");
		$("#menu2").removeClass("active");
		$("#menu4").removeClass("in");
		$("#menu4").removeClass("active");
	}, 2000);

    // initialize_owl($('#owl1'));

    // $('a[href="#menu1"]').on('shown.bs.tab', function () {
        // initialize_owl($('#owl1'));
    // }).on('hide.bs.tab', function () {
        // destroy_owl($('#owl1'));
    // });

    // $('a[href="#menu2"]').on('shown.bs.tab', function () {
        // initialize_owl($('#owl2'));
    // }).on('hide.bs.tab', function () {
        // destroy_owl($('#owl2'));
    // });

    // $('a[href="#menu3"]').on('shown.bs.tab', function () {
        // initialize_owl($('#owl3'));
    // }).on('hide.bs.tab', function () {
        // destroy_owl($('#owl3'));
    // });

    // $('a[href="#menu4"]').on('shown.bs.tab', function () {
        // initialize_owl($('#owl4'));
    // }).on('hide.bs.tab', function () {
        // destroy_owl($('#owl4'));
    // });
});

function initialize_owl(el) {
    el.owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        autoWidth:true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });
}

function destroy_owl(el) {
    el.data('owlCarousel').destroy();
}
</script>


