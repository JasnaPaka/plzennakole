<?php

function plzennakole_setup() {
	// Načtení lokalizace
	load_theme_textdomain('plzennakole');

	// WordPress bude automaticky spravovat title webu
	add_theme_support('title-tag');

	// Odkazy na RSS do hlavičky
	add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'plzennakole_setup');


function plzennakole_scripts() {
	wp_enqueue_style('plzennakole-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'plzennakole_scripts');
