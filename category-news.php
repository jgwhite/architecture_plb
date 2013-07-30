<?php get_header(); ?>
<div class="content borderTop_1">
<div class="gridset">
	<p>test</p>
<?php the_post(); ?>


<?php rewind_posts(); ?>
<?php get_template_part( 'nav', 'above' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div><!--gridset-->
</div><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>