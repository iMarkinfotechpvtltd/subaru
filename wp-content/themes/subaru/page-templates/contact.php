<?php
/**
* Template Name: Contact us
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>
<!--- Banner Section start here ---->
<?php 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'full');
$url = $image[0];
if($url!="") 
{ ?>
<div class="banner" style="background-image:url(<?php echo $url;?>);">
<?php }
else{ ?>
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
<?php } ?>
</div>
</div>
<!--- Banner Section End here ---->

<div class="clearfix"></div>

<div class="main-search-sec">
<div class="container">
<div class="main-search ">
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

<div class="contact-main">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="enq-form wow fadeInUp" data-wow-duration="1.2s">
<h2>Enquiry Form</h2>
<div class="enq-gray-cvr">
<?php echo do_shortcode('[contact-form-7 id="397" title="Contact Us"]'); ?>
</div>
</div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="loca-info wow fadeInUp" data-wow-duration="1.5s">
<h2>Contact & Location</h2>

<div class="loca-info-cvr">
<ul class="add-sec">
<?php if(get_post_meta($post->ID,"cont_address",true)) { ?>
<li >
<?php echo get_post_meta($post->ID,"cont_address",true); ?>
</li>
<?php } 
if(get_post_meta($post->ID,"cont_phone",true)) {
?>
<li>
Phone +61 <a href="tel:<?php echo get_post_meta($post->ID,"cont_phone",true); ?>"><span><?php echo get_post_meta($post->ID,"cont_phone",true); ?></span></a>
</li>
<?php } 
if(get_post_meta($post->ID,"cont_fax",true)) {
?>
<li>
Fax +61 <span><?php echo get_post_meta($post->ID,"cont_fax",true); ?></span>
</li>
<?php } ?>

<?php if(get_post_meta($post->ID,"24_hrs_service",true)) { ?>
<li><?php echo get_post_meta($post->ID,"24_hrs_service",true); ?></li>
<?php } ?>

<?php if(get_post_meta($post->ID,"admin_&_accounts",true)){ ?>    
<li>Admin & Accounts – <a href="mailto:<?php echo get_post_meta($post->ID,"admin_&_accounts",true); ?>"><?php echo get_post_meta($post->ID,"admin_&_accounts",true); ?></a></li>
<?php } if(get_post_meta($post->ID,"sales_&_technical",true)){ ?>
<li>Sales & Technical – <a href="mailto:<?php echo get_post_meta($post->ID,"sales_&_technical",true); ?>"><?php echo get_post_meta($post->ID,"sales_&_technical",true); ?></a></li>
<?php } ?>

</ul>
</div>

<div class="follow-cvr">
<ul>
<li>Follow us</li>
<?php if(get_post_meta($post->ID,"facebook",true)){ ?>
<li><a href="<?php echo get_post_meta($post->ID,"facebook",true); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<?php } if(get_post_meta($post->ID,"instagram",true)){ ?>
<li><a href="<?php echo get_post_meta($post->ID,"instagram",true); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<?php } if(get_post_meta($post->ID,"linkedin",true)){ ?>
<li><a href="<?php echo get_post_meta($post->ID,"linkedin",true); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
<?php } if(get_post_meta($post->ID,"skype",true)){  ?>
<li><a href="<?php echo get_post_meta($post->ID,"skype",true); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
<?php } ?>
</ul>
</div>

<div class="my-map-loc">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.1752608910783!2d151.06047331496768!3d-33.96233453135028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b93b11d8ed03%3A0x4f2f890b91cb7845!2sAll+Drive+Subaroo+Pty+Ltd!5e0!3m2!1sen!2sin!4v1465998394268"  frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</div>
</div>

</div>
</div>
</div>

<div class="clearfix"></div>
<div class="five-res-cvr">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 wow zoomIn" data-wow-duration="2s">
<?php $left_image = get_post_meta($post->ID,"left_image",true);
$left_image_src = wp_get_attachment_image_src($left_image,'full');
$url1 = $left_image_src[0];
if($url1!="") { ?>    
<img src="<?php echo $url1; ?>" class="img-responsive">
<?php } else{ ?>
<img src="https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=414&h=778" class="img-responsive">
<?php } ?> 
</div>

<div class="col-md-8 col-sm-8 col-xs-12">
<div class="five-res-list-cvr">
<ul>
<?php for($k=1;$k<=5;$k++){ 
 $field_name=$k.'_reason';
?>    
<?php if(get_post_meta($post->ID,$field_name,true)){ ?>
<li class="wow fadeIn" data-wow-duration="1.4s"><?php echo get_post_meta($post->ID,$field_name,true); ?></li>
<?php } 
}
?>
</ul>
</div>
</div>

</div>
</div>
</div>

<?php get_sidebar('departments'); ?>  <!-- Four Depts Section -->
<?php get_sidebar('brands'); ?> <!-- Client logo's Section -->

<?php get_footer(); ?>