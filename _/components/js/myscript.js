$(document).ready(function(){

	// make menus drop down automatically
	// $('ul.nav li.dropdown').hover(function() {
	// 	$('.dropdown-menu', this).fadeIn();

	// }, function() {

	// 	$('.dropdown-menu', this).fadeOut('fast');
	// }); //hover

	// Fix the search box toggling
  	// Setup drop down menu
  		$('.dropdown-toggle').dropdown();
 
  	// Fix input element click problem
  			$('.dropdown input, .dropdown label').click(function(e) {
    			e.stopPropagation();
  			});

	// Add scroll to top button
	$('body').append('<div class="back-to-top hidden-xs"><span class="glyphicon glyphicon-chevron-up"></span></div>');
		var offset = 220;
    	var duration = 500;
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });
    
	    jQuery('.back-to-top').click(function(event) {
	        event.preventDefault();
	        jQuery('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })

	// Activates Tooltips for all anchors inside a list item
		$('li').tooltip({
  			selector: "a[data-toggle=tooltip]"
		})

	// Activate tooltip in author bio for all posts
		$('h3').tooltip({
  			selector: "a[data-toggle=tooltip]"
		})

	// Sidebar Tabbed Widget

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#sidebar-tabs a[href="' + hash + '"]').tab('show');

    // Responsive videos using FitVids
    $(".post-videos").fitVids();

    // Carousels
    $('#single-carousel').carousel({interval: 5000});
    $('#coupon-carousel').carousel({interval: 5000});
    $('#feature-post-carousel').carousel({interval: 3000});

    function equalHeight(group) {    
	    tallest = 0;    
	    group.each(function() {       
	        thisHeight = $(this).height();       
	        if(thisHeight > tallest) {          
	            tallest = thisHeight;       
	        }    
	    });    
	    group.each(function() { $(this).height(tallest); });
	}

	    equalHeight($(".coupon-thumbnail"));

	// Run prettify
	$(function(){
    	window.prettyPrint && prettyPrint()   
  	})

}); //jQuery is loaded
