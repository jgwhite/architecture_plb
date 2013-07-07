<?php
/**
 * Template Name: Project List
 */ 
get_header(); ?>
	<div class="content borderTop_1">
		<div class="two-auto-col">
			<?php while(has_sub_field("add_listing")): ?>
				<?php if(get_row_layout() == "add_manual_project"): ?>
					<?php the_sub_field("project_name"); ?>
				<?php elseif(get_row_layout() == "add_live_project"): ?>
					<a href="<?php the_sub_field("link_a_live_project"); ?>"><?php the_sub_field("link_title"); ?></a>
				<?php endif; ?>
			<?php endwhile; ?>
		</div><!-- .two-auto-col -->
	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>