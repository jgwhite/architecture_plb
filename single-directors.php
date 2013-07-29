<?php
/*
Single Post Template: Directors
Description: 
*/
?>

<?php get_header(); ?>
<div class="content borderTop_1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	

<p><?php the_field( 'name' ); ?></p>
<p><?php the_field( 'qualification' ); ?></p>
<p><?php the_field( 'position_held' ); ?></p>
<p><?php the_field( 'profile' ); ?></p>
<img src="<?php the_field( 'picture' ); ?>">

<!--end advanced custom fields-->

<?php endwhile; endif; ?>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>