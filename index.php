<?php get_header(); ?>
<div class="content borderTop_1">
	<?php query_posts("orderby=rand"); ?>
	<?php while ( have_posts() ) : the_post() ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; ?>
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>