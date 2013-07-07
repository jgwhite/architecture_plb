<div class="sidebar">
	<a href="<?php echo home_url(); ?>" class="mainlogo"><img src="<?php the_field('logo', 'option'); ?>" alt="Architecture PLB"></a>
	<div class="sidebar_copy_area borderTop_1">
		<p><?php the_field('company_introduction', 'option'); ?></p>
	</div><!-- .sidebar_copy_area -->
	
	<div class="sidebar_menu_area borderTop_1">
		<ul class="main_nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</ul>
		
		
		
		<?php if (is_front_page()) { ?>
				<ul class="project_filter">
				<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
				</ul>
			<?php } ?>

		
		
		
	
	</div><!-- .sidebar_menu_area -->
	
	<div class="search_box borderTop_1">
		<?php get_search_form( $echo ); ?>
	</div><!-- .search_box -->
	
	<div class="legal_info">
		<p class="small"><?php the_field('copyright_notice', 'option'); ?></p>
	</div><!-- .legal_info -->
</div><!-- .sidebar -->