<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <?php

      if(isset($_GET['bodaid'])){

        $bodaid=$_GET['bodaid'];
        $dir="../recursos/img/bodas/".$bodaid;
        $dir2="../recursos/img/bodas/".$bodaid."/fullres";
        $datos =scandir($dir,1);
        $datos2=scandir($dir2,1);

        echo"<script type='text/javascript'> var contenido=" . json_encode($datos) .";var contenidofull=".json_encode($datos2).";var id=".json_encode($bodaid).";</script>";
      } else{
        echo "<script type='text/javascript' src='../recursos/js/alert.js'></script>";
      }

    ?>
    <script type="text/javascript" src="../recursos/js/player.js"></script>

    <title>Nuestros reportajes</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Reportajes más de cerca. Esperamos que os gusten" />
		<meta name="keywords" content="hqbodas, bodas, sierra, madrid, galapagar, boda, pareja, reportaje, fotos, fotografo, video, novios, novia, novio, matrimonio, iglesia, musica, tarta, pastel, banquete, grabacion, album" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="alternate" hreflang="es-es" href="alternateURL"/>
    <link rel="canonical" href="http://hqbodas.com/galeria" />
    <meta name="robots" content="noindex" />
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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71211135-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <section class="player flex-center">
      <div class="info">
        <a href="../galeria"><div class="back"></div></a>
        <h3>Lorena y Kiko</h3>
        <h5>Fecha??</h5>
      </div>
      <div class="slideshow-wrapper">
        <div class="controles outside flex-space-between flex--center flex-nowrap">
          <div class="flechas">
            <div class="prev min action fa fa-chevron-left"></div><div class="next min action fa fa-chevron-right"></div>
          </div>
          <div class="cuenta flex-center-center">actual/total</div>
          <div class="fullscreen action fa fa-expand"></div>
        </div>
        <a class="pinit fa fa-pinterest escondido" data-pin-do="buttonPin" data-pin-custom="true" data-pin-tall="true" data-pin-round="true"
          href="https://es.pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.hqbodas.es&media=http%3A%2F%2Fwww.hqbodas.es%2Frecursos%2Fimg%2Fhome%2Ffoto01.jpg&description=HQBodas%20%7C%20Vuestro%20d%C3%ADa%20especial%2C%20como%20nunca%20imaginasteis.">
          <img src=" "/>
        </a>
        <div class="shade flex-center-center">
          <div class="loader landing"></div>
        </div>
      </div>
    </section>
    <section class="footer claro">
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
        "galeria"=>"is-active",
        "video"=>"",
        "extras"=>"",
        "vosotros"=>"",
      );
      include_once('../header.php');
    ?>

  </body>




</html>
