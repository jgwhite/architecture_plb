/* Jcycle basics*/
$(document).ready(function() {
    $('.projectSlideshow').cycle({
		  fx: 'scrollHorz',
		  easeIn: 'swing',
		  timeout: 0, 
      next:   '#next2', 
      prev:   '#prev2'
	});
});


/*AJAX Load in*/
$(function() {
  
  var $mainContent = $("div.homepage_post"),
      i = 0;
      
  $mainContent.load("/contact");
  
});

/*Method for adding current class to News / Projects archive pages - don't judge me*/
$(function() {
  var loc = window.location.href; // returns the full URL
  if(/projects/.test(loc)) {
    $('#menu-item-241').addClass('current_page_item');
  }
   if(/news/.test(loc)) {
	    $('#menu-item-244').addClass('current_page_item');
	  }
});


/*Positioning index elements*/
window.PLB = {
  placeNewsItems: function() {
    console.log('Placing news items...');
    
    var positions = [1, 3, 4, 24, 25, 26],
        projects = $('.category-projects');

    $('.category-news').each(function(idx) {
    	var newsItem = $(this),
    			position = positions[idx],
    			sibling  = projects.eq(position);

    	newsItem.insertAfter(sibling);
    });
  }
}



/* Click project function */
var APLB = {};

APLB.projectFunction = function() {

  elementClicked = $('.category-projects .project a');

  if ( window.history && history.pushState ) {
  
    function load_ajax_data() {
      var state = History.getState();
      // var viewer = $(state.data.postID + ' .viewer');
      $.post(state.url, function(data) {
        $('.viewer').load(state.url + ' .single-content', function(){
            $(this).slideDown('normal', function() {
              $('.projectSlideshow').cycle({
                fx: 'scrollHorz',
                easeIn: 'swing',
                timeout: 0, 
                next:   '#next2', 
                prev:   '#prev2'
              });
            });
          });
        });
      }

    // Click for post
    elementClicked.each(function(index){
    
      $(this).on('click', function(e) {

        e.preventDefault();

        if( $('.viewer').is(':visible') ) {
          $('.viewer').slideUp().empty();
        } else {};

        $('body').css({cursor: 'progress'});

        // Set Variables
        var That = $(this);
        var path = That.attr('href');
        var title = That.attr('title');
        var imgWidth = $('.imagefit').width();
        var imgContainer = $('.thumbnailContainer');

        // Find clicked thumb width and apply it to container
        That.find(imgContainer).css({
          minWidth : imgWidth
        });

          // Then fade out that thumb
          That.fadeOut(function (){

            $(this).css({
              display: 'none',
              visibility: 'hidden'
            });

            // Go up dom to find parent div and make width 100%
            That.parents('div:eq(0)')
              .css({ height: 'auto' })
              .animate({width:'652px'}, 500);
          });

        // Append viewer after project user has clicked on
        $(this, '.category-projects .project a').after('<div class="viewer" />');

        // History ting
        History.pushState('ajax',title,path);

        // Scroll to new viewer
        $('html, body').animate({
          scrollTop: $(That, '.viewer').offset().top
        }, 500, function(){
          $('body').delay(1000).css({cursor: 'default'});
        });

      });

      // If on homepage, load_ajax_data as statechange
      if ($('body').hasClass('home')) {
        History.Adapter.bind(window,'statechange',function() {
          load_ajax_data();
        });
      } else {}

    });

  }

}

$(function(){
  APLB.projectFunction();
});
