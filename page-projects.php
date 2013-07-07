<?php get_header(); ?>
	<div class="content borderTop_1">
		<?php while ( have_posts() ) : the_post() ?>
		
		<div id="post-<?php the_ID(); ?>" class="homepage_post">
			<?php the_content(); ?>
			<li class="project">
				<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
					<div class="thumbnailContainer">
						<div class="thumbnailDescription">
							<h3><?php the_field('project_name'); ?></h3>
							<h3><?php the_field('client'); ?></h3>
							<h3 class="underline">Read More</h3>
						</div><!-- .thumbnailDescription -->
						<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>">
					</div><!--thumbnailContainer-->
				</a>
			</li><!--li.project-->
			</div><!--post--> 
			<?php endwhile; ?>
				
	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>