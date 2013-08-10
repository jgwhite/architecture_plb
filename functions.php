<?php
//Adds Menu support to the theme
add_theme_support( 'menus' );


//Registers the name of the menus with Wordpress Menus feature
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
//Ends


//Adds support for single-name.php templates
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);
//Ends


//Creates links under 'Posts' in the Admin UI to the main types of posts
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
//Ends


//Targets all sub categories of News with the archive-news.php template 
function myTemplateSelect() {
    if (is_category() && !is_feed()) {
        if (is_category(get_cat_id('news')) || cat_is_ancestor_of(get_cat_id('news'), get_query_var('cat'))) {
            load_template(TEMPLATEPATH . '/category-news.php');
            exit;
        }
    }
}
add_action('template_redirect', 'myTemplateSelect');
//Ends




add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2 );
function current_type_nav_class($classes, $item) {
    $post_type = get_post_type();
    if ($item->attr_title != '' && $item->attr_title == $post_type) {
        array_push($classes, 'current-menu-item');
    };
    return $classes;
}


?>