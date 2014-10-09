$(function() {
    // Allow links within bootstrap tabs for sharing URL of a particular tab
    var url = document.location.toString();
    if ( url.match( '#' ) ) {
      var tab_name = '.nav-tabs a[href=#' + url.split( '#' )[1] + ']';
      console.log(tab_name);
      if(!$(tab_name).parent().hasClass('active')) {
        $(tab_name).tab( 'show' );
      }
    }

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        console.log('showing tab ' + e.target); // Active Tab
        console.log('showing tab ' + e.relatedTarget); // Previous Tab

        // Use the History API if possible, or else, fall back.
        // The History API will allow us to hash a URL without page jump in modern browsers.
        if ( history.pushState ) {
            window.history.pushState( null, null, e.target.hash );
        } else {
            window.location.hash = e.target.hash;
        }

    })
  });

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

function getRandomArbitrary( min, max, not ) {
  digit = Math.floor( Math.random() * (max - min) + min );
  // In theory, we could bring the same post back. This will grab another
  // random value. This doesn't prevent that from going any farther, but
  // hey, I don't think that anyone will notice/mind...
  if ( digit == not ) {
    digit = Math.floor( Math.random() * (max - min) + min );
  };
  return digit;
}

jQuery( document ).ready( function( $ ) {
  var url = 'https://public-api.wordpress.com/rest/v1/sites/makezine.com/posts/?category=maker-pro&number=6';
  var url = 'https://public-api.wordpress.com/rest/v1/sites/makezine.com/posts/?category=maker-pro&number=6';
  var jqxhr = $.getJSON( url, function() {
    // Posts...
    var posts = jqxhr.responseJSON.posts;

    // Start the output.
    var html_output = '<div class="recent-posts media-list">';

    // Figure out how many posts we have to work with...
    var length = jqxhr.responseJSON.posts.length;

    // Setup the index array.
    index = [];

    // Get the first random number.
    index.push( getRandomArbitrary( 0, length, null ) );
    index.push( getRandomArbitrary( 0, length, index[0] ) );
    // html for title
      html_output += '<row>';
      html_output += '<h2 class="subtitle">News from Makercon</h2>';
      html_output += '</row>';
      html_output += '<row>';
    // Loop through the new index.
    $( index ).each( function( key, value ) {
      html_output += '<div class="col-md-6 media" style="margin-top:0px !important;">';
      html_output += '<a class="" href="' + posts[ value ].URL + '"><img class="media-object responsive" src="' + posts[ value ].featured_image + '?h=200" alt="' + posts[ value ].title + '"></a>';
      html_output += '<h3><a style="font-size:20px;color:#ED1B24;font-weight:bold;" href="' + posts[ value ].URL + '">' + posts[ value ].title + '</a></h3>';
      html_output += posts[ value ].excerpt;
      html_output += '</div>';
    });
    html_output += '</div>';
    $('.highlights .posts').html( html_output );

    $('.highlights .posts a').attr('target', '_blank');

  });

  var slides = '';
  var i = 0;
  var images = [];
  $( images ).each( function() {
    if ( i === 0 ) {
      slides += '<div class="item active"><img src="' + $(this)[0].path + '?w=520"></div>';
    } else {
      slides += '<div class="item"><img src="' + $(this)[0].path + '?w=520"></div>';
    }
    i++;
  });
  $('.home-slideshow').html( slides );

  var indicators = '';
  var j = 0;
  $( images ).each( function() {
    if ( j === 0 ) {
      indicators += '<li data-target="#carousel-example-generic" data-slide-to="' + j + '" class="active"></li>';
    } else {
      indicators += '<li data-target="#carousel-example-generic" data-slide-to="' + j + '"></li>';
    }
    j++;
  });
  $('.carousel-indicators').html( indicators );

});

// Skip link focus

( function() {
  var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
      is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
      is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

  if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
    var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
    window[ eventMethod ]( 'hashchange', function() {
      var element = document.getElementById( location.hash.substring( 1 ) );

      if ( element ) {
        if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
          element.tabIndex = -1;

        element.focus();
      }
    }, false );
  }
})();
