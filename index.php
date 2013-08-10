<?php get_header(); ?>
<div class="content borderTop_1">
<div class="gridset">

  <?php query_posts(array(
		'category_name' => 'projects', 
		'posts_per_page' => 20, 
		'paged' => $paged)) ?>
		
  <?php while ( have_posts() ) : the_post() ?>
    <?php get_template_part( 'entry' ); ?>
  <?php endwhile; ?>

	
 <?php query_posts(array( 
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
<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/jquery.infinitescroll.min.js"></script>
<script type="text/javascript">
  $('div.content').infinitescroll({
		loading:{
			finishedMsg: "<em>Finished</em>",
				msgText: "<em>Loading...</em>",
				img: "http://architectureplb.com/development/wp-content/themes/theme-plb/images/ajax-loader.gif"
		},
    navSelector  : "div.navigation",            
    nextSelector : "div.navigation a:first",                  
    itemSelector : "div.content .homepage_post"
  });
</script>
<?php get_footer(); ?>