<?php
/**
 * Template Name: Recruitment
 */ 
get_header(); ?>
	<div class="content nopadding">
			<?php if(get_field('job_vacancy')): ?>
				<?php while(has_sub_field('job_vacancy')): ?>
					<div class="news_item borderTop_1 paddingTop_07">
				<div class="grid_10">
					<?php the_sub_field('job_description'); ?>
				</div>
				
				<div class="grid_12 end">
					<img class="imagefit marginBtm_1" src="<?php the_sub_field('image'); ?>">
				</div>
			<?php endwhile; ?>
			</div><!-- .newsitem -->
		<?php endif; ?>
	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>