<?php get_header(); ?>
<div class="content borderTop_1">
<div class="gridset">



	
	
    <?php $my_query = new WP_Query(array('post__not_in'=> $do_not_duplicate, 
							'orderby' => 'rand',
							'category_name' => 'projects', 
							'posts_per_page' => 20, 
							'paged' => $paged));
    while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID; ?>
	
	<?php get_template_part( 'entry' ); ?>
    <?php endwhile; ?>
	
	

		
	
	<?php query_posts(array('category_name' => 'news', 'posts_per_page' => 3, 'paged' => $paged)) ?>
	<?php while ( have_posts() ) : the_post() ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; ?>
	<script> PLB.placeNewsItems() </script>
</div><!--gridset-->

	<?php wp_reset_query(); ?>
		<div class="navigation"><?php posts_nav_link(); ?></div>
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>