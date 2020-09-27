<?php 
include 'custom/hooks/storefront_header.php';

	add_action( 'wp_enqueue_scripts', 'storefront_2_enqueue_styles' );
	function storefront_2_enqueue_styles() {
		 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
		 wp_enqueue_script('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', null, null, true);
		 wp_enqueue_style('slick-style', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', null, null);
		 wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', null, null);
		 wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/custom.js', null, null, true);
		 wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/custom.css', null, null);
		// echo get_page_template();
		// exit;
	} 


	add_action('storefront_header', 'override_storefront_header' );
	function override_storefront_header(){
		remove_action( 'storefront_header', 'storefront_site_branding', 20 );
		add_action('storefront_header', 'custom_site_branding', 20);
	}

 ?>