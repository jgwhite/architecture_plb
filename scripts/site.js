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


/*Smooth Scoll library http://bytemuse.com/scrollIt.js/*/
(function(a){var b={upKey:38,downKey:40,easing:"linear",scrollTime:600,activeClass:"active",onPageChange:null};a.scrollIt=function(d){var e=a.extend(b,d);var g=0;var i=a("[data-scroll-index]:last").attr("data-scroll-index");var c=function(j){if(j<0||j>i){return}var k=a("[data-scroll-index="+j+"]").offset().top;a("html,body").animate({scrollTop:k,easing:e.easing},e.scrollTime)};var f=function(j){if(e.onPageChange&&j&&(g!=j)){e.onPageChange(j)}g=j;a("[data-scroll-nav]").removeClass(e.activeClass);a("[data-scroll-nav="+j+"]").addClass(e.activeClass)};var h=function(){var j=a(window).scrollTop();var l=a("[data-scroll-index]").filter(function(m,n){return j>=a(n).offset().top&&j<a(n).offset().top+a(n).outerHeight()});var k=l.first().attr("data-scroll-index");f(k)};a(window).scroll(h).scroll();a(window).keydown(function(j){var k=j.which;if(k==e.upKey&&g>0){c(parseInt(g)-1);return false}else{if(k==e.downKey&&g<i){c(parseInt(g)+1);return false}}return true});a("[data-scroll-nav], [data-scroll-goto]").click(function(j){var k=a(j.target).attr("data-scroll-nav")||a(j.target).attr("data-scroll-goto");c(k)})}}(jQuery));



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

        $(this, '.viewer').slideUp();

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
              display: 'block',
              visibility: 'hidden'
            });

            // Go up dom to find parent div and make width 100%
            That.parents('div:eq(0)')
              .css({ margin: '0', height: 'auto' })
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
