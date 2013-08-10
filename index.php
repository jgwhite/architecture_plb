<?php get_header(); ?>
<div class="content borderTop_1">
<div class="gridset">

  <?php query_posts(array( //Query to find 20 Projects posts
		'category_name' => 'projects', 
		'posts_per_page' => 20, 
		'paged' => $paged)) ?>
		
  <?php while ( have_posts() ) : the_post() ?>
    <?php get_template_part( 'entry' ); ?>
  <?php endwhile; ?>

	
 <?php query_posts(array( //Query set to find News posts, only 3 posts and 'yes' to 'featured on homepage'
		'category_name' => 'news', 
		'posts_per_page' => 3, 
		'meta_query' => array(
		 		array(
		 			'key' => 'featured_on_homepage',
		 			'value' => '1',
		 			'compare' => '=='
		 		)
		 	), 
		'paged' => $paged)) 
	?>
		
  <?php while ( have_posts() ) : the_post() ?>
    <?php get_template_part( 'entry' ); ?>
  <?php endwhile; ?>
  <script> PLB.placeNewsItems() </script>
</div><!--gridset-->

<!-- Potential script to random order the posts (might mess with the ajax load, test and be careful) -->
<!--<script type="text/javascript" charset="utf-8">
	var orig = $(".gridset").children();
	reorder();
	function reorder() {
	    var grp = $(".gridset").children();
	    var cnt = grp.length;
	    var temp, x;
	    for (var i = 0; i < cnt; i++) {
	        temp = grp[i];
	        x = Math.floor(Math.random() * cnt);
	        grp[i] = grp[x];
	        grp[x] = temp;
	    }
	    $(grp).remove();
	    $(".gridset").append($(grp));
	}	
</script>-->

  		<?php wp_reset_query(); ?>
    <div class="navigation"><?php posts_nav_link(); ?></div>
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>