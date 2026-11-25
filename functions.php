<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function senangbicara_setup() {
	// Judul halaman otomatis untuk SEO
	add_theme_support( 'title-tag' );

	// Mendukung gambar utama (Featured Image) saat admin awam upload artikel
	add_theme_support( 'post-thumbnails' );

	// HTML5 semantik untuk SEO & GEO AI
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	// Lokasi Menu Navigasi
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'senangbicara' ),
		)
	);
}
add_action( 'after_setup_theme', 'senangbicara_setup' );

// Bersihkan emoji script bawaan WP agar loading mobile super cepat
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
