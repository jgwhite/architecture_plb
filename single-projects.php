<?php
/*
Single Post Template: Project
Description: Outputs the project, uses Advanced Custom Fields to generate the content, see 'Projects' field group
*/
?>

<?php get_header(); ?>

<div class="viewer">
	<!-- 
	Everything inside the single-projects.php 
	needs to now be in a viewer. From the homepage
	this will get loaded dynamically when a project
	is clicked. When visiting the permalink it 
	will show as if the dynamic bit
	has been done.
	-->

	<div class="content single-content borderTop_1">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>			


	<!--start advanced custom fields-->
	<div class="slideshowholder">
		<div class="projectSlideshow">
			<?php if (get_field("slideshow_image")): ?>
				<?php while(the_flexible_field("slideshow_image")): ?>
					<?php if(get_row_layout() == "add_image"): ?>
						<img src="<?php the_sub_field("image"); ?>" width="630" height="auto">	
					<?php endif; ?>
		   	<?php endwhile; endif; ?>
		</div><!-- .projectSlideshow -->
		<div class="nav">
			<a id="prev2" class="leftarrow" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow-left-arrow.png"></a> 
			<a id="next2" class="rightarrow" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow-right-arrow.png"></a>
		</div>
	</div><!-- .slideshowholder -->


	<div class="grid_10">
		<div class="projectMeta">
			<h3><b><?php the_field('project_name'); ?></b></h3>
			<h3><b>Completion Date</b> <?php the_field('completion_date'); ?></h3>
			<h3><b>Contract Value</b> <?php the_field('contract_value'); ?></h3>
			<h3><b>Client</b> <?php the_field('client'); ?></h3>			
		</div><!-- .projectMeta -->
		<p><?php the_field('project_description'); ?></p>	
	</div><!-- .grid_10 -->


	<!--end advanced custom fields-->

</div><!-- .viewer -->

<?php endwhile; endif; ?>

	<!--
	This is now going to loop through 
	the same loop as on the homepage
	-->
<div class="content borderTop_1">
	<div class="gridset">

			
		<?php query_posts(array('category_name' => 'projects', 'posts_per_page' => 20, 'paged' => $paged)) ?>
		<?php while ( have_posts() ) : the_post() ?>
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


<div class="related">

</div>
</div><!--content-->



<?php get_sidebar(); ?>
<?php get_footer(); ?>