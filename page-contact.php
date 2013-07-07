<?php
/**
 * Template Name: Contact Page
 */ 
get_header(); ?>
	<div class="content borderTop_1">
		<?php if (get_field("location")): ?>
			<?php while(the_flexible_field("location")): ?>
				<?php if(get_row_layout() == "add_location"): ?>
				<div class="row">
					<div class="grid_10">
						<p><?php the_sub_field("contact_details")?></p>
					</div><!-- .grid_10 -->

					<div class="grid_12 end">
					
					<div class="mapcontrols">
						<a href="#" class="mapimage"><img src="<?php the_sub_field("map_image")?>"></a>	
						<div id="gmap">
							<iframe width="352" height="233" frameborder="0" scrolling="no" marginheight="0" 
							marginwidth="0" src="<?php the_sub_field("google_maps_link")?>&amp;output=embed&amp;iwloc=near"></iframe>
						</div>						
					</div><!-- .mapcontrols -->	
							
		
						
					</div><!-- .grid_12 -->
				</div><!-- .row -->
			<?php endif; ?>
		<?php endwhile; endif; ?>
		
		<?php if( get_field( "other_information" ) ): ?>
			<div class="grid_10">
				<p><?php the_field( "other_information" ); ?></p>
			</div><!-- .grid_10 -->
		<?php endif; ?>
	</div><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>