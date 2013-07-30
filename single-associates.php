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
	</div><!-- .grid_12 end -->


<?php endwhile; endif; ?>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>