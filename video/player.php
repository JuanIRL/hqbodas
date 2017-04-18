<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="../recursos/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../recursos/js/zepto.js"></script>
    <script type="text/javascript" src="../recursos/js/touch.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <script type="text/javascript" src="../recursos/js/alertas.js"></script>
    <script type="text/javascript" src="../recursos/js/player.js"></script>
    <title>HQBodas | Vuestro día especial, como nunca imaginásteis.</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="HQBodas El reportaje que os merecéis. Somos un equipo de profesionales que lleva desde 2009 retratando los sueños de numerosas parejas. Nos encantan las bodas y todo ese aura de fiesta y alegría que rodea estos eventos. Por eso nos gustaría, en primer lugar, felicitaros por este gran paso adelante que estáis a punto de dar. También nos gustaría daros las gracias por visitar nuestro espacio, que esperamos sea de vuestro agrado." />
		<meta name="keywords" content="HQBodas, bodas, sierra, madrid, galapagar, boda, pareja, reportaje, fotos, fotografo, video, novios, novia, novio, matrimonio, iglesia, musica, tarta, banquete" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" value="noindex" />
  </head>
  <body>
    <section class="player flex-center">
      <div class="info">
        <a href="../video"><div class="back"></div></a>
        <h3></h3>
        <h5>Subido el </h5>
      </div>
      <div class="iframe-wrapper">
        <!--<iframe src="//player.vimeo.com/video/130317309?byline=0&badge=0&title=0" frameborder="0"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
        <?php
          if(isset($_GET['videoid'])){
            $videoid=$_GET['videoid'];
            echo "<iframe src='//player.vimeo.com/video/".$videoid."?byline=0&badge=0&title=0' frameborder='0'  webkitallowfullscreen mozallowfullscreen allowfullscreen data-videoid='".$videoid."'></iframe>";
          } else{
            echo "<div class='alerta warning'><div class='message'>No se ha encontrado el video...<div class='close'>X</div></div></div>";
          }

        ?>
      </div>
    </section>
    <div class="header-wrapper">
    </div>
      <header>
        <span class="logo">
          <img src="../recursos/img/logo/hqbodaslogonegro.png"/>
        </span>
        <nav class="">
          <ul>
            <li class=""><a href="../">Home</a></li>
            <li><a href="../nosotros">Nosotros</a></li>
            <li class=""><a href="../galeria">Galeria</a></li>
            <li class="is-active"><a href="">Video</a></li>
            <li><a href="../extras">Extras</a></li>
            <li><a href="../vosotros">Vosotros</a></li>
          </ul>
        </nav>
        <span class="menu">
          <div class="raya"></div>
          <div class="raya"></div>
          <div class="raya"></div>
        </span>

      </header>

  </body>




</html>
