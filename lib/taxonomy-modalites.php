<?php
// Register Taxonomy sommeil
function create_sommeil_ct() {

	$labels = array(
		'name'              => _x( 'sommeil', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'sommeil', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search sommeil', '_themename' ),
		'all_items'         => __( 'All sommeil', '_themename' ),
		'parent_item'       => __( 'Parent sommeil', '_themename' ),
		'parent_item_colon' => __( 'Parent sommeil:', '_themename' ),
		'edit_item'         => __( 'Edit sommeil', '_themename' ),
		'upsommeil_item'       => __( 'Upsommeil sommeil', '_themename' ),
		'add_new_item'      => __( 'Add New sommeil', '_themename' ),
		'new_item_name'     => __( 'New sommeil Name', '_themename' ),
		'menu_name'         => __( 'Modalité du sommeil', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        // 'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'sommeil of event', '_themename' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
        'capabilities'  => $capabilities,
	);
	register_taxonomy( 'sommeil', array('reve'), $args );

}
add_action( 'init', 'create_sommeil_ct' );



// Register Taxonomy sens
function create_sens_ct() {

	$labels = array(
		'name'              => _x( 'sens', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'sens', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search sens', '_themename' ),
		'all_items'         => __( 'All sens', '_themename' ),
		'parent_item'       => __( 'Parent sens', '_themename' ),
		'parent_item_colon' => __( 'Parent sens:', '_themename' ),
		'edit_item'         => __( 'Edit sens', '_themename' ),
		'upsens_item'       => __( 'Upsens sens', '_themename' ),
		'add_new_item'      => __( 'Add New sens', '_themename' ),
		'new_item_name'     => __( 'New sens Name', '_themename' ),
		'menu_name'         => __( 'Modalité du sens', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        // 'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'sens of event', '_themename' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
        'capabilities'  => $capabilities,
	);
	register_taxonomy( 'sens', array('reve'), $args );

}
add_action( 'init', 'create_sens_ct' );


// Register Taxonomy humeur
function create_humeur_ct() {

	$labels = array(
		'name'              => _x( 'humeur', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'humeur', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search humeur', '_themename' ),
		'all_items'         => __( 'All humeur', '_themename' ),
		'parent_item'       => __( 'Parent humeur', '_themename' ),
		'parent_item_colon' => __( 'Parent humeur:', '_themename' ),
		'edit_item'         => __( 'Edit humeur', '_themename' ),
		'uphumeur_item'       => __( 'Uphumeur humeur', '_themename' ),
		'add_new_item'      => __( 'Add New humeur', '_themename' ),
		'new_item_name'     => __( 'New humeur Name', '_themename' ),
		'menu_name'         => __( 'Modalité du humeur', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        // 'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'humeur of event', '_themename' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
        'capabilities'  => $capabilities,
	);
	register_taxonomy( 'humeur', array('reve'), $args );

}
add_action( 'init', 'create_humeur_ct' );

// Register Taxonomy lieu
function create_lieu_ct() {

	$labels = array(
		'name'              => _x( 'lieu', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'lieu', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search lieu', '_themename' ),
		'all_items'         => __( 'All lieu', '_themename' ),
		'parent_item'       => __( 'Parent lieu', '_themename' ),
		'parent_item_colon' => __( 'Parent lieu:', '_themename' ),
		'edit_item'         => __( 'Edit lieu', '_themename' ),
		'uplieu_item'       => __( 'Uplieu lieu', '_themename' ),
		'add_new_item'      => __( 'Add New lieu', '_themename' ),
		'new_item_name'     => __( 'New lieu Name', '_themename' ),
		'menu_name'         => __( 'Modalité du lieu', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        // 'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'lieu of event', '_themename' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
        'capabilities'  => $capabilities,
	);
	register_taxonomy( 'lieu', array('reve'), $args );

}
add_action( 'init', 'create_lieu_ct' );
