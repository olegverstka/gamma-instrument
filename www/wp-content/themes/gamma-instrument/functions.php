<?php
// Отключение админбара для всех пользователей кроме Администратора
if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}

// Убираем лишнее из секции head html документа
add_action('init', 'remove_else_link');

function remove_else_link() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'feed_links_extra', 3 ); 
}
/**
* Загружаемые скрипты и стили
*/
function load_style_script() {
	// Отключение wordpress библиотеки jQuery
	wp_enqueue_script('jquery');
	wp_deregister_script('jquery');

	// Подключение своих скриптов js и jQuery
	wp_register_script('html5shiv', get_template_directory_uri().'/js/html5shiv.min.js', array(), '1.0', true);
	wp_enqueue_script('html5shiv');
	wp_register_script('jquery-1.11.2', get_template_directory_uri().'/js/jquery-1.11.2.min.js', array(), '1.0', true);
	wp_enqueue_script('jquery-1.11.2');
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap');
	//wp_register_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
	//wp_enqueue_script('main');

	// Подключение стилей к шаблону
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
}
/**
* Загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');