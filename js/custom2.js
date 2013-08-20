$(document).ready(function(){
	$('#topbar').dropdown();
});

$(document).delegate('.switch', 'click', function(){

	var c = $(this).attr('data-switch');
		$('#account-settings-form').slideUp(300, function(){ $(this).addClass('hide'); });
		$('#reset-password-form').slideUp(300, function(){ $(this).addClass('hide'); });
		$('#'+c).slideDown(300, function(){
		$(this).removeClass('hide');
		$('input:first', this).focus();
	});
	c = null;

});