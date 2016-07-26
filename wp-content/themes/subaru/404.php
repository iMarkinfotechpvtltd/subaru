<?php
/**
* The template for displaying 404 pages (not found)
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>

<div class="banner" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=74&txt=1500%C3%97296&w=1920&h=895)">
</div>
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
<div class="container">
<div class="opportunities">

<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>

<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

<?php get_search_form(); ?>

</div><!-- .content-area -->
</div>
<?php get_footer(); ?>
