<?php 
/*
	Template Name: News
	Description: A page template with a custom loop ruuning to show a list of only 'posts' with the category of 'news'
*/
?>
<?php get_header(); ?>
<div class="content borderTop_1">
	<?php $temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('category_name=news&showposts=3' . '&paged='.$paged);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	
	<div class="news_item">
		<li class="nostyle"><a href="<?php the_permalink(); ?>" title="Read more">
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
		</a></li>
	</div><!-- .newsitem -->
	
	<?php endwhile; ?>
	<?php if ($paged > 1) { ?>

	<div class="navigtaion">
		<div class="prev"><?php next_post_link('%link', 'Next post in category', TRUE); ?></div>	
		<div class="next"><?php previous_post_link('%link', 'Previous post in category', TRUE); ?></div>
	</div>
	
	<?php } else { ?>


	<?php } ?>
	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); /* Resets the Query, allows menu targeting by page to work */?> 
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>