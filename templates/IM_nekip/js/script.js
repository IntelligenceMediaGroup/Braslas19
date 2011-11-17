$(document).ready(function() {

	$("ul.sf-menu").superfish({
		autoArrows: false,
		delay: 400, // one second delay on mouseout
		animation: {opacity:'show',height:'show'}, // fade-in and slide-down animation
		speed: 'fast', // faster animation speed
		autoArrows: false, // disable generation of arrow mark-up
		dropShadows: false // disable drop shadows
	});

	// wrap 'span' to nav page link
	$('.topnav ul').children('li').each(function() {
		$(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
	});
	$('#nav1 ul').children('li').each(function() {
		$(this).children('a').html('<span>'+$(this).children('a').text()+'</span>'); // add tags span to a href
	});

	// radius Box
	$('#centercol .box .border_box').css({"border-radius": "5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});
	$('#rightcol .box').css({"border-radius": "5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});
	$('.wp-pagenavi a, .wp-pagenavi .current').css({"border-radius": "5px", "-moz-border-radius":"5px", "-webkit-border-radius":"5px"});

}); 