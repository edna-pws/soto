<?php 
// Register Custom Post Type for Promos
function promos() {

    $labels = array(
        'name'                => _x( 'Promos', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Promo', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Promos', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Promo:', 'text_domain' ),
        'all_items'           => __( 'All Promos', 'text_domain' ),
        'view_item'           => __( 'View Promo', 'text_domain' ),
        'add_new_item'        => __( 'Add New Promo', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Promo', 'text_domain' ),
        'update_item'         => __( 'Update Promo', 'text_domain' ),
        'search_items'        => __( 'Search Promo', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'promos', 'text_domain' ),
        'description'         => __( 'Promos for SotoGrande', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'taxonomies'          => array( 'promos-category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'promos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'promos', 0 );

// Register Custom Taxonomy for Promos
function promos_category() {

    $labels = array(
        'name'                       => _x( 'Promos Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Promos Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Promos Category', 'text_domain' ),
        'all_items'                  => __( 'All Promos Category', 'text_domain' ),
        'parent_item'                => __( 'Parent Promos Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Promos Category:', 'text_domain' ),
        'new_item_name'              => __( 'New Promos Category', 'text_domain' ),
        'add_new_item'               => __( 'Add New Promos Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit Promos Category', 'text_domain' ),
        'update_item'                => __( 'Update Promos Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Promos Category with commas', 'text_domain' ),
        'search_items'               => __( 'Search Promos Category', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Promos Category', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used Promos Category', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'promos-category', array( 'promos' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'promos_category', 0 );

// Register Custom Post Type for Meetings
function meetings() {

    $labels = array(
        'name'                => _x( 'Meeting Post', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Meeting Post', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Meeting and Banquet', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Meeting Post:', 'text_domain' ),
        'all_items'           => __( 'All Meeting Posts', 'text_domain' ),
        'view_item'           => __( 'View Meeting Post', 'text_domain' ),
        'add_new_item'        => __( 'Add New Meeting Post', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Meeting Post', 'text_domain' ),
        'update_item'         => __( 'Update Meeting Post', 'text_domain' ),
        'search_items'        => __( 'Search Meeting Post', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'meetings', 'text_domain' ),
        'description'         => __( 'Meeting Post', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-groups',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'meetings', $args );

}

// Hook into the 'init' action
add_action( 'init', 'meetings', 0 );

// Register Custom Post Type for Rooms
function rooms() {

    $labels = array(
        'name'                => _x( 'Rooms', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Room Post', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Rooms', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Room Post:', 'text_domain' ),
        'all_items'           => __( 'All Room Posts', 'text_domain' ),
        'view_item'           => __( 'View Room Post', 'text_domain' ),
        'add_new_item'        => __( 'Add New Room Post', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Room Post', 'text_domain' ),
        'update_item'         => __( 'Update Room Post', 'text_domain' ),
        'search_items'        => __( 'Search Room Post', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'rooms', 'text_domain' ),
        'description'         => __( 'Room Post', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-network',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'rooms', $args );

}

// Hook into the 'init' action
add_action( 'init', 'rooms', 0 );


// Register Custom Post Type for Properties
function properties() {

    $labels = array(
        'name'                => _x( 'Properties', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Property', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Properties', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Property:', 'text_domain' ),
        'all_items'           => __( 'All Properties', 'text_domain' ),
        'view_item'           => __( 'View Property', 'text_domain' ),
        'add_new_item'        => __( 'Add New Property', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Property', 'text_domain' ),
        'update_item'         => __( 'Update Property', 'text_domain' ),
        'search_items'        => __( 'Search Property', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'properties', 'text_domain' ),
        'description'         => __( 'SotoGrande Properties', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-home',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'properties', $args );

}

// Hook into the 'init' action
add_action( 'init', 'properties', 0 );

// Register Custom Post Type Availability
function availability() {

    $labels = array(
        'name'                => _x( 'Availability Post Types', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Availability Post Type', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Availability', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Availability Item:', 'text_domain' ),
        'all_items'           => __( 'All Availability Items', 'text_domain' ),
        'view_item'           => __( 'View Availability Item', 'text_domain' ),
        'add_new_item'        => __( 'Add New Availability Item', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Availability Item', 'text_domain' ),
        'update_item'         => __( 'Update Availability Item', 'text_domain' ),
        'search_items'        => __( 'Search Availability Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'availability', 'text_domain' ),
        'description'         => __( 'Availability Post Type', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-clipboard',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'availability', $args );

}

// Hook into the 'init' action
add_action( 'init', 'availability', 0 );