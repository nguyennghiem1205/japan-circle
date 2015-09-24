$(document).ready(function() {
	// Active Theme: Select the theme you want to activate on the entire website
	//$("body").addClass("wp-theme-1");
	
	//Carousels
	
	$('#carouselWork').carousel({
		interval: 2000,
		pause	: 'hover'
	});
	
	//$(".scrollbar-inner").scrollbar();
	/*
	$('#comments').carousel({
		interval: 1500,
		pause	: 'hover'
	});
	*/
	// Sortable list
	$('#ulSorList').mixitup();
	// Fancybox
	$(".theater").fancybox();
	// Fancybox	
	$(".ext-source").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'autoScale'     	: false,
		'type'				: 'iframe',
		'width'				: '50%',
		'height'			: '60%',
		'scrolling'   		: 'no'
	});
	
	
    $("#topscroll").endlessScroll({ width: $("#topscroll").width()+'px', height: '26px', steps: -2, speed: 30, mousestop: true });
   
	
	
	// Scroll to top
	$().UItoTop({ easingType: 'easeOutQuart' });
	// Inview animations
	$.fn.waypoint.defaults = {
		context: window,
		continuous: true,
		enabled: true,
		horizontal: false,
		offset: 300,
		triggerOnce: false
	}
	$('.animate-in-view, .chart').waypoint(function(direction) {
		var barColor;
		// Easy Pie Chart
		$(".chart").easyPieChart({
			size:150,
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			},
			barColor:'#FFF',
			delay: 3000,
			trackColor:'rgba(255,255,255,0.2)',
			scaleColor:false,
			lineWidth:16,
			lineCap:'butt'
		});
	});
	$("#btnSignIn").click(function(){
		$("#dropdownForm").hide();
		$("#dropdownProfile").fadeIn(300);	
		return false;
	});
	
	
	// Top header
	$("#cmbTopHeader").change(function(){
		if($("#cmbTopHeader").val() == 2){
			$(".top-header").addClass("hide");
			$.cookie('top-header', 'hide', { expires:date});	
		}
		else{
			$(".top-header").removeClass("hide");
			$.cookie('top-header', 'show', { expires:date});	
		}
	});
	
	
});
