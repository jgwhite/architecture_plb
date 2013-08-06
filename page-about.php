<?php 
/*
	Template Name: About
	Description: 
*/
?>
<?php get_header(); ?>
	<div class="content borderTop_1">
		<a name="directors">
			<div class="team" >
				<div class="grid_4">
					<h2>Directors</h2>
				</div><!-- .grid_4 -->
				<div class="grid_18 end">
					<?php $temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('category_name=directors');
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<li class="seniorteam">
							<a href="<?php the_permalink(); ?>" title="Read more">
							<div class="thumbnailContainer">
								<div class="thumbnailDescription">
									<h3><?php the_field( 'name' ); ?></h3>
									<h3 class="underline">Read More</h3>
								</div><!-- .thumbnailDescription -->
								<img class="imagefit" src="<?php the_field( 'picture' ); ?>">
							</div><!--thumbnailContainer-->
							</a>
						</li>
					
					<?php endwhile; ?>
					<?php if ($paged > 1) { ?>
					<?php } else { ?>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>	
				</div><!-- .grid_16 -->
			</div><!-- .team -->
		</a>
		
		
		
		<a name="associates">
			<div class="team borderTop_1 paddingTop_07">
				<div class="grid_4">
					<h2>Associates</h2>
					</div><!-- .grid_4 -->
				<div class="grid_18 end">
					<?php $temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('category_name=associates');
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


						<li class="seniorteam">
							<a href="<?php the_permalink(); ?>" title="Read more">
							<div class="thumbnailContainer">
								<div class="thumbnailDescription">
									<h3><?php the_field( 'name' ); ?></h3>
									<h3 class="underline">Read More</h3>
								</div><!-- .thumbnailDescription -->
								<img class="imagefit" src="<?php the_field( 'picture' ); ?>">
							</div><!--thumbnailContainer-->
							</a>
						</li>
					
					<?php endwhile; ?>
					<?php if ($paged > 1) { ?>
					<?php } else { ?>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
				</div><!-- .grid_16 -->
			</div><!-- .team -->
		</a>
		
		<a name="team">
		<div class="team borderTop_1 paddingTop_07">
			<div class="grid_4">
				<h2>Team</h2>
			</div><!-- .grid_4 -->
			<div id="team" class="grid_18 end">
				<?php if(get_field('team')): ?>
					<?php while(has_sub_field('team')): ?>

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

			
				<?php endwhile; ?>
			<?php endif; ?>
	</div><!--grid-->	
</a>
	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>