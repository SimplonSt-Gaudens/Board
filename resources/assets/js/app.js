$(document).ready(function() {
	$('.ui.selection.dropdown').dropdown();
	
	$('.message .close').on('click', function() {
    	$(this).closest('.message').transition('fade');
 	});
});