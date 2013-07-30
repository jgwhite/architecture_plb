<?php
/*
Single Post Template: News
Description: Outputs the only 'posts' that have the parent category of 'news' - displays the unique page for the news article
*/
?>

<?php get_header(); ?>


<div class="content borderTop_1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>		
	<?php if( get_field( "introduction_text" ) ): ?>
	<div class="grid_10">
		<h2><?php the_title(); ?></h2>
		<p>Date posted: <?php the_date(); ?></p>
		<p><?php the_field( "introduction_text" ); ?></p>
	</div><!-- .grid_10 -->
	<?php endif; ?>

	<?php if( get_field( "featured_image" ) ): ?>
	<div class="grid_12 end">
		<img class="imagefit" src="<?php the_field( "featured_image" ); ?>">
	</div><!-- .grid_12 -->
	<?php endif; ?>	
	<?php endwhile; endif; ?>
<nav id="nav-posts">
	<div class="prev"><?php next_post_link('%link', 'Next post', TRUE); ?></div>	
	<div class="next"><?php previous_post_link('%link', 'Previous post', TRUE); ?></div>
</nav>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>



