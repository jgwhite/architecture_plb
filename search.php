<?php get_header(); ?>
<div class="content borderTop_1">
	<div id="content">
	<?php if ( have_posts() ) : ?>


	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
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