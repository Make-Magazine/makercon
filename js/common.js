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
