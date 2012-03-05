<?php 

/******************************
* Script Control
******************************/

/* Add New Class to Scheduled Posts */
add_action( 'load-edit.php', 'hsp_add_action' );
function hsp_add_action() {
	add_filter( 'post_class', 'hsp_post_class', 10, 3 );
}

function hsp_post_class($classes, $class, $post_id) {
	$status = get_post_status($post_id);
	if ( 'future' === $status ) {
		$classes[] = 'hsp-scheduled';
	}
	return $classes;
}


/* Enqueue Styles and Attach to Action */
function hsp_load_scripts() {
	wp_enqueue_style('hsp_styles', plugin_dir_url(__FILE__) . 'css/plugin-style.css');
}
add_action('admin_print_styles', 'hsp_load_scripts');

?>