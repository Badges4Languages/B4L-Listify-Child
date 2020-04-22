<?php
/**
 * Listify child theme.
 */
function listify_child_styles() {
    wp_enqueue_style( 'listify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'listify_child_styles', 999 );


//Include all the files for shortcodes, menus, admin panel, taxonomies and files size option
require_once( "includes/include_script.php" );
require_once( "includes/shortcodes.php" );
require_once( "includes/custom_menu.php" );
require_once( "includes/admin.php" );
require_once( "includes/get_taxonomy_terms.php" );
require_once( "includes/limit_upload_size.php" );
