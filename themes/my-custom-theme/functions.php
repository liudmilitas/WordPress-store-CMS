<?php function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_theme_support('post-thumbnails');

function wpdocs_custom_excerpt_length() {
    return 10;
}
  
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 15 );

function add_google_fonts() {
  wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

register_nav_menus(array(
  'nav-menu' => esc_html__('nav menu', 'store-wp'),
  'footer-nav' => esc_html__('footer nav', 'store-wp')
));

function create_post_type(){
  register_post_type(
        'stores',

        array(
            'labels' => array(
                'name' => __('stores'),
                'singular_name' => __('store'),
                'add_new_item' => __('add store', 'text_domain'),
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'stores'),
        )
    );
}

add_action('init', 'create_post_type');
