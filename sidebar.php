<div class="sidebar">
	<a href="<?php echo home_url(); ?>" class="mainlogo"><img src="<?php the_field('logo', 'option'); ?>" alt="Architecture PLB"></a>
	<div class="sidebar_copy_area borderTop_1">
		<?php if (is_front_page() || is_home()) { ?>
			<p><?php the_field('company_introduction', 'option'); ?></p>
		<?php } ?>

		<?php if (is_page( 'contact' )) { ?>
			<p><?php the_field('sidebar_information'); ?></p>
		<?php } ?>
		
		<?php if (is_page(array('team', 'about', 'recruitment', 'news' ))) { ?>
			<p><?php the_field('sidebar_information'); ?></p>
		<?php } ?>
		
		
		
		<?php if (in_category( 'projects')) { ?>
			<div class="projectMeta">
				<h3><b><?php the_field('project_name'); ?></b></h3>
				<h3><b>Completion Date</b> <?php the_field('completion_date'); ?></h3>
				<h3><b>Contract Value</b> <?php the_field('contract_value'); ?></h3>
				<h3><b>Client</b> <?php the_field('client'); ?></h3>			
			</div><!-- .projectMeta -->
			<p><?php the_field('project_description'); ?></p>
		<?php } ?>
	</div><!-- .sidebar_copy_area -->
	
	
	<?php if (in_category( 'projects')) { ?>
	<div class="related borderTop_1">
		<p>You may also like</p>
		<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post); ?>
		
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>"></a>
		  </li>
		
		<?php }
		
		wp_reset_postdata(); ?>
	</div><!-- .related -->
	<?php } ?>
	
	
	<div class="sidebar_menu_area borderTop_1">
		
		<ul class="main_nav">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</ul>
		
		<?php if (is_front_page() || is_home()) { ?>
			<ul class="project_filter isHome">
			<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (in_category( 'projects')) { ?>
			<ul class="project_filter InCategoryProjects">
			<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_page(array('team','about','recruitment'))) { ?>
			<ul class="project_filter isPageTeamAboutRecruitment">
			<?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_page( 'news' )) { ?>
			<ul class="project_filter isPageNews">
				<p class="lightgrey">Filter by</p>
			<?php wp_nav_menu( array( 'theme_location' => 'news-menu' ) ); ?>
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