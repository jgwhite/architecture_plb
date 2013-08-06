<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php wp_title("",true); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>

<script type="text/javascript">
    jQuery(document).ready(function($){
        // Get current url
        // Select an a element that has the matching href and apply a class of 'active'. Also prepend a - to the content of the link
        var url = window.location;
        $('.main_nav a[href="'+url+'"]').addClass('current_page_item');
    });
</script>
</head>
<body <?php body_class(); ?>>
	<div class="container">