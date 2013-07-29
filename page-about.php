<?php 
/*
	Template Name: About
	Description: 
*/
?>
<?php get_header(); ?>
	<div class="content">
		<a id="directors">
			<div class="team borderTop_1">
				<div class="grid_3">
					<h2>Directors</h2>
				</div><!-- .grid_4 -->
				<div class="grid_17">
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
		
		
		
		<a id="associates">
			<div class="team borderTop_1">
				<div class="grid_3">
					<h2>Associates</h2>
					</div><!-- .grid_4 -->
				<div class="grid_17">
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
	</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>