<?php

    if ( function_exists( 'add_theme_support' ) ) {
      add_theme_support( 'post-thumbnails' );
    }
        
    //main nav
    
    register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
    register_nav_menu( 'chart_nav', __( 'Chart navigation menu', 'mytheme' ) );
    
    
    //create post types
    
    add_action( 'init', 'create_my_post_types' );
    
    function create_my_post_types() {
    
    	register_post_type( 'fastcat',
    		array(
    			'labels' => array(
    				'name' => __( 'Fast Cats' ),
    				'singular_name' => __( 'Fast Cat' )
    			),
    			'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
    			'public' => true,
    
    		)
    	);
    	
    }
    
    
    
//    media uploader



$prefix = 'sic_';
 
$meta_box = array(
	'id' => 'my-meta-box',
	'title' => 'Fastcat Thumb',
	'page' => 'fastcat',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Thumb',
			'desc' => 'Select a Thumb',
			'id' => 'upload_image',
			'type' => 'text',
			'std' => ''
		),
		array(
			'name' => '',
			'desc' => 'Select an thumb Image',
			'id' => 'upload_image_button',
			'type' => 'button',
			'std' => 'Browse'
		),
		
		array(
			'name' => 'Title Text',
			'desc' => 'add title text',
			'id' => 'title_text',
			'type' => 'text',
			'std' => ''
		),
		
		array(
			'name' => 'Sub Text',
			'desc' => 'add sub text',
			'id' => 'sub_text',
			'type' => 'text',
			'std' => ''
		),
		
		
	)
);
 
add_action('admin_menu', 'mytheme_add_box');
 
// Add meta box
function mytheme_add_box() {
	global $meta_box;
 
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}
 
// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
 
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
 
	echo '<table class="form-table">';
 
	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
 
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
 
 
 
 
//If Text		
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
 
 
//If Text Area			
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
 
 
//If Button	
 
				case 'button':
				echo '<input type="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
 
	echo '</table>';
}
 
add_action('save_post', 'mytheme_save_data');
 
// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
 
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
 
	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
 
	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
 
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
 
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
 
function my_admin_scripts() {
wp_enqueue_script('media-upload');
wp_enqueue_script('thickbox');
wp_register_script('my-upload', get_bloginfo('template_url') . '/js/functions-script.js', array('jquery','media-upload','thickbox'));
wp_enqueue_script('my-upload');
}
function my_admin_styles() {
wp_enqueue_style('thickbox');
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');







?>