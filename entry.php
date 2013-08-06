<div id="post-<?php the_ID(); ?>" <?php post_class('homepage_post'); ?>>
	
	<li class="project">
			<a href="<?php the_permalink(); ?>" title="<?php printf( __('Read %s', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
				<div class="thumbnailContainer">
					<div class="thumbnailDescription">
						
						<?php if( get_field( "project_name" ) ): ?>
						    <h3><?php the_field('project_name'); ?></h3>
						<?php endif;?>
						
					
			</div><!--thumbnailContainer-->
		</a>
	</li><!--li.project-->
<p><?php the_title(); ?></p> 

<?php
if(is_archive() || is_search()){
get_template_part('entry','summary');
} else {
get_template_part('entry','content');
}
?>
</div> 



