$(document).ready(function(){
	$('#topbar').dropdown();
});

$(document).delegate('#flag span.label', 'click', function(){
	resetFlags();
	$(this).siblings('span.label').removeClass('warning success important notice');
});

function resetFlags(){
	$('#flag span.label[data-flag=spam]').addClass('important');
	$('#flag span.label[data-flag=prohibited]').addClass('warning');
	$('#flag span.label[data-flag=miscat]').addClass('notice');
	$('#flag span.label[data-flag=best]').addClass('success');
}