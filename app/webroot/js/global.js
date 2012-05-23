$(document).ready(function(){
	
	$('input').focus(function(){
		if($(this).attr('rel') == 'default'){
			$(this).val('').css('color','black');
			$(this).attr('rel','changed');
		}
	});
	
	$('input').focusout(function(){
		if($(this).val() == ''){
			$(this).val($(this).attr('default')).css('color','#BFB9B1').attr('rel','default');
		}
	});
});