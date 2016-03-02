<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts(){

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('jquery', get_bloginfo('template_url') . '/js/vendor/jquery/jquery.js');
	wp_enqueue_script('jquery');

	wp_register_script('mmenu', get_bloginfo('template_url') . '/js/jquery.mmenu.min.all.js');
	wp_enqueue_script('mmenu');

	wp_register_script('slick', get_bloginfo('template_url') . '/js/slick.js');
	wp_enqueue_script('slick');

	wp_register_script('slimscroll', get_bloginfo('template_url') . '/node_modules/jquery-slimscroll/jquery.slimscroll.min.js');
	wp_enqueue_script('slimscroll');

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js');

	wp_enqueue_script('global');

	// Localize the script with new data
	$translation_array = array(
		'templateDirectory' => get_template_directory_uri()
	);
	wp_localize_script( 'global', 'path', $translation_array );

	// Enqueued script with localized data.
	wp_enqueue_script( 'global' );

	wp_enqueue_style('mmenu', get_bloginfo('template_url') . '/css/jquery.mmenu.all.css');

	wp_enqueue_style('devices', get_bloginfo('template_url') . '/css/devices.min.css');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}//end register_widgets()
add_action( 'widgets_init', 'register_widgets' );

//ADD CLASS ACTIVE ON MENU-ITEM
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 );

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}



