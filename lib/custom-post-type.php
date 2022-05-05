<?php
function _themename_create_reve_cpt() {

    $labels = array(
        'name' => _x( 'Rêves', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'Rêve', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Rêves', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'Rêve', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives Reve', '_themename' ),
        'attributes' => __( 'Attributs reve', '_themename' ),
        'parent_item_colon' => __( 'Parents reve:', '_themename' ),
        'all_items' => __( 'Tous les Rêves', '_themename' ),
        'add_new_item' => __( 'Ajouter un nouvel Reve', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvel reve', '_themename' ),
        'edit_item' => __( 'Modifier l\'reve', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'reve', '_themename' ),
        'view_item' => __( 'Voir reve', '_themename' ),
        'view_items' => __( 'Voir reves', '_themename' ),
        'search_items' => __( 'Rechercher dans les reve', '_themename' ),
        'not_found' => __( 'Aucun rêve trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucun reve trouvé dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans reve', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cet reve', '_themename' ),
        'items_list' => __( 'Liste reves', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste reves', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste reves', '_themename' ),
    );
    $args = array(
        'label' => __( 'reve', '_themename' ),
        'description' => __( 'Les rêves', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-feedback',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array( 'rubrique' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'reve', $args );

}
add_action( 'init', '_themename_create_reve_cpt', 0 );

function _themename_create_reveur_cpt() {

    $labels = array(
        'name' => _x( 'reveurs', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'reveur', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'reveurs', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'reveur', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives reveur', '_themename' ),
        'attributes' => __( 'Attributs reveur', '_themename' ),
        'parent_item_colon' => __( 'Parents reveur:', '_themename' ),
        'all_items' => __( 'Tous les reveurs', '_themename' ),
        'add_new_item' => __( 'Ajouter nouvelle reveur', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvelle reveur', '_themename' ),
        'edit_item' => __( 'Modifier l\'reveur', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'reveur', '_themename' ),
        'view_item' => __( 'Voir reveur', '_themename' ),
        'view_items' => __( 'Voir reveurs', '_themename' ),
        'search_items' => __( 'Rechercher dans les reveurs', '_themename' ),
        'not_found' => __( 'Aucune reveur trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucune reveur trouvée dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans reveur', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cette reveur', '_themename' ),
        'items_list' => __( 'Liste des reveurs', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste reveurs', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste reveurs', '_themename' ),
    );
    $args = array(
        'label' => __( 'reveurs', '_themename' ),
        'description' => __( 'Les reveurs', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title'),
        'taxonomies' => array( 'rubrique' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'reveur', $args );

}
add_action( 'init', '_themename_create_reveur_cpt', 0 );
