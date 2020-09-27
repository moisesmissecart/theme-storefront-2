<?php 
include 'custom/hooks/storefront_header.php';

	add_action( 'wp_enqueue_scripts', 'storefront_2_enqueue_styles' );
	function storefront_2_enqueue_styles() {
 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
		// echo get_page_template();
		// exit;
	} 


	add_action('storefront_header', 'override_storefront_header' );
	function override_storefront_header(){
		remove_action( 'storefront_header', 'storefront_site_branding', 20 );
		add_action('storefront_header', 'custom_site_branding', 20);
	}

 ?>