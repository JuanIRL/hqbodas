<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <script type="text/javascript" src="../recursos/js/otros.js"></script>
    <script type="text/javascript" src="../recursos/js/hosted-video.js"></script>

    <title>Otros eventos</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Además de bodas realizamos reportajes de bautizos, comuniones y cualquier otro evento." />
		<meta name="keywords" content="hqbodas, bodas, sierra, madrid, galapagar, comunion, bautizo, reportaje, fotografia, eventos, celebracion, video" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="alternate" hreflang="es-es" href="alternateURL"/>
    <link rel="canonical" href="http://hqbodas.com/mas" />
    <meta name="robots" content="NOODP">

    <!--Set de iconos para todas las plataformas-->
		<link rel="apple-touch-icon" sizes="57x57" href="../icono/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../icono/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../icono/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../icono/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../icono/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../icono/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../icono/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../icono/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../icono/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="../icono/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../icono/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="../icono/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="../icono/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="../icono/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../icono/manifest.json">
		<link rel="shortcut icon" href="../icono/favicon.ico">
		<meta name="msapplication-TileColor" content="#171820">
		<meta name="msapplication-TileImage" content="../icono/mstile-144x144.png">
		<meta name="msapplication-config" content="../icono/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
  </head>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-71211135-1', 'auto');
    ga('send', 'pageview');

  </script>
  <body>
    <section class="otros">
      <p>Además de bodas realizamos reportajes de bautizos, comuniones y cualquier otro evento.</p>
      <div class="content">
        <div class="otros-content fotos comuniones">
          <h2>COMUNIONES</h2>
          <div class="otros-wrapper">
            <div class="carrusel"></div>
          </div>
          <div class="carrusel-arrow left"></div>
          <div class="carrusel-arrow right"></div>
        </div>
        <div class="otros-content fotos bautizos">
          <h2>BAUTIZOS</h2>
          <div class="otros-wrapper">
            <div class="carrusel"></div>
          </div>
          <div class="carrusel-arrow left"></div>
          <div class="carrusel-arrow right"></div>
        </div>
        <div class="otros-content videos">
          <h2>VIDEOS</h2>
          <!--<a class="videolink"></a>-->
          <!--<iframe class="otros-video" src="https://player.vimeo.com/video/197294063" width="1920" height="1080" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
          <div class="hosted-video">
            <video id="video" poster="/recursos/video/bautizo-nicholas-placeholder.jpg" >
              <source src="http://www.hqbodas.com/recursos/video/bautizo-nicholas.mp4" type="video/mp4"></source>
            </video>
            <div class="play-button"></div>
            <div class="controls-strip flex-space-between flex--center">
              <span class="play fa fa-play"></span>
              <progress value="30" max="100"></progress>
              <span class="fullscreen fa fa-expand"></span>
            </div>
          </div>
        </div>
      <div>
    </section>
    <section class="footer oscuro">
      <?php
        include_once('../footer.php');
      ?>
    </section>
    <div class="header-wrapper">
    </div>
    <?php
      $active= array(
        "home"=>"",
        "nosotros"=>"",
        "album"=>"",
        "galeria"=>"",
        "video"=>"",
        "otros"=>"is-active",
        "extras"=>"",
        "vosotros"=>"",
      );
      include_once('../header.php');
    ?>
  </body>

</html>
