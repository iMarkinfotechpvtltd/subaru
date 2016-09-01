<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!--- Banner Section start here ---->
<?php 
$post_id= get_the_ID();
$banner = get_post_meta($post->ID,"banner_image",true);
$image = wp_get_attachment_image_src($banner,'banner_image');
$url = $image[0];
if($url!="") 
{
?>
<div class="banner" style="background-image:url(<?php echo $url;?>);background-position:72% 50%;">
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

<!--- Banner Section End here ---->
<div class="clearfix"></div>

<?php get_sidebar('search'); ?> 

<div class="container">
<div class="opportunities">
<div class="breadcrumb-container">
<ol class="breadcrumb">
<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
<li class="active"><?php the_title(); ?></li>
</ol>
</div>
<div class="about-section">
<h3><?php the_title(); ?></h3>    
<?php the_content();?>
<?php
edit_post_link(
sprintf(
/* translators: %s: Name of current post */
__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
get_the_title()
),
'<footer class="entry-footer"><span class="edit-link">',
'</span></footer><!-- .entry-footer -->'
);
?>
</div>
</div> <!--opportunities Close-->
</div>

