<?php
// Register Custom Post Type Journal
    function journal_post_type() {

        $labels = array(
            'name'                  => _x( 'Journal', 'Post Type General Name', 'theme_name' ),
            'singular_name'         => _x( 'Journal', 'Post Type Singular Name', 'theme_name' ),
            'menu_name'             => __( 'Journal', 'theme_name' ),
            'name_admin_bar'        => __( 'Journal', 'theme_name' ),
            'archives'              => __( 'Item Archives', 'theme_name' ),
            'attributes'            => __( 'Item Attributes', 'theme_name' ),
            'parent_item_colon'     => __( 'Parent Item:', 'theme_name' ),
            'all_items'             => __( 'All Journal Entries', 'theme_name' ),
            'add_new_item'          => __( 'Add New', 'theme_name' ),
            'add_new'               => __( 'Add New', 'theme_name' ),
            'new_item'              => __( 'New Item Journal Entry', 'theme_name' ),
            'edit_item'             => __( 'Edit Journal Entry', 'theme_name' ),
            'update_item'           => __( 'Update Journal Entry', 'theme_name' ),
            'view_item'             => __( 'View Journal Entry', 'theme_name' ),
            'view_items'            => __( 'View Journal Entries', 'theme_name' ),
            'search_items'          => __( 'Search Journal Entries', 'theme_name' ),
            'not_found'             => __( 'Post Type Name Member Not found', 'theme_name' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'theme_name' ),
            'featured_image'        => __( 'Featured Image', 'theme_name' ),
            'set_featured_image'    => __( 'Set featured image', 'theme_name' ),
            'remove_featured_image' => __( 'Remove featured image', 'theme_name' ),
            'use_featured_image'    => __( 'Use as featured image', 'theme_name' ),
            'insert_into_item'      => __( 'Insert into item', 'theme_name' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Post Type Name Member', 'theme_name' ),
            'items_list'            => __( 'Items list', 'theme_name' ),
            'items_list_navigation' => __( 'Items list navigation', 'theme_name' ),
            'filter_items_list'     => __( 'Filter items list', 'theme_name' ),
        );
        $args = array(
            'label'                 => __( 'Post Type Name', 'theme_name' ),
            'description'           => __( 'Post Type description', 'theme_name' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'taxonomies'            => array( ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'         	=> 'dashicons-book',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'journal', $args );

    }
    add_action( 'init', 'journal_post_type', 0 );

?>