<div class="service-menu">
<h4>SERVICES MENU</h4>
<div class="panel-group servcemenu" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$icon[16]='v-srv-00';
$icon[17]='v-srv-01';
$icon[18]='v-srv-02';
$icon[19]='v-srv-03';
$icon[20]='v-srv-04';
$icon[21]='v-srv-05';
$icon[22]='v-srv-06';
$icon[23]='v-srv-07';
$icon[24]='v-srv-08';
$icon[25]='v-srv-09';
$icon[26]='v-srv-10';

$post_id= get_the_ID();
foreach((get_the_terms($post_id, 'categories_services')) as $term11) { 
$term_id_main[]=$term11->term_id; 
}

$taxonomy = 'categories_services';
$queried_term = get_query_var($taxonomy);
$terms = get_terms($taxonomy, 'slug='.$queried_term);
if ($terms) {
$i=0;
foreach($terms as $term) {
$term_id_loop=$term->term_id;
echo '<div class="panel panel-default">';
if($term_id_main[0]==$term_id_loop){$coll_class='';
$panel='panel-collapse collapse in';
$height="";

} else{$coll_class='';
$coll_class='collapsed';
$panel='panel-collapse collapse';
}
echo '<div class="panel-heading" role="tab" id="heading'.$i.'"><h4 class="panel-title"><a class="'.$coll_class.'" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapse'.$i.'" href="#collapse'.$i.'"><span class="'.$icon[$term_id_loop].'"></span>'.$term->name.'</h4></div>';
$args = array(
'post_type'   => 'services',
'orderby' => 'title',
'order'   => 'ASC',     
'tax_query' => array(
array(
'taxonomy' => 'categories_services',
'field'    => 'id',
'terms'    => $term->term_id
)
)
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
?>
<div id="collapse<?php echo $i; ?>" class="<?php echo $panel; ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>" style='<?php echo $height; ?>'>
<div class="panel-body">
<ul class="inner-list"> 
<?php
while ( $the_query->have_posts() ) {
$the_query->the_post();
if($post_id==get_the_ID()){$class='active';}else{$class='';}
//echo '<li class=""><a aria-controls="battery-services" role="tab" data-toggle="tab" href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
echo '<li class="'.$class.'"><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
}
}
?>
</ul>
</div>
</div> 
<?php  
echo '</div>';
   $i++;
}
} 
wp_reset_postdata();
?>
</div>

<div class="subaru-engines-australia">
<?php $more_url= get_post_meta(get_the_ID(),"subar_more_link",true);
?>  
<?php 
// check if the repeater field has rows of data
if( have_rows('engine_adds') ):
?>
<h4>Subaru Engines Australia</h4> <a class="btn btn-mr" href="<?php if($more_url){ echo $more_url;} else{echo 'javascript:void(0);';}?>">More</a>    
<div class="row mb00">
<?php    
while ( have_rows('engine_adds') ) : the_row();
?>
<div class="col-lg-6">
<?php $add_id=get_sub_field('image'); 
$add_image = wp_get_attachment_image_src($add_id,'adds_img');
$add_url = $add_image[0];
?>
<img src="<?php echo $add_url; ?>">
</div>
<?php endwhile; ?>
</div> 
<?php endif; ?>

</div> <!--engine-australia-->

<div class="subaru-engines-australia engine-gear-box">
<?php $more_url= get_post_meta(get_the_ID(),"subar_gear_more_link",true);
?>  

<?php 
// check if the repeater field has rows of data
if( have_rows('gearbox_adds') ): ?>
<h4>Subaru Gearbox Australia</h4> <a class="btn btn-mr" href="<?php if($more_url){ echo $more_url;} else{echo 'javascript:void(0);';}?>">More</a>   
<div class="row mb00">
<?php while ( have_rows('gearbox_adds') ) : the_row();
?>
<div class="col-lg-6">
<?php $add_id=get_sub_field('image'); 
$add_image = wp_get_attachment_image_src($add_id,'full');
$add_url = $add_image[0];
?>
<img src="<?php echo $add_url; ?>">
</div>
<?php endwhile; ?>
</div> 
<?php endif; ?>
 
</div> <!----->

<div class="subaru-engines-australia engine-superpedia">
<?php $more_url= get_post_meta(get_the_ID(),"subapedia_more_link",true);
?>  

<?php 
// check if the repeater field has rows of data
if( have_rows('subapedia_adds') ):
?>
<h4>Subapedia</h4> <a class="btn btn-mr" href="<?php if($more_url){ echo $more_url;} else{echo 'javascript:void(0);';}?>">More</a>    
<div class="row mb00">
<?php    
while ( have_rows('subapedia_adds') ) : the_row();
?>
<div class="col-lg-6">
<?php $add_id=get_sub_field('image'); 
$add_image = wp_get_attachment_image_src($add_id,'full');
$add_url = $add_image[0];
?>
<img src="<?php echo $add_url; ?>">
</div>
<?php endwhile;
?>
</div> 
<?php 
endif; ?>

</div> <!----->

</div> <!--service-menu-Close--> 