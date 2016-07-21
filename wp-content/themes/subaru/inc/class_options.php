<?php
   add_action('admin_menu', 'option_setting_menu');
   function option_setting_menu() {
   //create new top-level menu
     add_menu_page('Custom Setting', 'Theme Settings', 'administrator', 'custom_setting', 'custom_settings_page', '', '3');
   //call register settings function
     add_action('admin_init', 'register_custom_setting');
   
   
   }
   function register_custom_setting() {
   //register our settings 
   
     register_setting('custom-settings-group', 'call');
	 register_setting('custom-settings-group', 'afterhours');
	 
	 register_setting('custom-settings-group', 'linkedin');
     register_setting('custom-settings-group', 'gplus');
     register_setting('custom-settings-group', 'twitter');
     register_setting('custom-settings-group', 'fb');
     register_setting('custom-settings-group', 'instagram');
     register_setting('custom-settings-group', 'email');
     register_setting('custom-settings-group', 'phone');
     register_setting('custom-settings-group', 'copy_right');
     register_setting('custom-settings-group', 'header_logo_image');
     register_setting('custom-settings-group', 'footer_text');
     register_setting('custom-settings-group', 'foorer_logo_image');
   
   }
   function custom_settings_page() {
     ?>
<div class="wrap">
   <h2>Manage Custom Settings</h2>
   <form method="post" action="options.php">
      <?php settings_fields('custom-settings-group');?>
      <?php ?>
      <table class="form-table">
         <tr>
            <th>
               <h1>Social Links</h1>
            </th>
         </tr>
		  <tr>
            <th scope="row">
               <h3>Call Now </h3>
            </th>
            <td>
               <input type="text" name="call" value="<?php echo get_option('call');?>" style=" width: 250px; " />
            </td>
         </tr>
		  <tr>
            <th scope="row">
               <h3>After Hours </h3>
            </th>
            <td>
               <input type="text" name="afterhours" value="<?php echo get_option('afterhours');?>" style=" width: 250px; " />
            </td>
         </tr> 
		 
		 
         <tr>
            <th scope="row">
               <h3>Facebook Link </h3>
            </th>
            <td>
               <input type="text" name="fb" value="<?php echo get_option('fb');?>" style=" width: 250px; " />
            </td>
         </tr>
         <tr>
            <th scope="row">
               <h3>Twitter Link </h3>
            </th>
            <td>
               <input type="text" name="twitter" value="<?php echo get_option('twitter');?>" style=" width: 250px; " />
            </td>
         </tr>
         <tr>
            <th scope="row">
               <h3>GPlus Link </h3>
            </th>
            <td>
               <input type="text" name="gplus" value="<?php echo get_option('gplus');?>" style=" width: 250px; " />
            </td>
         </tr>
		 <tr>
            <th scope="row">
               <h3>Linkedin </h3>
            </th>
            <td>
               <input type="text" name="linkedin" value="<?php echo get_option('linkedin');?>" style=" width: 250px; " />
            </td>
         </tr>
         <tr>
            <th scope="row">
               <h3>Instagram Link </h3>
            </th>
            <td>
               <input type="text" name="instagram" value="<?php echo get_option('instagram');?>" style=" width: 250px; " />
            </td>
         </tr>
         <tr>
            <th>
               <h1>Contact Info</h1>
            </th>
         </tr>         
         <tr>
            <th scope="row">
               <h3>Copy Right</h3>
            </th>
            <td>
               <textarea name="copy_right" rows="4" cols="10" style=" width: 250px; " /><?php echo get_option('copy_right');?></textarea>
            </td>
         </tr>
         <tr>
            <th>
               <h1>Logo Image</h1>
            </th>
         </tr>
         <tr valign="top">
            <th scope="row">
               <h3> Header Logo </h3>
            </th>
            <td><input type='text' id='header_logo_image' class='regular-text text-upload' name='header_logo_image'
               value='<?php echo esc_url(get_option('header_logo_image')); ?>'/>
               <input type='button' class='button button-upload' value='Upload an image'/></br>
               <img style='max-width: 300px;' src='<?php echo esc_url(get_option('header_logo_image')); ?>' class='preview-upload'/>
            </td>
         </tr>
         <tr valign="top">
            <th scope="row">
               <h3> Footer Logo </h3>
            </th>
            <td><input type='text' id='foorer_logo_image' class='regular-text text-upload' name='foorer_logo_image'
               value='<?php echo esc_url(get_option('foorer_logo_image')); ?>'/>
               <input type='button' class='button button-upload' value='Upload an image'/></br>
               <img style='max-width: 300px;' src='<?php echo esc_url(get_option('foorer_logo_image')); ?>' class='preview-upload'/>
            </td>
         </tr>         
         <tr valign="top">
            <th scope="row"></th>
            <td>
               <?php submit_button();?>
            </td>
         </tr>
      </table>
   </form>
</div>
<?php }
   function my_admin_setting_scripts() {
   wp_enqueue_script('media-upload');
   wp_enqueue_script('thickbox');
   wp_register_script('my-upload',get_template_directory_uri()."/js/wptuts-upload.js", array('jquery','media-upload','thickbox'));
   wp_enqueue_script('my-upload');
   }
   function my_admin_styles_setting() {
   wp_enqueue_style('thickbox');
   }
   add_action('admin_print_scripts', 'my_admin_setting_scripts');
   add_action('admin_print_styles', 'my_admin_styles_setting');
   
   ?>