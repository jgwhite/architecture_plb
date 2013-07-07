<div class="sidebar">
	<a href="<?php echo home_url(); ?>" class="mainlogo"><img src="<?php the_field('logo', 'option'); ?>" alt="Architecture PLB"></a>
	<div class="sidebar_copy_area borderTop_1">
		<?php if (is_front_page() || is_home()) { ?>
			<p><?php the_field('company_introduction', 'option'); ?></p>
		<?php } ?>

		<?php if (is_page( 'contact' )) { ?>
			<p><?php the_field('sidebar_information'); ?></p>
		<?php } ?>
		
		
		
	</div><!-- .sidebar_copy_area -->
	
	<div class="sidebar_menu_area borderTop_1">
		<ul class="main_nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</ul>
		
		
		
		<?php if (is_front_page() || is_home()) { ?>
				<ul class="project_filter">
				<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
				</ul>
		<?php } ?>
		
			<?php if (is_page( 'about' )) { ?>
					<ul class="project_filter">
					<?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
					</ul>
			<?php } ?>
			
			<?php if (is_page( 'news' )) { ?>
					<ul class="project_filter">
					<?php wp_list_categories( "cat=10" ); ?> 
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