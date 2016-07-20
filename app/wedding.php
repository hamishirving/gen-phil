<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Genevieve & Phil | Wedding</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="//ajax.googleapis.com" rel="dns-prefetch">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway:400,700" rel="stylesheet">

    <script src="assets/components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <nav class="nav">
      <div class="container">
        <div class="logo">
          <h1>Genevieve & Phil</h1>
        </div>
        <ul class="nav-links">
          <li><a href="/">Home</a></li>
          <li><a href="wedding">Wedding</a></li>
          <li><a href="travel">Travel</a></li>
          <li><a href="accommodation">Accommodation</a></li>
          <li><a href="registry">Registry</a></li>
          <li><a href="next-day">Next Day</a></li>
          <li><a href="rsvp" class="bold" id="rsvp">RSVP</a></li>
        </ul>
        <div class="menu-btn">
          <h3><a href="#" id="mobile-menu-btn">Menu</a></h3>
        </div>
      </div>
    </nav>

    <nav class="mobile-menu">
      <ul class="mobile-menu-links">
        <li><a href="/">Home</a></li>
        <li><a href="wedding">Wedding</a></li>
        <li><a href="travel">Travel</a></li>
        <li><a href="accommodation">Accommodation</a></li>
        <li><a href="registry">Registry</a></li>
        <li><a href="next-day">Next Day</a></li>
        <li><a href="rsvp" class="bold" id="rsvp">RSVP</a></li>
        <li><a class="close" id="close-mobile-menu-btn"></a></li>
      </ul>
    </nav>

    <div class="page-wrapper">

      <div class="loader">
        <img src="assets/img/ring.gif" width:="50px" height="50px" alt="">
      </div>
      
      <div class="page-content">

        <section class="info">
          <div class="container">
            <div class="info-text">
              <h2 class="diamond-line">Ceremony</h2>
              <p>2:30 PM</p>
              <p>Honeymoon Bay</p>
              <p>Rothschild Terrace. Waiheke Island</p>
              <p>Reception to follow</p>
            </div>
          </div>
        </section>

        <section class="map">
          <h2 class="diamond-line">Map</h2>
          <div class="container">
            <div class="map-container" id="map"></div>
          </div>
        </section>

        <section class="footer">
          <div class="container">
            <div class="footer-content">
              <p class="left">© Genevieve & Phil</p>
              <p class="right">Built with <a href="http://www.hamishirving.com" target="_blank">💖</a></p>
            </div>
          </div>
        </section>

      </div>

    </div>

    <script src="assets/components/jquery/jquery.min.js"></script>
    <script src="assets/js/scripts.min.js"></script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -36.8137143, lng: 175.0376703},
          zoom: 15
        });

        // Get styles
        map.setOptions({styles: styles});
      }

      // Map Styles
      var styles = [
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              { "saturation": -100 }
            ]
          },{
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
              { "saturation": -100 }
            ]
          },{
            "featureType": "poi",
            "stylers": [
              { "saturation": -100 }
            ]
          },{
            "featureType": "transit",
            "stylers": [
              { "saturation": -100 }
            ]
          },{
            "featureType": "administrative",
            "stylers": [
              { "saturation": -100 }
            ]
          }
      ];
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJA2HoXWiGPho2lPamfvyidiy_G0o2og4&callback=initMap"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/velocity-ui.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

  </body>
</html>
