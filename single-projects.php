<?php
/*
Single Post Template: Project
Description: Outputs the project, uses Advanced Custom Fields to generate the content, see 'Projects' field group
*/
?>

<?php get_header(); ?>
<div class="content borderTop_1">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>			


<!--start advanced custom fields-->

<div class="projectDetails">
	<p><b><?php the_field('project_name'); ?></b></p>
	<p><b>Completion Date</b> <?php the_field('completion_date'); ?></p>
	<p><b>Contract Value</b> <?php the_field('contract_value'); ?></p>
	<p><b>Client</b> <?php the_field('client'); ?></p>	
</div><!-- .projectDetails -->

<div class="projectDescription">
	<p><?php the_field('project_description'); ?></p>
</div><!-- .projectDescription -->

<div class="projectSlideshow">
	<?php if (get_field("slideshow_image")): ?>
		<?php while(the_flexible_field("slideshow_image")): ?>
			<?php if(get_row_layout() == "add_image"): ?>
				<img src="<?php the_sub_field("image"); ?>" width="630" height="auto">	
			<?php endif; ?>
   	<?php endwhile; endif; ?>
</div><!-- .projectSlideshow -->
	<div class="nav">
	<a id="prev2" class="leftarrow" href="#">Previous</a> 
	<a id="next2" class="rightarrow" href="#">Next</a>
</div>

<!--end advanced custom fields-->

<?php endwhile; endif; ?>
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>