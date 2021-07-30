<?php
if ( ! function_exists( 'islandspirit_setup' ) ) :

	function islandspirit_setup() {

		add_theme_support( 'post-thumbnails' );

        /**
         * Регистрирует меню
         */
		register_nav_menus( array(
			'main-menu' => 'Основное меню'
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'islandspirit_setup' );


/**
 * Регистрирует сайдбар
 */
function islandspirit_widgets_init() {
	register_sidebar( array(
		'name'          => 'Сайдбар на главной',
		'id'            => 'sidebar',
		'description'   => 'Основной сайдбар',
	) );
	register_sidebar( array(
		'name'          => 'Сайдбар в записях',
		'id'            => 'page-sidebar',
		'description'   => 'Виджеты на странице',
	) );
	register_sidebar( array(
		'name'          => 'Закрепленный виджет',
		'id'            => 'page-widgets',
		'description'   => 'Виджеты на странице',
	) );
}
add_action( 'widgets_init', 'islandspirit_widgets_init' );

/*
 * отключает стандартные виджеты Wordpress
 */
function bs_disable_default_widgets() {
    unregister_widget('WP_Widget_Archives'); // Архивы
    unregister_widget('WP_Widget_Calendar'); // Календарь
    unregister_widget('WP_Widget_Categories'); // Рубрики
    unregister_widget('WP_Widget_Meta'); // Мета
    unregister_widget('WP_Widget_Pages'); // Страницы
    unregister_widget('WP_Widget_Recent_Comments'); // Свежие комментарии
    unregister_widget('WP_Widget_Recent_Posts'); // Свежие записи
    unregister_widget('WP_Widget_RSS'); // RSS
    unregister_widget('WP_Widget_Search'); // Поиск
    unregister_widget('WP_Widget_Tag_Cloud'); // Облако меток
    unregister_widget('WP_Widget_Text'); // Текст
    unregister_widget('WP_Nav_Menu_Widget'); // Произвольное меню
}
add_action('widgets_init', 'bs_disable_default_widgets', 11);

/**
 * Отключает лишние поля в фоме комментариев
 */
function comment_hide_checkcdpr( $fields ) {
    unset( $fields['cookies'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_hide_checkcdpr' );

/**
 * Убирает в Yoast Seo разметку поиска
 */
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );

/**
 * Настройки отрывка постов
 */
add_filter( 'excerpt_length', function(){
    return 25;
} );
add_filter('excerpt_more', function($more) {
    return '...';
});


/**
 * Создаёт страницы настроек
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Общие настройки',
        'menu_title'	=> 'Настройки контента',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки сайта',
        'menu_title'	=> 'Настройки сайта',
        'slug'          => 'contacts',
        'parent_slug'	=> 'theme-general-settings',
    ));
}

/**
 * Подключает скрипты и стили
 */
function islandspirit_scripts() {
	wp_enqueue_style( 'islandspirit-style', get_stylesheet_uri() );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'arcticmodal', get_template_directory_uri() . '/assets/js/jquery.arcticmodal-0.3.min.js');
	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/main.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'islandspirit_scripts' );

/**
 * Файл с подключением виджетов
 */
require('inc/widgets/register-widget.php');

/**
 * Функция подсчёта количества просмотров
 */
require ('inc/postviews.php');

/**
 * Функция вывода корректного множественного числа
 */
require ('inc/plural-form.php');

/**
 * Хлебные крошки
 */
require ('inc/breadcrumbs.php');

/**
 * Кастомная пагинация
 */
require ('inc/pagination.php');

/**
 * URL Span
 */
require ('urlspan/urlspan.php');

