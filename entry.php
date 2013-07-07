<div id="post-<?php the_ID(); ?>" class="homepage_post">
	
	<li class="project">
		<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
			<div class="thumbnailContainer">
				<div class="thumbnailDescription">
					<h3><?php the_field('project_name'); ?></h3>
					<h3><?php the_field('client'); ?></h3>
					<h3 class="underline">Read More</h3>
				</div><!-- .thumbnailDescription -->
				<img class="imagefit" src="<?php the_field('thumbnail_image'); ?>">
			</div><!--thumbnailContainer-->
		</a>
	</li><!--li.project-->

<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('entry','content');
}
?>
</div> 