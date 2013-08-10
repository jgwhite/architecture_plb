<?php get_header(); ?>
<div class="content nopadding">


<?php the_post(); ?>


<?php rewind_posts(); ?>
<?php get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<div class="news_item borderTop_1 paddingTop_07">
		<li class="nostyle">
				<div class="grid_10">
					<h2><?php the_title(); ?></h2>
					<p>Date posted: <?php the_time('l j F Y'); ?></p>
					<?php the_field( "introduction_text" ); ?>
					
				
					
			
					<?php if( get_field( "read_more_text" ) ): ?>
					<a href="<?php the_permalink(); ?>" title="Read more">Read more &#8594;</a>
					<?php endif; ?>

		</div><!-- .grid_10 -->
		
		<?php if( get_field( "thumbnail_image" ) ): ?>
		<div class="grid_12 end">
			<img class="imagefit marginBtm_1" src="<?php the_field( "thumbnail_image" ); ?>">
		</div><!-- .grid_12 -->
		<?php endif; ?>
		
		<?php if( get_field( "feature_video" ) ): ?>
		<div class="grid_12 end">
			<?php the_field( "feature_video" ); ?>
		</div><!-- .grid_12 -->
		<?php endif; ?>
		</li>
	</div><!-- .newsitem -->

<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>

</div><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>