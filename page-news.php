<?php 
/*
	Template Name: News
	Description: A page template with a custom loop ruuning to show a list of only 'posts' with the category of 'news'
*/
?>
<?php get_header(); ?>
<div class="content nopadding">
	<?php query_posts(array('category_name' => 'news', 'posts_per_page' => 20, 'paged' => $paged)) ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	   <?php the_content(); ?>
			<div class="news_item borderTop_1 paddingTop_07">
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
	
	<?php endwhile; endif; ?>

<div class="navigation"><?php posts_nav_link(); ?></div>
	

	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); /* Resets the Query, allows menu targeting by page to work */?> 

</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>