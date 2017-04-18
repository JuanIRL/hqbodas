<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <script type="text/javascript" src="../recursos/js/nosotros.js"></script>

    <title>Nosotros</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Somos un equipo joven y experimentado en reportajes de boda. Queremos disfrutar de vuestro gran día y retratarlo con pasión y cariño" />
		<meta name="keywords" content="hqbodas, bodas, sierra, madrid, galapagar, boda, equipo, profesionales, detalle, trabajo, reportaje, sesion, sueños, baile" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="alternate" hreflang="es-es" href="alternateURL"/>
    <link rel="canonical" href="http://hqbodas.com/nosotros" />
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
    <section class="nosotros flex-center">
      <div class="nosotros-wrapper">
        <div class="item imagen"><img src="../recursos/img/nosotros/2015_05_16_1280_min.jpg"/></div>
        <div class="item nosotros-content">
          <span class="content">
            <h1>Nosotros</h1>
            <p>Somos un equipo de profesionales que lleva desde 2009 retratando los sueños de numerosas parejas.</p>
            <p>Buscamos superarnos en cada reportaje, captar cada momento con detalle, los nervios, lágrimas, miradas, gestos... Disfrutamos realizando reportajes de boda. Por eso nos gustaría,
               en primer lugar, felicitaros por este gran paso adelante que estáis a punto de dar. También nos gustaría daros
                las gracias por visitar nuestro espacio, que esperamos sea de vuestro agrado.</p>
          </span>
          <span class="content">
            <h3>¿Qué queremos?</h3>
            <p>Queremos conoceros, conocer vuestros gustos y, en el gran día, ser vuestros ojos y los de la gente que os quiere.
              Sí, queremos ser los elegidos para hacer del reportaje de vuestra boda un retrato fiel, natural, alegre, divertido y original.
              Queremos saber cómo os gustaría que fuera, aportar ideas y animaros a crear una pieza tan excepcional como lo que sentís el uno por el otro.</p>
          </span>
          <span class="content">
            <h3>¿Cómo sería el reportaje?</h3>
            <p>Básicamente pasamos el día con vosotros. En primer lugar os visitamos a cada uno por separado mientras os preparáis,
              junto con la familia, para la ceremonia. Os acompañamos durante la ceremonia y, después, <!--nos gustaría hacer-->hacemos una primera
              sesión de fotos como recién casados. Luego vamos con vosotros a donde tenga lugar el banquete y <!--por último-->finalmente fotografiamos el baile. También podéis añadir
              elementos especiales que hagan vuestro reportaje todavía más único. Visitad nuestra sección de <a href="../extras">extras</a>.
          </span>
        </div>
        <div class="flecha subir fa fa-angle-down"></div>
        <div class="flecha bajar fa fa-angle-up"></div>
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
        "nosotros"=>"is-active",
        "album"=>"",
        "galeria"=>"",
        "video"=>"",
        "extras"=>"",
        "vosotros"=>"",
      );
      include_once('../header.php');
    ?>

  </body>




</html>
