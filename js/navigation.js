/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'h1' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();

jQuery( document ).ready( function( $ ) {
	var url = 'https://public-api.wordpress.com/rest/v1/sites/makezine.com/posts/?tag=makercon&number=2';
	var jqxhr = $.getJSON( url, function() {
		var html_output = '<h2>News from MakerCon</h2><ul class="recent-posts media-list">';
		$( jqxhr.responseJSON.posts ).each( function() {
			html_output += '<li class="media">';
			html_output += '<a class="pull-left" href="' + $(this)[0].URL + '"><img class="media-object thumbnail" src="' + $(this)[0].featured_image + '?w=125" alt="' + $(this)[0].title + '"></a>'
			html_output += '<h3><a href="' + $(this)[0].URL + '">' + $(this)[0].title + '</a></h3>';
			html_output += $(this)[0].excerpt;
			html_output += '</li>';
		});
		html_output += '</ul>';
		$('.highlights .posts').html( html_output );
	})

	var slides = '';
	var i = 0;
	$( images ).each( function() {
		if ( i == 0 ) {
			slides += '<div class="item active"><img src="' + $(this)[0].path + '?w=520"></div>';
		} else {
			slides += '<div class="item"><img src="' + $(this)[0].path + '?w=520"></div>';
		}
		i++;
	});
	$('.home-slideshow').html( slides );

	var indicators = '';
	var i = 0;
	$( images ).each( function() {
		if ( i == 0 ) {
			indicators += '<li data-target="#carousel-example-generic" data-slide-to="' + i + '" class="active"></li>';
		} else {
			indicators += '<li data-target="#carousel-example-generic" data-slide-to="' + i + '"></li>';
		}
		i++;
	});
	$('.carousel-indicators').html( indicators );

});