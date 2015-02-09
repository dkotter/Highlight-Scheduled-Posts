<?php

/*
 * Add our post_class filter.
 *
 * @return void
 */
function hsp_add_action() {
	add_filter( 'post_class', 'hsp_post_class', 10, 3 );
}
add_action( 'load-edit.php', 'hsp_add_action' );

/*
 * Add scheduled class on future posts.
 *
 * @param array $classes Current set of classes.
 * @param string $class Current class.
 * @param int $post_id Current post ID.
 * @return array
 */
function hsp_post_class( $classes, $class, $post_id ) {
	$status = get_post_status( $post_id );
	if ( 'future' === $status ) {
		$classes[] = 'hsp-scheduled';
	}

	return $classes;
}

/*
 * Load our styles.
 *
 * @return void
 */
function hsp_load_scripts() {
	wp_enqueue_style( 'hsp_styles', plugin_dir_url( __FILE__ ) . 'css/plugin-style.css' );
}
add_action( 'admin_print_styles', 'hsp_load_scripts' );
