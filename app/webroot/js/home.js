$(document).ready(function(){
	
	$('.stars-rating li.off').hover(function(){
		$(this).removeClass("off").addClass("on");
	}, function(){
		$(this).removeClass("on").addClass("off");	
	});
});