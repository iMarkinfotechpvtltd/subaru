<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!--- Banner Section start here ---->
<div class="news-section">
<div class="author-post-headding news">
<h3><?php the_title(); ?></h3>
<ul class="post-cmts">
<li class="time"><?php echo get_the_date(); ?></li>
<li class="author-name"><?php $fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
echo $fname.' '.$lname;
?></li>
<li class="folder-name"><?php echo get_field('designation', 'user_'.get_the_author_meta('ID')); ?></li>
<li class="commetns"><?php echo get_comments_number(); ?> Comments</li>
</ul>
</div> 
<?php echo get_the_post_thumbnail(get_the_ID(),'subapedia_images'); ?>

<p><?php echo get_excerpt(50,'...'); ?></p>

<a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-default btn-read">Read More</button></a>
</div>