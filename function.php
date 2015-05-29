/**
 *  Rewrite custom taxonomy URL.
 *  @since 1.0
 *-------------------------------------------------------------------*/
/*
add_action('init','custom_taxonomies_rewrite');
function custom_taxonomies_rewrite(){
    add_rewrite_rule('^projects/([^/]*)/?','index.php?portfolio_page=$matches[1]','top');
}
*/


/**
 *  Remove Shortlink from head [from <head></head>]
 *  @since 1.0
 *-------------------------------------------------------------------*/

// remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


/**
 *  Create / Add custom image size
 *  @since 1.0
 *-------------------------------------------------------------------*/
/*
/*
  add_action( 'after_setup_theme', 'custom_theme_setup' );
  function custom_theme_setup() {
    add_image_size( 'category-thumb', 300 ); // 300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
  }
*/
