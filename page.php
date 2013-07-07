<?php get_header(); ?>
<div class="grid_16 mainView alpha">
	<article id="content">
	<?php the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="entry-content">
	<?php 
	if ( has_post_thumbnail() ) {
	the_post_thumbnail();
	} 
	?>
	<?php the_content(); ?>
	<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'blankslate' ) . '&after=</div>') ?>

	</div>
	</div>

	</article>
</div><!--grid_16-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>