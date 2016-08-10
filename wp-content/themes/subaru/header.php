<?php
/**
* The template for displaying the header
*
* Displays all of the head element and everything up until the "site-content" div.
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
<?php wp_head(); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main-style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/oka_slider_model.css">
<script>
var ajaxurl = '<?php echo admin_url('admin-ajax.php');?>'; 
var cdate='<?php echo date('m/d/Y'); ?>';
</script>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?47A8yi7FwHL101Ika8COnqTyoxA04aUV";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</head>

<body <?php body_class(); ?>>
<header>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand" >
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-logo.png"></a>
</div>
<div class="collapse navbar-collapse " id="myNavbar">
<?php //wp_nav_menu( array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'walker' => new ik_walker() ) );
?> 
<?php
//get the current page,post ids

if(is_page())
{
$current=get_the_id();    
}
if(is_single())
{
$current=get_the_id();     
}

 $menu_name = 27;
 $menu = wp_get_nav_menu_object( $menu_name );
 $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
 ?>

<ul class="nav navbar-nav">
<?php
$count = 0;
$submenu = true;
foreach( $menuitems as $item ):
$link = $item->url;
$title = $item->title;
$loopid= $item->object_id;

// item does not have a parent so menu_item_parent equals 0 (false)
if ( !$item->menu_item_parent ):
// save this id for later comparison with sub-menu items
$parent_id = $item->ID;

if($loopid==$current){$active="active";} 
else{$active="";}

if($active){
  $class = $active.' '.$item->classes[0].' '.$item->classes[1];  
}
else{
 $class = $item->classes[0].' '.$item->classes[1];     
}

?>

<li class="<?php echo $class ?>">
<a href="<?php echo $link; ?>" class="title">
<?php echo $title; ?>
</a>
<?php endif; ?>
<?php 
if($parent_id == 833) // If parent is about us page
{ ?>
<ul class="submenu">
<li><a href="<?php echo get_the_permalink(65); ?>"><?php echo get_the_title(65); ?></a></li>    
<li><a href="<?php echo get_the_permalink(85); ?>"><?php echo get_the_title(85); ?></a></li>
</ul>   
<?php }

if($parent_id == 795) // If parent is service
{ 
$taxonomy = 'categories_services';  
$post_type= 'services';
$img_src= get_stylesheet_directory_uri().'/images/mega-menu-ads/service-ad-img.jpg';
$order="ASC";
}

if($parent_id == 796) // If parent is Subapedia
{ 
$taxonomy = 'subapedia_categories';  
$post_type= 'subapedia';
$img_src= get_stylesheet_directory_uri().'/images/mega-menu-ads/service-ad-img.jpg';
//$order="DESC";
}
?>
<?php //if ( $taxonomy && $post_type ): 
if ( $parent_id == 795 || $parent_id == 796):
?>
<div class="custm-mega-cvr">
<div class="mega-heading">
<?php if($title){ ?>
<h4><?php echo $title.' '.'Overview';?></h4>
<?php } ?>
</div>
<div class="mega-inner">
<div class="mega-inner-left">    

<?php
$argv = array(      
'orderby' => 'term_order',    
'hide_empty' => false,  
'exclude'   => array(42),     
 );   
$terms = get_terms($taxonomy, $argv);
//print_r($terms);
if ($terms) {
$i=1;

foreach($terms as $term) {
$term_id_loop=$term->term_id;
if($term_id_loop==40)
{ $abc=array(419); }
else{$abc=array();}
if($i==1){
echo '<div class="mega-inner-row">';     
}
?>
<div class="mega-menu-item">
<?php  echo '<h5>'.$term->name.'</h5>';
$args = array(
'post_type'   => $post_type, 
'post__in'   => $abc,   
'orderby' => 'menu_order',
//'order'   => $order,   
'showposts' => -1,    
'tax_query' => array(
array(
'taxonomy' => $taxonomy,
'field'    => 'id',
'terms'    => $term->term_id
)
)
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
?>
<ul> 
<?php
while ( $the_query->have_posts() ) {
$the_query->the_post();
$loopid= get_the_ID();
if($loopid==$current){$class='active';} else{$class='';}
//echo '<li class=""><a aria-controls="battery-services" role="tab" data-toggle="tab" href="'.get_the_permalink().'">'.get_the_title().'</a></li>';

echo '<li class="'.$class.'"><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
}
?>
</ul> 
<?php }
?>

</div>
<?php  
$i++;
if($i==4){
echo '</div>';  
$i=1;
}
}
?>
<?php } ?>
<?php
wp_reset_postdata();
?>

<!--<li class="item">
<a href="<?php //echo $link; ?>" class="title"><?php echo $title; ?></a>
</li>-->

<?php// if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>

</div>
</div>    
<div class="mega-inner-right">
<div class="mega-menu-ad">
<a href="#">
<img class="img-responsive" src="<?php echo $img_src; ?>">
</a>
</div>
</div> <!-- mega inner -->
</div> <!-- End of custom mega-cvr-->
<?php $submenu = false; 
endif; 

if($parent_id==296)
{ ?>
<div class="custm-mega-cvr">
<div class="mega-heading">
<h4>Engine Overview</h4>
</div>
<div class="mega-inner">
<div class="mega-inner-left">
<div class="mega-menu-ad">
<a href="#">
<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mega-menu-ads/engine-ad-img-left.jpg">
</a>

</div>

<div class="mega-inner-row">
<div class="mega-menu-item">
<h5><a href="#">Subaru Engine Configuration</a></h5>
<p>Three levels of engine build. Learn what "short" "long" and "long dressed" mean. </p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Subaru Cosworth Performance</a></h5>
<p>ADS teams up with one of the great names in racing to produce bullet-proof engines. </p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Head Gasket Repairs</a></h5>
<p>Internal and external leaks, defective OEM gaskets, we deliver a permanent fix. </p>
</div>

</div>

<div class="mega-inner-row">

<div class="mega-menu-item">
<h5><a href="#">Cooling System</a></h5>
<p>FInd out how your cooling system works, and what happens when it goes wrong.</p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Engine Fitment and Logistics</a></h5>
<p>ADS make and fit engines, at Peakhurst or one of our many authorised fitting stations. </p>
</div>

<div class="mega-menu-item">
<h5><a href="#">About Subaru Engine</a></h5>
<p>Learn about Subaru Engine Australia, the team, the history, the philosophy. </p>
</div>

</div>


</div>


<div class="mega-inner-right">
<div class="mega-menu-ad">
<a href="#">
<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mega-menu-ads/engine-ad-img.jpg">
</a>

</div>

</div>

</div>


</div>    
<?php }
if($parent_id==863)
{ ?>
<div class="custm-mega-cvr">
<div class="mega-heading">
<h4>Gearbox Overview</h4>
</div>
<div class="mega-inner">
<div class="mega-inner-left">
<div class="mega-menu-ad">
<a href="#">
<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mega-menu-ads/gearbox-ad-img-left.jpg">
</a>

</div>

<div class="mega-inner-row">
<div class="mega-menu-item">
<h5><a href="#">All things about Subaru Gearboxes</a></h5>
<p>All the models, the problems, the fixes. Learn about our four build levels. </p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Hybrid 6 speed STI conversion</a></h5>
<p>At last a 6-speed STI box for your WRX, Forester or Liberty. Click for details</p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Billet motorsport transmissions</a></h5>
<p>Race-grade billet steel gearboxes from PPG for competitive motorsport  </p>
</div>

</div>

<div class="mega-inner-row">

<div class="mega-menu-item">
<h5><a href="#">Viscous Coupling center differential</a></h5>
<p>All power through the viscous. What goes wrong, how we can fix it.</p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Reverse drive transmission</a></h5>
<p>A Subaru-based transaxle for your rear drive vehicle that can take the power </p>
</div>

<div class="mega-menu-item">

</div>

</div>

<div class="mega-inner-row">

<div class="mega-menu-item">
<h5><a href="#">New &amp; used spare parts</a></h5>
<p>Largest independent new and used parts supplier, best prices, fast freight..</p>
</div>

<div class="mega-menu-item">
<h5><a href="#">Installation &amp; delivery anywhere</a></h5>
<p>TNT logistics and nationwide approved fitting stations  mean fast service.</p>
</div>

<div class="mega-menu-item">
<h5><a href="#">About Subaru Gearbox Australia</a></h5>
<p>Meet the team, and read out about our history and accomplishments.</p>
</div>

</div> 


</div>


<div class="mega-inner-right">
<div class="mega-menu-ad">
<a href="#">
<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mega-menu-ads/gearbox-ad-img.jpg">
</a>

</div>

</div>

</div>


</div>    
<?php }
?>

<?php //endif; ?>


</li>                           


<?php $count++; endforeach; ?>

</ul>
   
<?php dynamic_sidebar('header'); ?>  

</div>
</div>
</nav>
</header>

