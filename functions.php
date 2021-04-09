<?php //delete it

//SwiperJS Scripts
add_action( 'wp_enqueue_scripts', 'swiper_scripts_styles', 20 );
function swiper_scripts_styles() {
	wp_enqueue_style( 'swipercssbundle', get_stylesheet_directory_uri() . '/css/swiper-bundle.css' , array(), '6.4.11', 'all' );
  	wp_enqueue_script( 'swiperjsbundle', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), '6.4.11', true );
	wp_enqueue_script( 'swiperinit', get_stylesheet_directory_uri() . '/js/swiper-bundle-init.js', array( 'swiperjsbundle' ), '1.0.0', true );
}
