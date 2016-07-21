<?php
/**
* Template Name: Services
*/
get_header(); ?> 

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
<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
<li class="active">Services</li>
</ol>
</div>

<div class="about-section">
<div class="all-subro-operates">
<div class="container">
<?php the_content();?>

</div>
</div>
</div>

</div> <!--opportunities Close-->
</div>

<?php get_footer();?>
