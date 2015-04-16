<?php
// Register Navigation Menus Left
function primary_menu_left() {

  $locations = array(
    'Main Menu Left' => __( 'Header Main Menu Left', 'text_domain' ),
  );
  register_nav_menus( $locations );

}
// Hook into the 'init' action
add_action( 'init', 'primary_menu_left' );

// Register Navigation Menus Right
function primary_menu_right() {

  $locations = array(
    'Main Menu Right' => __( 'Header Main Menu Right', 'text_domain' ),
  );
  register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'primary_menu_right' );

/**
 * Rewrite rule for custom post type
 * 
 */
function my_flush_rewrite_rules() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'my_flush_rewrite_rules' );