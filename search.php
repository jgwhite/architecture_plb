<?php get_header(); ?>
<div class="content borderTop_1">
	<div id="content">
		<div class="grid_4">
			<p><b><?php printf( __( 'Results for: %s', 'blankslate' ), '<span>' . get_search_query()  . '</span>' ); ?></b></p>
		</div><!-- .grid_4 -->



		<div class="grid_18 end">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post() ?>
			<li class="search">
				

							<a href="<?php the_permalink(); ?>" 
							title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
							<div class="search_item borderTop_1 paddingTop_07">
								<div class="searchContainer">							
	
									<?php if( get_field( "thumbnail_image" ) ): ?>
										<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>" alt="">
									<?php endif;?>
									
									<?php if( get_field( "picture" ) ): ?>
										<img class="imagefit" src="<?php the_field('picture'); ?>" alt="">
									<?php endif;?>
								</div><!--thumbnailContainer-->
							
								<div class="searchDescription">
									<?php if( get_field( "project_name" ) ): ?>
									    <h3><?php the_field('project_name'); ?></h3>
									<?php endif;?>
									
									<?php if( get_field( "name" ) ): ?>
									    <h3><?php the_field('name'); ?></h3>
									<?php endif;?>
									
									<?php if( get_field( "position_held" ) ): ?>
									    <h3><?php the_field('position_held'); ?></h3>
									<?php endif;?>
									
									<?php if( get_field( "location" ) ): ?>
									    <h3><?php the_field('location'); ?></h3>
									<?php endif;?>
									
									<?php if( get_field( "client" ) ): ?>
									    <h3><?php the_field('client'); ?></h3>
									<?php endif;?>
								
									<?php if( get_field( "job_description" ) ): ?>
									    <h3><?php the_field('job_description'); ?></h3>
									<?php endif;?>
		
									<?php if( get_field( "homepage_intro" ) ): ?>
											<h2>News</h2>
									    <h3><?php the_field('homepage_intro'); ?></h3>
									<?php endif;?>										
									<h3 class="underline">Read More</h3>
								</div><!-- .thumbnailDescription -->
								</div><!-- .search_item borderTop_1 paddingTop_07 -->
							</a>

				
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
			</div><!-- .grid_19 end -->		
	</div>
</div><!-- .content -->

<script type="text/javascript" charset="utf-8">
	$("div.searchContainer img").each(function(index) {
	    $(this).delay(400*index).fadeIn(300);
	});
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>