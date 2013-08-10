<?php get_header(); ?>
<div class="content nopadding">
	<div id="content">
	<?php if ( have_posts() ) : ?>


	<?php while ( have_posts() ) : the_post() ?>
<li class="search">
		<div class="search_item borderTop_1 paddingTop_07">
			<div id="post-<?php the_ID(); ?>" <?php post_class('search'); ?>>
	
				
						<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
							<div class="searchContainer">							
								<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>">
							</div><!--thumbnailContainer-->
						<div class="searchDescription">
							<?php if( get_field( "project_name" ) ): ?>
							    <h3><?php the_field('project_name'); ?></h3>
							<?php endif;?>
				
							<?php if( get_field( "client" ) ): ?>
							    <h3><?php the_field('client'); ?></h3>
							<?php endif;?>
				
							<?php if( get_field( "homepage_intro" ) ): ?>
									<h2>News</h2>
							    <h3><?php the_field('homepage_intro'); ?></h3>
							<?php endif;?>										
							<h3 class="underline">Read More</h3>
						</div><!-- .thumbnailDescription -->
					</a>
				
			</div> 
		</div><!-- .search_item borderTop_1 paddingTop_07 -->
		</li><!--li.search-->
		
	<?php endwhile; ?>

	<?php else : ?>
		<div id="post-0" class="post no-results not-found">
			<h2 class="entry-title"><?php _e( 'Nothing Found', 'blankslate' ) ?></h2>
			<div class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
			</div>
		</div>
	<?php endif; ?>
	</div>
	
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>