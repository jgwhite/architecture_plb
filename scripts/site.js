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

// Test