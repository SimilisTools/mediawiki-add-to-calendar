/*globals $ document createCalendar */

$(document).ready( function() {
	var mandatory = ["title", "start", "end"]; //Mandatory elems
	
	$(".addtocalendar").each( function( i ) {
		
		var eventData = $(this).data();
		
		var check = 0;
		
		for ( var c=0; c < mandatory.length; c=c+1 ) {
			if ( mandatory[c] in eventData ) {
				check = check + 1;
			}
		}
		
		if ( check >= mandatory.length ) {
		
			var linkCalendar = createCalendar({
				options: {
					class: 'addtocalendar_link',
				},
				data: eventData
			});
			 
			$(this).append( linkCalendar );
		}
	});
	
});