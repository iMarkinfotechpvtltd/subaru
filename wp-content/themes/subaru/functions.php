<?php
add_image_size( 'Home_page_banner', 1883,900, false );
require_once( get_stylesheet_directory() . '/inc/class_options.php');


/* DEPARTMENTS Section Home Page */
add_action( 'init', 'create_departments' );
function create_departments() {
register_post_type( 'departments',
array(
'labels' => array(
'name' => 'Departments',
'singular_name' => 'departments',
'add_new' => 'Add New',
'add_new_item' => 'Add New Departments',
'edit' => 'Edit',
'edit_item' => 'Edit New Departments ',
'new_item' => 'New  Departments',
'view' => 'View',
'view_item' => 'View  Departments',
'search_items' => 'Search  Departments',
'not_found' => 'No  Departments Found',
'not_found_in_trash' => 'No Departments found in Trash',
'parent' => 'Parent Main Departments'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,  
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 
function create_departments_taxonomies() {
$labels = array(
'name'              => _x( 'Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_departments' ),
);

register_taxonomy( 'departments_categories', array( 'departments' ), $args );
}
add_action( 'init', 'create_departments_taxonomies', 0 );
add_image_size( 'departments_image', 287,188, false );  
add_image_size( 'latest_posts', 360,199, true ); 
add_image_size( 'team_slider', 599,541, false ); 
add_image_size( 'adds_img', 192,113, false ); 
add_image_size( 'banner_small', 176,125, false ); 
/* End DEPARTMENTS Section Home Page */

/* WHY CHOOSE ALL DRIVE SUBAROO */
add_action( 'init', 'create_whychoosesubaroo' );
function create_whychoosesubaroo() {
register_post_type( 'whychoosesubaroo',
array(
'labels' => array(
'name' => 'WHY CHOOSE SUBAROO',
'singular_name' => 'whychoosesubaroo',
'add_new' => 'Add New',
'add_new_item' => 'Add New WHY CHOOSE SUBAROO',
'edit' => 'Edit',
'edit_item' => 'Edit New WHY CHOOSE SUBAROO ',
'new_item' => 'New  WHY CHOOSE SUBAROO',
'view' => 'View',
'view_item' => 'View  WHY CHOOSE SUBAROO',
'search_items' => 'Search  WHY CHOOSE SUBAROO',
'not_found' => 'No  WHY CHOOSE SUBAROO Found',
'not_found_in_trash' => 'No WHY CHOOSE SUBAROO found in Trash',
'parent' => 'Parent Main WHY CHOOSE SUBAROO'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),
'has_archive' => true
)
);
} 

/*---- Start Create custom post whychoosesubaroo -----*/
function create_whychoosesubaroo_taxonomies() {
$labels = array(
'name'              => _x( 'Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_whychoosesubaroo' ),
);

register_taxonomy( 'whychoosesubaroo_categories', array( 'whychoosesubaroo' ), $args );
}
add_action( 'init', 'create_whychoosesubaroo_taxonomies', 0 );
/*---- End Create custom post whychoosesubaroo -----*/

/* TESTIMONIALS Section Home Page */
add_action( 'init', 'create_testimonial' );
function create_testimonial() {
register_post_type( 'testimonial',
array(
'labels' => array(
'name' => 'TESTIMONIALS',
'singular_name' => 'testimonial',
'add_new' => 'Add New',
'add_new_item' => 'Add New TESTIMONIALS',
'edit' => 'Edit',
'edit_item' => 'Edit New TESTIMONIALS ',
'new_item' => 'New  TESTIMONIALS',
'view' => 'View',
'view_item' => 'View  TESTIMONIALS',
'search_items' => 'Search  TESTIMONIALS',
'not_found' => 'No  TESTIMONIALS Found',
'not_found_in_trash' => 'No TESTIMONIALS found in Trash',
'parent' => 'Parent Main TESTIMONIALS'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,  
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 

function create_testimonial_taxonomies() {
$labels = array(
'name'              => _x( 'Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_testimonial' ),
);

register_taxonomy( 'testimonial_categories', array( 'testimonial' ), $args );

// Add new taxonomy, NOT hierarchical (like tags)
$labels = array(
'name'                       => _x( 'Tags', 'taxonomy general name' ),
'singular_name'              => _x( 'Tag', 'taxonomy singular name' ),
'search_items'               => __( 'Search Tags' ),
'popular_items'              => __( 'Popular Tags' ),
'all_items'                  => __( 'All Tags' ),
'parent_item'                => null,
'parent_item_colon'          => null,
'edit_item'                  => __( 'Edit Tag' ),
'update_item'                => __( 'Update Tag' ),
'add_new_item'               => __( 'Add New Tag' ),
'new_item_name'              => __( 'New Tag Name' ),
'separate_items_with_commas' => __( 'Separate Tags with commas' ),
'add_or_remove_items'        => __( 'Add or remove Tags' ),
'choose_from_most_used'      => __( 'Choose from the most used Tags' ),
'not_found'                  => __( 'No Tags found.' ),
'menu_name'                  => __( 'Tags' ),
);

$args = array(
'hierarchical'          => false,
'labels'                => $labels,
'show_ui'               => true,
'show_admin_column'     => true,
'update_count_callback' => '_update_post_term_count',
'query_var'             => true,
'rewrite'               => array( 'slug' => 'tags_testimonial' ),
);

register_taxonomy( 'tags_testimonial', array( 'testimonial' ), $args );
}
add_action( 'init', 'create_testimonial_taxonomies', 0 );

/* End TESTIMONIALS Section Home Page */

/* Brand Section Home Page */
add_action( 'init', 'create_brand' );
function create_brand() {
register_post_type( 'brand',
array(
'labels' => array(
'name' => 'Brands',
'singular_name' => 'brand',
'add_new' => 'Add New',
'add_new_item' => 'Add New Brands',
'edit' => 'Edit',
'edit_item' => 'Edit New Brands ',
'new_item' => 'New  Brands',
'view' => 'View',
'view_item' => 'View  Brands',
'search_items' => 'Search  Brands',
'not_found' => 'No  Brands Found',
'not_found_in_trash' => 'No Brands found in Trash',
'parent' => 'Parent Main Brands'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,  
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 
function create_brand_taxonomies() {
$labels = array(
'name'              => _x( 'Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_brand' ),
);

register_taxonomy( 'brand_categories', array( 'brand' ), $args );
}
add_action( 'init', 'create_brand_taxonomies', 0 );          
/* End Brand Section Home Page */

/* Meet the team Section about Page */
add_action( 'init', 'create_team' );
function create_team() {
register_post_type( 'team',
array(
'labels' => array(
'name' => 'Teams',
'singular_name' => 'team',
'add_new' => 'Add New',
'add_new_item' => 'Add New Teams',
'edit' => 'Edit',
'edit_item' => 'Edit New Teams ',
'new_item' => 'New  Teams',
'view' => 'View',
'view_item' => 'View  Teams',
'search_items' => 'Search  Teams',
'not_found' => 'No  Teams Found',
'not_found_in_trash' => 'No Teams found in Trash',
'parent' => 'Parent Main Teams'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,  
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 
function create_team_taxonomies() {
$labels = array(
'name'              => _x( 'Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_team' ),
);

register_taxonomy( 'team_categories', array( 'team' ), $args );
}
add_action( 'init', 'create_team_taxonomies', 0 ); 
add_image_size( 'team_image', 270,270, false );   

/* End Meet the team Section about Page */

/* Services Custom post type */
add_action( 'init', 'create_services' );
function create_services() {
register_post_type( 'services',
array(
'labels' => array(
'name' => 'SERVICES',
'singular_name' => 'service',
'add_new' => 'Add New',
'add_new_item' => 'Add New SERVICES',
'edit' => 'Edit',
'edit_item' => 'Edit New SERVICES ',
'new_item' => 'New  SERVICES',
'view' => 'View',
'view_item' => 'View  SERVICES',
'search_items' => 'Search  SERVICES',
'not_found' => 'No  SERVICES Found',
'not_found_in_trash' => 'No SERVICES found in Trash',
'parent' => 'Parent Main SERVICES'
),

'public' => true,
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 

/* create custom taxonomy for services */
function create_services_taxonomies() {
$labels = array(
'name'              => _x( 'Services Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'categories_services' ),
);

register_taxonomy( 'categories_services', array( 'services' ), $args );
}
add_action( 'init', 'create_services_taxonomies', 0 );

/* create custom widgets that show under appearance */
function custom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Header', 'twentysixteen' ),
		'id'            => 'header',
		'description'   => __( 'Add widgets here to appear in your Header.', 'twentysixteen' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
        register_sidebar( array(
		'name'          => __( 'Service Package', 'twentysixteen' ),
		'id'            => 'service-package',
		'description'   => __( 'Add widgets here to appear in your services page.', 'twentysixteen' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
        register_sidebar( array(
		'name'          => __( 'Primary Footer 1', 'twentysixteen' ),
		'id'            => 'primary-footer1',
		'description'   => __( 'Show in Footer.', 'twentysixteen' ),
		'before_widget' => '<div class="footer-item footer-vdo">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Primary Footer 2', 'twentysixteen' ),
		'id'            => 'primary-footer2',
		'description'   => __( 'Show in Footer.', 'twentysixteen' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
        register_sidebar( array(
		'name'          => __( 'Primary Footer 3', 'twentysixteen' ),
		'id'            => 'primary-footer3',
		'description'   => __( 'Show in Footer.', 'twentysixteen' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );
        register_sidebar( array(
		'name'          => __( 'Primary Footer 4', 'twentysixteen' ),
		'id'            => 'primary-footer4',
		'description'   => __( 'Show in Footer.', 'twentysixteen' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );
        
        register_sidebar( array(
		'name'          => __( 'Header Search', 'twentysixteen' ),
		'id'            => 'header-search',
		'description'   => __( 'Show below banner.', 'twentysixteen' ),
		'before_widget' => '<div class="main-search wow bounceInUp" data-wow-duration="2s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	) );
}
add_action( 'widgets_init', 'custom_widgets_init' );

/* Filter for add the class in body tag */
add_filter( 'body_class', function( $classes ) {
   if(is_singular('services'))
   {$c = 'service';}
   else{$c = '';}
    return array_merge( $classes, array( $c ) );
} );


/* Create custom post type for packages */
add_action( 'init', 'create_packages' );

function create_packages() {
register_post_type( 'packages',
array(
'labels' => array(
'name' => 'PACKAGES',
'singular_name' => 'package',
'add_new' => 'Add New',
'add_new_item' => 'Add New PACKAGES',
'edit' => 'Edit',
'edit_item' => 'Edit New PACKAGES ',
'new_item' => 'New  PACKAGES',
'view' => 'View',
'view_item' => 'View  PACKAGES',
'search_items' => 'Search  PACKAGES',
'not_found' => 'No  PACKAGES Found',
'not_found_in_trash' => 'No PACKAGES found in Trash',
'parent' => 'Parent Main PACKAGES'
),

'public' => false,
'show_ui' => true,
'exclude_from_search' => true,    
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),
'has_archive' => true
)
);
} 

/**
Start -> Add the custom Meta box to show packages under Services
 */
function myplugin_add_meta_box() {

	$screens = array( 'services' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'myplugin_sectionid',
			__( 'Select Packages', 'myplugin_textdomain' ),
			'myplugin_meta_box_callback',
			$screen
		);
	}
}
add_action( 'add_meta_boxes', 'myplugin_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function myplugin_meta_box_callback( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'myplugin_meta_box', 'myplugin_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_test_value', true );
	$val=explode(",",$value);
	echo '<div class="tabs-panel" id="categories_services-all"><ul class="categorychecklist form-no-clear" data-wp-lists="list:categories_services" id="categories_serviceschecklist">';
        foreach($val as $asd)
	{
		$arr[]=$asd;
	}
	
	global $wpdb;
	foreach( $wpdb->get_results("SELECT * FROM `wp_posts` WHERE post_type='packages' and post_status='publish'") as $key => $row)
	{
	$id = $row->ID;
	$post_title = $row->post_title;
	?>
	<li><label><input type="checkbox" name="myplugin_new_field[]" id="myplugin_new_field" value="<?php echo $id; ?>" <?php if (in_array($id, $arr, true)) { echo 'checked="checked"'; } ?>><?php echo $post_title; ?></label></li>
	<?php 
	}
        echo '</ul></div>';
	/*
	echo '<label for="myplugin_new_field">';
	_e( 'Description for this field', 'myplugin_textdomain' );
	echo '</label> ';
	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="' . esc_attr( $value ) . '" size="25" />';
	*/
}

/**
 * When the post is saved, saves our custom data.
 *
 * Custom meta box has been used on services pages to save packages
 */
function myplugin_save_meta_box_data( $post_id ) {

/*
* We need to verify this came from our screen and with proper authorization,
* because the save_post action can be triggered at other times.
*/

// Check if our nonce is set.
if ( ! isset( $_POST['myplugin_meta_box_nonce'] ) ) {
return;
}

// Verify that the nonce is valid.
if ( ! wp_verify_nonce( $_POST['myplugin_meta_box_nonce'], 'myplugin_meta_box' ) ) {
return;
}

// If this is an autosave, our form has not been submitted, so we don't want to do anything.
if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
return;
}

// Check the user's permissions.
if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

if ( ! current_user_can( 'edit_page', $post_id ) ) {
return;
}

} else {

if ( ! current_user_can( 'edit_post', $post_id ) ) {
return;
}
}

/* OK, it's safe for us to save the data now. */

// Make sure that it is set.
if ( ! isset( $_POST['myplugin_new_field'] ) ) {
return;
}

// Sanitize user input.
$my_data = $_POST['myplugin_new_field'];

$myArray = $_POST['myplugin_new_field'];

$asd="";
foreach($myArray as $val)
{
$asd.=$val.",";
}
$seralizedArray=substr($asd,0,-1); 
update_post_meta( $post_id, '_test_value', $seralizedArray);

}
add_action( 'save_post', 'myplugin_save_meta_box_data' );
/**
End -> Add the custom Meta box to show packages under Services
 */

add_image_size( 'whychoosesubaroo_image', 74,54, false );  
add_image_size( 'subapedia_images', 850,350, false ); 
add_image_size( 'news_image', 276,245, true ); 
add_image_size( 'news_inner_image', 828,341, false );  
add_image_size( 'news_banner_image', 1920,725, false );   
add_image_size( 'latestnews_image', 461,255, false );  
add_image_size( 'service_head_gasket', 705,242, false );  
add_image_size( 'brand_image', 169,59, false ); 
add_image_size( 'banner_image', 1920,895, false );
add_image_size( 'about_inner_image', 562,681, false ); 


/*-- Used on Single service Page For Appointment Form (Used to send Email to Admin) --*/
function appointmentmail(){  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$vin=$_POST['vin'];
$fvin=$_POST['fvin'];
$subaru=$_POST['subaru'];
$model=$_POST['model'];
$modyear=$_POST['modyear'];
$engine=$_POST['engine'];
$transmission=$_POST['transmission'];
$engineother=$_POST['engineother'];
$km=$_POST['km'];
$serviceint=$_POST['serviceint'];
$kmother=$_POST['kmother'];
$findus=$_POST['findus'];
$refine=$_POST['refine'];
$date=$_POST['date'];

$headers = "From: $fname <$email>\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$body = '
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<title>Appointent Email</title>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; font:12px arial; color:#000;">

<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid #eaeaea; margin-top:10px;">
<tr>
<td>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%">

<tr align="center">
<td style="font-family:arial; padding-bottom:40px;"><strong>
<img class="subroo-logo" src="http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/new-logo.png" alt="subroo">
</strong></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px; padding:0px;">
<tr>
<td style="padding:6px 15px;">
<h3 style="margin:8px 0px;">Hello, Admin</h3></td>
</tr>
<tr>
<td style="padding:6px 15px 15px;">
<p>You have received a new appointment</p>
</td>
</tr>
<tr>
<td style="text-align:center;width:100%; padding:10px 5px;background: #1e82d7;color:#fff;">
<p>Customer Details</p>
</td>
</tr>
<tr>
<td style="padding:0 10px;">
<table cellspacing="5" border="0" cellpadding="0" width="100%" style="margin-top:15px;">
<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Name :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9;padding:8px 15px;">'.$fname.' '.$lname.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Email :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$email.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>phone :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$phone.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>VIN :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$vin.' '.$fvin.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Model :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$model.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Model Year :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$modyear.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Engine :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$engine.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Transmission :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$transmission.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>KM :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$km.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Service Interval :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$serviceint.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>How did you find us? </strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$findus.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Refine With Keyword :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$refine.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Appointment Date :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$date.'</td>
</tr>

</table>
</td>
<td width="30"></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px;">
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
<tr>
<td align="center" style="font-family:" PT Sans ",sans-serif; font-size:13px; padding:15px 0; border-top:1px solid #efefef;">
</strong>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>
';
$subject="Appointment Booked";
$sent=wp_mail( 'info@alldrivesubaroo.com.au', $subject, $body, $headers );
// Return the String  
die($sent);  
}  
// creating Ajax call for WordPress  
add_action( 'wp_ajax_nopriv_appointmentmail', 'appointmentmail' );  
add_action( 'wp_ajax_appointmentmail', 'appointmentmail' );

/* Register locations for menu's */
function register_my_menu() {
register_nav_menu('footer-engine-menu',__( 'Footer Engine Menu' ));
register_nav_menu('footer-parts-menu',__( 'Footer Parts Menu' ));
register_nav_menu('footer-gearbox-menu',__( 'Footer Gearbox Menu' ));
register_nav_menu('footer-subpedia-menu',__( 'Footer Subpedia Menu' ));
}
add_action( 'init', 'register_my_menu' );

/*-- Used on Head Gasket Single service Page For Enquiry Form (Used to send Email to Admin) --*/
function enquirymail(){  
  //get the data from ajax() call  
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$model=$_POST['model'];
$modyear=$_POST['modyear'];
$engine=$_POST['engine'];
$vin=$_POST['vin'];
$comments=$_POST['comments'];
$headoption=$_POST['headoption'];

$headers = "From: $fname <$email>\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$body = '
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<title>Enquiry Email</title>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; font:12px arial; color:#000;">

<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid #eaeaea; margin-top:10px;">
<tr>
<td>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%">

<tr align="center">
<td style="font-family:arial; padding-bottom:40px;"><strong>
<img class="subroo-logo" src="http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/new-logo.png" alt="subroo">
</strong></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px; padding:0px;">
<tr>
<td style="padding:6px 15px;">
<h3 style="margin:8px 0px;">Hello, Admin</h3></td>
</tr>
<tr>
<td style="padding:6px 15px 15px;">
<p>You have received a new enquiry</p>
</td>
</tr>
<tr>
<td style="text-align:center;width:100%; padding:10px 5px;background: #1e82d7;color:#fff;">
<p>Customer Details</p>
</td>
</tr>
<tr>
<td style="padding:0 10px;">
<table cellspacing="5" border="0" cellpadding="0" width="100%" style="margin-top:15px;">
<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Name :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9;padding:8px 15px;">'.$fname.' '.$lname.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Email :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$email.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Phone :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$phone.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Model :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$model.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Year :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$modyear.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Engine :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$engine.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>VIN :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$vin.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Selected Option :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$headoption.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Comments :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$comments.'</td>
</tr>
</table>
</td>
<td width="30"></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px;">
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
<tr>
<td align="center" style="font-family:" PT Sans ",sans-serif; font-size:13px; padding:15px 0; border-top:1px solid #efefef;">
</strong>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>
';
$subject="Enquiry";
$sent=wp_mail( 'info@alldrivesubaroo.com.au', $subject, $body, $headers );
// Return the String  
die($sent);  
}  
// creating Ajax call for WordPress  
add_action( 'wp_ajax_nopriv_enquirymail', 'enquirymail' );  
add_action( 'wp_ajax_enquirymail', 'enquirymail' );

/**** Create Subapedia Post ****/
add_action( 'init', 'create_subapedia' );
function create_subapedia() {
register_post_type( 'subapedia',
array(
'labels' => array(
'name' => 'Subapedia',
'singular_name' => 'subapedia',
'add_new' => 'Add New',
'add_new_item' => 'Add New Subapedia',
'edit' => 'Edit',
'edit_item' => 'Edit New Subapedia ',
'new_item' => 'New  Subapedia',
'view' => 'View',
'view_item' => 'View  Subapedia',
'search_items' => 'Search  Subapedia',
'not_found' => 'No  Subapedia Found',
'not_found_in_trash' => 'No Subapedia found in Trash',
'parent' => 'Parent Main Subapedia'
),

'public' => true,
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields', 'excerpt' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 
function create_subapedia_taxonomies() {
$labels = array(
'name'              => _x( 'Subapedia Categories', 'taxonomy general name' ),
'singular_name'     => _x( 'Subapedia Category', 'taxonomy singular name' ),
'search_items'      => __( 'Search Categories' ),
'all_items'         => __( 'All Categories' ),
'parent_item'       => __( 'Parent Category' ),
'parent_item_colon' => __( 'Parent Category:' ),
'edit_item'         => __( 'Edit Category' ),
'update_item'       => __( 'Update Category' ),
'add_new_item'      => __( 'Add New Category' ),
'new_item_name'     => __( 'New Category Name' ),
'menu_name'         => __( 'Subapedia Categories' ),
); 

$args = array(
'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true, 
'rewrite'           => array( 'slug' => 'subapedia_cat' ),
);

register_taxonomy( 'subapedia_categories', array( 'subapedia' ), $args );
}
add_action( 'init', 'create_subapedia_taxonomies', 0 );

/* Pagination used on Subapedia taxonomy Pages */
function pagination($pages = '', $range = 4)
{  
$showitems = ($range * 2)+1;  

global $paged;
if(empty($paged)) $paged = 1;

if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}   

if(1 != $pages)
{
echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
}
}

if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
echo "</div>\n";
}
}

/* create excerpt for services */
//function get_excerpt($length){
//$excerpt = get_the_content();
//$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
//$excerpt = strip_shortcodes($excerpt);
//$excerpt = strip_tags($excerpt);
//$excerpt = substr($excerpt, 0, $length);
//$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
//$excerpt = $excerpt;
//return $excerpt;
//}

function get_excerpt_test($new_length = 20, $id,$parent) {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
 $par="'$parent'";
$new_more= '...<a class="link" href="javascript:void(0);" onclick="more_test('.$id.','.$par.')">[+]</a>';

  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}


function get_excerpt($new_length = 20, $new_more = '...') {
  add_filter('excerpt_length', function () use ($new_length) {
    return $new_length;
  }, 999);
  add_filter('excerpt_more', function () use ($new_more) {
    return $new_more;
  });
  $output = get_the_excerpt();
  $output = apply_filters('wptexturize', $output);
  $output = apply_filters('convert_chars', $output);
  $output = '<p>' . $output . '</p>';
  echo $output;
}

function sbt_custom_excerpt_more( $output ) {
return preg_replace('/<a[^>]+>Continue reading.*?<\/a>/i','',$output);
}
add_filter( 'get_the_excerpt', 'sbt_custom_excerpt_more', 20 );

//function wpdocs_custom_excerpt_length( $length ) {
//    return 40;
//}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/* Change the position of comment field under Leave a reply form (Single Subapedia) */
function wpb_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

/*-- Used In Header for "Get A Quote" Form (Used to send Email to Admin) --*/
function quotemail(){  
$qname=$_POST['qname'];
$qlname=$_POST['qlname'];
$qphone=$_POST['qphone'];
$qemail=$_POST['qemail'];
$qdate=$_POST['qdate'];
$qtime=$_POST['qtime'];
$qmodel=$_POST['qmodel'];
$qyear=$_POST['qyear'];
$locateus=$_POST['locateus'];
$qinfo=$_POST['qinfo'];
$urgent=$_POST['urgent'];


$headers = "From: $qname <$qemail>\r\n";
$headers .= "Reply-To: ". strip_tags($qemail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$body = '
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<title>Quote Form</title>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; font:12px arial; color:#000;">

<table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="border:1px solid #eaeaea; margin-top:10px;">
<tr>
<td>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%">

<tr align="center">
<td style="font-family:arial; padding-bottom:40px;"><strong>
<img class="subroo-logo" src="http://www.alldrivesubaru.com.au/wp-content/themes/subaru/images/new-logo.png" alt="subroo">
</strong></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px; padding:0px;">
<tr>
<td style="padding:6px 15px;">
<h3 style="margin:8px 0px;">Hello, Admin</h3></td>
</tr>
<tr>
<td style="padding:6px 15px 15px;">
<p>You have received a new Quote Request</p>
</td>
</tr>
<tr>
<td style="text-align:center;width:100%; padding:10px 5px;background: #1e82d7;color:#fff;">
<p>Customer Details</p>
</td>
</tr>
<tr>
<td style="padding:0 10px;">
<table cellspacing="5" border="0" cellpadding="0" width="100%" style="margin-top:15px;">
<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Name :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9;padding:8px 15px;">'.$qname.' '.$qlname.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Email :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qemail.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Phone :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qphone.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Date :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qdate.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Time :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qtime.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Model :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qmodel.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Year :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qyear.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>How did you find us? </strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$locateus.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Additional Quote Information :</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$qinfo.'</td>
</tr>

<tr>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:15px;background: #eaeaea;padding:8px 15px;text-transform: capitalize;"><strong>Is Quote Urgent?</strong></td>
<td style="width:20%; font-family:"PT Sans",sans-serif; font-size:13px;background: #f9f9f9; padding:8px 15px;">'.$urgent.'</td>
</tr>
</table>
</td>
<td width="30"></td>
</tr>
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:0px;">
</table>
<table cellspacing="0" border="0" align="center" cellpadding="0" width="100%" style="border:0px solid #efefef; margin-top:20px; padding:0px;">
<tr>
<td align="center" style="font-family:" PT Sans ",sans-serif; font-size:13px; padding:15px 0; border-top:1px solid #efefef;">
</strong>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>
';
$subject="Quote Request";
$sent=wp_mail( 'info@alldrivesubaroo.com.au', $subject, $body, $headers );


  // Return the String  
   die($sent);  

}  
// creating Ajax call for WordPress  
add_action( 'wp_ajax_nopriv_quotemail', 'quotemail' );  
add_action( 'wp_ajax_quotemail', 'quotemail' );


function moretest(){  
$post_id = $_POST['id'];
$post_object = get_post( $post_id );
$content= '<p>'.$post_object->post_content.'</p>';     
die($content);  
}  
// creating Ajax call for WordPress  
add_action( 'wp_ajax_nopriv_moretest', 'moretest' );  
add_action( 'wp_ajax_moretest', 'moretest' );

/* Subaru Malfunction Section Home Page */
add_action( 'init', 'create_malfunction' );
function create_malfunction() {
register_post_type( 'malfunction',
array(
'labels' => array(
'name' => 'Subaru Malfunction',
'singular_name' => 'malfunction',
'add_new' => 'Add New',
'add_new_item' => 'Add New Malfunction',
'edit' => 'Edit',
'edit_item' => 'Edit New Malfunction ',
'new_item' => 'New  Malfunction',
'view' => 'View',
'view_item' => 'View  Malfunction',
'search_items' => 'Search  Malfunction',
'not_found' => 'No  Malfunction Found',
'not_found_in_trash' => 'No Malfunction found in Trash',
'parent' => 'Parent Main Malfunction'
),

'public' => false,
'show_ui' => true,   
'exclude_from_search' => true,
'menu_position' => 15,
'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
'taxonomies' => array( '' ),

'has_archive' => true
)
);
} 

function malfsearch(){
$code=$_POST['code'];
remove_all_filters('posts_orderby');
$args=array( 'post_type' => 'malfunction',
    'order' => 'ASC',
     'orderby' => 'date',
    'showposts' => -1,
    );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
$result = '<div class="loader"></div><ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
$post_code=get_post_meta(get_the_id(),"error_code",true);
if($post_code==$code)
{
$class='active';
}
else{ $class=''; }
$result.= '<li><a href="#" class="'.$class.'">' .$post_code.' '. get_the_title() . '</a></li>';
}
$result.= '</ul>';
/* Restore original Post Data */
wp_reset_postdata();
 
} 
die($result); 
    
}
add_action( 'wp_ajax_nopriv_malfsearch', 'malfsearch' );  
add_action( 'wp_ajax_malfsearch', 'malfsearch' );

function malfname(){
$name=strtolower($_POST['malfname']);
remove_all_filters('posts_orderby');
$args=array( 'post_type' => 'malfunction',
    'order' => 'ASC',
    'orderby' => 'date',
    'showposts' => -1,
    );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
$result = '<div class="loader"></div><ul>';
while ( $the_query->have_posts() ) {
$the_query->the_post();
$post_code=get_post_meta(get_the_id(),"error_code",true);
$title=strtolower(get_the_title());
$pos.= strpos($title,$name);
if(stripos($title,$name) !== false) { $class='active'; }
else { $class=''; }

$result.= '<li><a href="#" class="'.$class.'">' .$post_code.' '. get_the_title() . '</a></li>';
}
$result.= '</ul>';
/* Restore original Post Data */
wp_reset_postdata();
 
} 
die($result); 
    
}
add_action( 'wp_ajax_nopriv_malfname', 'malfname' );  
add_action( 'wp_ajax_malfname', 'malfname' );