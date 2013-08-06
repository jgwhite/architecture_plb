<?php
/*
Single Post Template: Associates
Description: 
*/
?>

<?php get_header(); ?>
<div class="content borderTop_1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="grid_10">
		<h3><b><?php the_field( 'name' ); ?></b></h3>
		<h3><b><?php the_field( 'qualification' ); ?></b></h3>
		<h3><b><?php the_field( 'position_held' ); ?></b></h3>
		<?php the_field( 'profile' ); ?>
	</div><!-- .grid_10 -->

	<div class="grid_12 end">
		<img src="<?php the_field( 'picture' ); ?>" class="imagefit">	
		<div class="staffvisualmenu">
			<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID),'orderby' => 'rand', 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				<li class="seniorteam">
					<a href="<?php the_permalink(); ?>" title="Read more">
					<div class="thumbnailContainer">
						<div class="thumbnailDescription">
							<h3><?php the_field( 'name' ); ?></h3>
							<h3 class="underline">Read More</h3>
						</div><!-- .thumbnailDescription -->
						<img class="imagefit" src="<?php the_field( 'picture' ); ?>">
					</div><!--thumbnailContainer-->
					</a>
				</li>
				<?php }
					wp_reset_postdata(); ?>				
		</div><!-- .smallstaffmenu -->
	</div><!-- .grid_12 end -->
<?php endwhile; endif; ?>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>