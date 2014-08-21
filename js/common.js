$(function() {
    // Allow links within bootstrap tabs for sharing URL of a particular tab
    var url = document.location.toString();
    if ( url.match( '#' ) ) {
      var tab_name = '.nav-tabs a[href=#' + url.split( '#' )[1] + ']';
      console.log(tab_name);
      $(tab_name).tab( 'show' );
    }

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        console.log('showing tab ' + e.target); // Active Tab
        console.log('showing tab ' + e.relatedTarget); // Previous Tab

        // Use the History API if possible, or else, fall back.
        // The History API will allow us to hash a URL without page jump in modern browsers.
        if ( history.pushState ) {
            // window.history.pushState( null, null, e.target.hash );
        } else {
            // window.location.hash = e.target.hash;
        }

    })
  });

