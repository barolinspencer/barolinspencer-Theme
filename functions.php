<?php

function bs_custom_post_staff () {
    $labels = array(
		'name'               => _x( 'Staff', 'post type general name' ),
		'singular_name'      => _x( 'Staff', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Staff' ),
		'edit_item'          => __( 'Edit Staff' ),
		'new_item'           => __( 'New Staff' ),
		'all_items'          => __( 'All Staff' ),
		'view_item'          => __( 'View Staff' ),
		'search_items'       => __( 'Search Staff' ),
		'not_found'          => __( 'No staff found' ),
		'not_found_in_trash' => __( 'No staff found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Staff'
	);
    
    $args = array(
		'labels'        => $labels,
		'description'   => 'Holds our staff specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
	);
    register_post_type ('staff', $args);
}

add_action ( 'init', 'bs_custom_post_staff');

function my_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['staff'] = array(
		0 => '', 
		1 => sprintf( __('Staff member updated. <a href="%s">View staff member</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Staff updated.'),
		5 => isset($_GET['revision']) ? sprintf( __('Staff restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Staff published. <a href="%s">View staff</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Staff saved.'),
		8 => sprintf( __('Staff submitted. <a target="_blank" href="%s">Preview staff</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Staff scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview staff</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Staff draft updated. <a target="_blank" href="%s">Preview staff</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
	return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );