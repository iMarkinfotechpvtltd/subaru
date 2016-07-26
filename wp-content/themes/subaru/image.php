<?php
/**
* The template for displaying image attachments
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>
<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
</div>
<div class="clearfix"></div>
<div class="container">
<div class="opportunities">
<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<nav id="image-navigation" class="navigation image-navigation">
<div class="nav-links">
<div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'twentysixteen' ) ); ?></div>
<div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'twentysixteen' ) ); ?></div>
</div><!-- .nav-links -->
</nav><!-- .image-navigation -->

<div class="entry-header">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div><!-- .entry-header -->

<div class="entry-content">

<div class="entry-attachment">
<?php
/**
* Filter the default twentysixteen image attachment size.
*
* @since Twenty Sixteen 1.0
*
* @param string $image_size Image size. Default 'large'.
*/
$image_size = apply_filters( 'twentysixteen_attachment_size', 'large' );

echo wp_get_attachment_image( get_the_ID(), $image_size );
?>

<?php twentysixteen_excerpt( 'entry-caption' ); ?>

</div><!-- .entry-attachment -->

<?php
the_content();
wp_link_pages( array(
'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
'after'       => '</div>',
'link_before' => '<span>',
'link_after'  => '</span>',
'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
'separator'   => '<span class="screen-reader-text">, </span>',
) );
?>
</div><!-- .entry-content -->

<div class="entry-footer">
<?php twentysixteen_entry_meta(); ?>
<?php
// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();
if ( $metadata ) {
printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
esc_html_x( 'Full size', 'Used before full size attachment link.', 'twentysixteen' ),
esc_url( wp_get_attachment_url() ),
absint( $metadata['width'] ),
absint( $metadata['height'] )
);
}
?>
<?php
edit_post_link(
sprintf(
/* translators: %s: Name of current post */
__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
get_the_title()
),
'<span class="edit-link">',
'</span>'
);
?>
</div><!-- .entry-footer -->
</div><!-- #post-## -->

<?php
endwhile;
?>
</div>
</div>
<?php get_footer(); ?>
