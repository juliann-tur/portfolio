<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
	wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');
// Register a new navigation menu
function add_Navs() {
  register_nav_menu('header',__( 'Header' ));
  register_nav_menu('footer-social',__( 'Footer Social' ));
  register_nav_menu('footer-projects',__( 'Footer Projects' ));
  register_nav_menu('footer-navigation',__( 'Footer Nav' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Navs' );
?>