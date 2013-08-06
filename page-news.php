<?php 
/*
	Template Name: News
	Description: A page template with a custom loop ruuning to show a list of only 'posts' with the category of 'news'
*/
?>
<?php get_header(); ?>
<div class="content nopadding">
	<?php query_posts(array('category_name' => 'news', 'posts_per_page' => 6, 'paged' => $paged)) ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>
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
	
	<?php endwhile; endif; ?>

<div class="navigation"><?php posts_nav_link(); ?></div>
	

	<?php wp_reset_postdata(); ?>
	<?php wp_reset_query(); /* Resets the Query, allows menu targeting by page to work */?> 

</div><!-- .content -->
<?php get_sidebar(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.infinitescroll.min.js"></script>
<script type="text/javascript">
  $('div.content').infinitescroll({
    navSelector  : "div.navigation",            
    nextSelector : "div.navigation a:first",                  
    itemSelector : "div.content div.news_item",
		loadingText  : "Loading...",
		loadingImg   : "/wp-content/themes/theme-plb/images/ajax-loader.gif",          
		donetext     : "Finished"
  });
</script>
<?php get_footer(); ?>