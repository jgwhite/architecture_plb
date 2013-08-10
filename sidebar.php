<div class="sidebar">
	<a href="<?php echo home_url(); ?>" class="mainlogo"><img src="<?php the_field('logo', 'option'); ?>" alt="Architecture PLB"></a>
	<div class="sidebar_copy_area borderTop_1">
		<?php if (is_front_page() || is_home()) { ?>
			<p><?php the_field('company_introduction', 'option'); ?></p>
		<?php } ?>
		
		<?php if (is_search()) { ?>
			<p><?php the_field('company_introduction', 'option'); ?></p>
		<?php } ?>
		
		<?php if (is_404()) { ?>
			<p><?php the_field('company_introduction', 'option'); ?></p>
		<?php } ?>

		<?php if (is_page( 'contact' )) { ?>
			<p><?php the_field('sidebar_information'); ?></p>
		<?php } ?>
		
		<?php if (is_page(array('team', 'about', 'recruitment', 'news', 'project-list' ))) { ?>
			<p><?php the_field('sidebar_information'); ?></p>
		<?php } ?>
		
		<?php if ( is_single() && in_category( 'news')) { ?>
			<p><?php the_field('sidebar_information', 7); ?></p>
		<?php } ?>
		
		<?php if ( is_single() && in_category(array('associates', 'directors' ))) { ?>
			<p><?php the_field('sidebar_information', 11); ?></p>
		<?php } ?>
		
		<?php if (is_category()) {?>
			<?php echo category_description(); ?>
		<?php } ?>
		
		<?php if ( is_single() && in_category( 'projects')) { ?>
			<p><?php the_field('sidebar_cat_description'); ?>
		<?php } ?>
 	</div><!-- .sidebar_copy_area -->
	
	
	<?php if (is_single() && in_category( 'projects')) { ?>
		<div class="shareDownload borderTop_1">
			<ul>
				<li class="twitter"><a href="https://twitter.com/share" data-lang="en">Share</a></li>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<li class="pdf"><a href="<?php the_field('pdf_download'); ?>">Download PDF</a></li>
			</ul>
		</div><!-- .shareDownload -->


	<div class="related borderTop_1">
		<p>You may also like</p>
		<?php $posts = get_field('related_projects');
			if( $posts ): ?>
			<?php foreach( $posts as $post): ?>
			<?php setup_postdata($post); ?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>"></a>
			</li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
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
		
		<?php if (is_search()) { ?>
				<ul class="project_filter isHome">
				<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
				</ul>
		<?php } ?>
		
		<?php if (is_single() && in_category( 'projects')) { ?>
			<ul class="project_filter InCategoryProjects">
			<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_page( 'project-list' )) { ?>
				<ul class="project_filter isProjectList">
				<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
				</ul>
		<?php } ?>
		
		<?php if (is_archive() && in_category( 'projects')) { ?>
				<ul class="project_filter isProjectList">
				<?php wp_nav_menu( array( 'theme_location' => 'projects-menu' ) ); ?>
				</ul>
		<?php } ?>
		
		
		
		<?php if (is_page(array('team','about','recruitment'))) { ?>
			<ul class="project_filter isPageTeamAboutRecruitment">
			<?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_single() && in_category( 'directors')) { ?>
			<ul class="project_filter isSingleDirectors">
			<?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
			</ul>
		<?php } ?>

		<?php if (is_single() && in_category( 'associates')) { ?>
			<ul class="project_filter isSingleAssociates">
			<?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_single() && in_category( 'news')) { ?>
			<ul class="project_filter isSingleNews">
			<?php wp_nav_menu( array( 'theme_location' => 'news-menu' ) ); ?>
			</ul>
		<?php } ?>
		
		<?php if (is_page( 'news' )) { ?>
			<ul class="project_filter isPageNews">
				<span class="lightgrey">Filter by</span>
			<?php wp_nav_menu( array( 'theme_location' => 'news-menu' ) ); ?>
			</ul>
		<?php } ?>

		
		<?php if (is_archive() && in_category( 'news')) { ?>
			<ul class="project_filter inCategoryNews">
				<span class="lightgrey">Filter by</span>
			<?php wp_nav_menu( array( 'theme_location' => 'news-menu' ) ); ?>
			</ul>
		<?php } ?>
			

	</div><!-- .sidebar_menu_area -->
	
	
	<div class="search_box borderTop_1">
		<?php get_search_form(); ?>
	</div><!-- .search_box -->
	
	<div class="legal_info">
		<p class="small"><?php the_field('copyright_notice', 'option'); ?></p>
	</div><!-- .legal_info -->
</div><!-- .sidebar -->