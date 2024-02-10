<?php
register_nav_menus(array(
    'primary-menu'=>'top header')
);

?>
<?php
 function custom_css() {
   wp_enqueue_style('main-style', get_stylesheet_uri() );
   wp_enqueue_style('main-one-style', get_template_directory_uri()."/css/style.css" );

}

add_action('wp_enqueue_scripts', 'custom_css' );


add_theme_support( 'post-thumbnails' );
add_theme_support('custom-header') ;

?>

