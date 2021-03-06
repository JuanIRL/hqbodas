<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <script type="text/javascript" src="../recursos/js/album.js"></script>

    <title>Álbum</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Un bello recuerdo de vuestro día. El material de la mejor calidad para conservar esos momentos tan especiales."/>
		<meta name="keywords" content="hqbodas, bodas, sierra, madrid, galapagar, boda, album, fotografico, pliegos, impresion, calidad, recuerdo, especial" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="alternate" hreflang="es-es" href="alternateURL"/>
    <link rel="canonical" href="http://hqbodas.com/album" />
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
    <section class="album ">
      <div class="album-wrapper flex-space-around"></div>
      <!-- EL contenido se añade con javascript-->
      <h2 class='txt-invisible'>Álbum</h2>
      <h3 class='txt-invisible'>Trío vintage</h3>
      <p class='txt-invisible'>Un álbum de 30 x 30 cm con portada en lino crema personalizada y trasera marrón. Consta de entre 25 y 30 pliegos de impresión química y protección contra líquidos.
        <br/>
        Además, obtén de regalo 2 álbumes idénticos, de 25 x 25 cm.</p>
        <br/>
        <p class='declarativo txt-invisible'>"Son espectaculares, una auténtica joya"</p>
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
        "album"=>"is-active",
        "galeria"=>"",
        "video"=>"",
        "extras"=>"",
        "vosotros"=>"",
      );
      include_once('../header.php');
    ?>


  </body>




</html>
