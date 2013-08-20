$(document).ready(function(){
	$('#topbar').dropdown();
	$('#username_in').focus();
});

$(document).delegate('.switch', 'click', function(){
		
	var c = $(this).attr('data-switch');
		$('#sign-in-form').slideUp(300, function(){ $(this).addClass('hide'); });
		$('#forgot-password-form').slideUp(300, function(){ $(this).addClass('hide'); });
		$('#'+c).slideDown(300, function(){
		$(this).removeClass('hide');
		$('input:first', this).focus();
	});
	c = null;

});