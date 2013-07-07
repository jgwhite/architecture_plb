<?php get_header(); ?>
<div class="content borderTop_1">
	<?php query_posts("cat=9&orderby=rand"); ?>
	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>