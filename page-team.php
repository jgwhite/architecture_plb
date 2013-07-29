<?php 
/*
	Template Name: Team
	Description: 
*/
?>
<?php get_header(); ?>
	<div class="content borderTop_1">
		
		<h2>Team</h2>
	
		<?php if(get_field('team')): ?>
			<?php while(has_sub_field('team')): ?>
				<div class="team_post">
					<li class="team">
							<div class="thumbnailContainer">
								<div class="thumbnailDescription">
									<h3><?php the_sub_field('name'); ?></h3>
									<h3><?php the_sub_field('job_title'); ?></h3>
								</div><!-- .thumbnailDescription -->
								<img class="imagefit" src="<?php the_sub_field('picture'); ?>">
							</div><!--thumbnailContainer-->
						</a>
					</li><!--li.team-->					
				</div><!-- .team_post -->
				
			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>