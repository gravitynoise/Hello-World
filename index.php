<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="GravityNoise Homelab Dashboard. Infrastructure Overview.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homelab Dashboard</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.green-red.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }

    </style>
  </head>
  <body>

<style>

.online {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: #2e7d32;
  color: white;
}

.offline {
  padding: 2px 5px 2px 5px;
  margin: 0;
  display: inline;
  background: #c62828;
  color: white;
}

.progress {
        border: 2px solid #2e7d32;
        height: 32px;
        width: 100%;
        margin: 30px auto;
}
.progress .prgbar {
        background: #2e7d32;
        width: <?php echo $dp; ?>%;
        position: relative;
        height: 32px;
        z-index: 999;
}
.progress .prgtext {
        color: #000000;
        text-align: center;
        font-size: 13px;
        padding: 9px 0 0;
        width: 100%;
        position: absolute;
        z-index: 1000;
}
.progress .prginfo {
        margin: 3px 0;
}

</style>

    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--black">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">GravityNoise Dashboard</span>
          <div class="mdl-layout-spacer"></div>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          </ul>
        </div>
      </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--grey-200 mdl-color-text--black">
        <header class="demo-drawer-header">

        <a href="http://www.accuweather.com/en/us/westfield-ma/01085/weather-forecast/370_pc" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1457530762415" class="aw-widget-current"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awcc1457530762415"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>


        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--grey-100">
          <a class="mdl-navigation__link" href="https://96.95.184.163:4444" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">settings</i>SophosXG</a>
          <a class="mdl-navigation__link" href="https://96.95.184.162:4444" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">settings</i>Sophos UTM</a>
          <a class="mdl-navigation__link" href="http://96.95.184.162:8095" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">storage</i>PRTG</a>
          <a class="mdl-navigation__link" href="http://amp.taintcorp.com" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">storage</i>AMP</a>
          <a class="mdl-navigation__link" href="https://96.95.184.162:8443/login" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">storage</i>UniFi</a>
          <a class="mdl-navigation__link" href="http://96.95.184.165:8090/owncloud" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">visibility</i>Owncloud</a>
          <a class="mdl-navigation__link" href="https://remote.utorrent.com/" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">swap_vertical_circle</i>uTorrent</a>
          <a class="mdl-navigation__link" href="https://app.plex.tv/web/app" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">play_circle_filled</i>Plex</a>
          <a class="mdl-navigation__link" href="http://96.95.184.162:8181" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">play_circle_filled</i>PlexPy</a>
          <a class="mdl-navigation__link" href="http://96.95.184.163:3000" target="_blank"><i class="mdl-color-text--black material-icons" role="presentation">play_circle_filled</i>PlexRequest</a>
          <div class="mdl-layout-spacer"></div>
          </nav>

      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="demo-cards mdl-shadow--8dp mdl-color--white mdl-card--expand">
            <div class="demo-separator mdl-cell--1-col"></div>
            <center class="pattern">
             <iframe width=1920 height=840 frameborder="1"
   src="http://96.95.184.162:8095/public/mapshow.htm?id=3361&mapid=C938ED12-1735-4497-99FD-8ECBEFCF1D2C">
   </iframe>
            <div class="demo-separator mdl-cell--1-col"></div>
          </div>
             </div>
            </div>
          </div>
        </div>
      </main>
    </div>
     <a href="http://96.95.184.162:8087" target="_blank" id="view-source" class="mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white"><i class="material-icons">add</i></a>
    <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
  </body>
</html>
                                                                                                                            164,1         Bot
