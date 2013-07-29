<?php
add_theme_support( 'menus' );

add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'projects-menu' => __( 'Project Categories' ),
			'about-menu' => __( 'About Us' ),
			'news-menu' => __( 'News' )
    )
  );
}

add_action('admin_menu', 'news_menu');
function news_menu() {
add_submenu_page('edit.php', 'News', 'News', 'manage_options', 'edit.php?category_name=news' ); }

add_action('admin_menu', 'projects_menu');
function projects_menu() {
add_submenu_page('edit.php', 'Projects', 'Projects', 'manage_options', 'edit.php?category_name=projects' ); }

add_action('admin_menu', 'directors_menu');
function directors_menu() {
add_submenu_page('edit.php', 'Directors', 'Directors', 'manage_options', 'edit.php?category_name=directors' ); }

add_action('admin_menu', 'associates_menu');
function associates_menu() {
add_submenu_page('edit.php', 'Associates', 'Associates', 'manage_options', 'edit.php?category_name=associates' ); }

?>