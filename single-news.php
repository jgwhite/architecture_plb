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
		<p><?php the_field( "read_more_text" ); ?></p>
	</div><!-- .grid_10 -->
	<?php endif; ?>



	<div class="grid_12 end">
	<?php if( get_field( "feature_video" ) ): ?>
		<?php the_field( "feature_video" ); ?>
	<?php endif; ?>
	<?php if( get_field( "thumbnail_image" ) ): ?>
		<img class="imagefit marginBtm_1" src="<?php the_field( "thumbnail_image" ); ?>">
		<?php while(has_sub_field("further_images")): ?>
			<?php if(get_row_layout() == "add_image"):  ?>
				<img class="imagefit marginBtm_1" src="<?php the_sub_field("image"); ?>">
			<?php endif; ?>
		<?php endwhile; ?>
	</div><!-- .grid_12 -->
	<?php endif; ?>	
	<?php endwhile; endif; ?>
<nav id="nav-posts" class="borderTop_1 paddingTop_07">
	
	<div class="prev"><?php previous_post_link('%link', '&#8592; Previous post', TRUE); ?></div>
	<div class="next"><?php next_post_link('%link', 'Next post &#8594;', TRUE); ?></div>	
</nav>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>



