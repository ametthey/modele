<?php
// Register Custom Taxonomy
function _themename_create_taxonomy_lucidite_reve() {

	$labels = array(
		'name'                       => _x( 'Lucidites', 'Taxonomy General Name', '_themename' ),
		'singular_name'              => _x( 'Lucidite', 'Taxonomy Singular Name', '_themename' ),
		'menu_name'                  => __( 'Niveau de Lucidité', '_themename' ),
		'all_items'                  => __( 'Toutes les lucidites', '_themename' ),
		'parent_item'                => __( 'La lucidite aprent', '_themename' ),
		'parent_item_colon'          => __( 'Parent Item:', '_themename' ),
		'new_item_name'              => __( 'Ajouter un nouveau nom de lucidite', '_themename' ),
		'add_new_item'               => __( 'Ajouter une nouvelle lucidite', '_themename' ),
		'edit_item'                  => __( 'Modifier une lucidite', '_themename' ),
		'uptypologie_item'                => __( 'Mettre à jour une lucidite', '_themename' ),
		'view_item'                  => __( 'Voir la lucidite', '_themename' ),
		'separate_items_with_commas' => __( 'Séparer les lucidites par des virgules', '_themename' ),
		'add_or_remove_items'        => __( 'Ajouter ou Supprimer des lucidites', '_themename' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', '_themename' ),
		'popular_items'              => __( 'Lucidites populaires', '_themename' ),
		'search_items'               => __( 'Chercher les lucidites', '_themename' ),
		'not_found'                  => __( 'Not Found', '_themename' ),
		'no_terms'                   => __( 'No items', '_themename' ),
		'items_list'                 => __( 'Items list', '_themename' ),
		'items_list_navigation'      => __( 'Items list navigation', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities'               => $capabilities,
		'show_in_rest'               => false,
	);
	register_taxonomy( 'lucidite', array( 'reve' ), $args );

}
add_action( 'init', '_themename_create_taxonomy_lucidite_reve', 0 );

// Register Taxonomy typologie
function create_typologie_ct() {

	$labels = array(
		'name'              => _x( 'typologie', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'typologie', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search typologie', '_themename' ),
		'all_items'         => __( 'All typologie', '_themename' ),
		'parent_item'       => __( 'Parent typologie', '_themename' ),
		'parent_item_colon' => __( 'Parent typologie:', '_themename' ),
		'edit_item'         => __( 'Edit typologie', '_themename' ),
		'uptypologie_item'       => __( 'Uptypologie typologie', '_themename' ),
		'add_new_item'      => __( 'Add New typologie', '_themename' ),
		'new_item_name'     => __( 'New typologie Name', '_themename' ),
		'menu_name'         => __( 'Typologie de rêve', '_themename' ),
	);
	$capabilities = array(
        /* 'manage_terms'               => '', */
        'edit_terms'                 => '',
        /* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'typologie of event', '_themename' ),
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
	register_taxonomy( 'typologie', array('reve'), $args );

}
add_action( 'init', 'create_typologie_ct' );
