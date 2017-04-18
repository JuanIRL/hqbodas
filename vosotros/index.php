<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../estilos/main.css"></link>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="../recursos/js/functions.js"></script>
    <script type="text/javascript" src="../recursos/js/header.js"></script>
    <script type="text/javascript" src="../recursos/js/alertas.js"></script>

    <title>Vosotros</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Queremos saber más sobre vosotros y vuestra boda. ¿Qué clase de reportaje os gustaría hacer?"/>
		<meta name="keywords" content="hqbodas, bodas, sierra, madrid, galapagar, boda, pareja, reportaje, fotos, fotografo, video, presupuesto, fecha, lugar, familiar, profesional" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="alternate" hreflang="es-es" href="alternateURL"/>
    <link rel="canonical" href="http://hqbodas.com/vosotros" />
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
    <section class="vosotros flex-center-center">
      <form method="post" action="index.php">

        <div class="formulario">
          <h2>¡Enhorabuena pareja!</h2>
          <h4>Nos gustaría saber un poco más sobre vuestra boda para preparar un presupuesto sin compromiso.</h4>
          <div class="input input-50">
            <input type="text" name="name" id="name" value="" placeholder="¿Cómo os llamáis?" required="required">
          </div>
          <div class="input input-50">
            <input id="date" type="date" name="datetime" placeholder="">
            <span class="placeholder">¿Cuándo os casáis?</span>
          </div>
          <div class="input input-50">
            <input type="text" name="lugar" id="lugar" value="" placeholder="¿Dónde tendrá lugar?">
          </div>
          <div class="input input-50">
            <input type="email" name="email" id="email" value="" placeholder="Un email para contactaros" required="required">
          </div>
          <div class="input">
            <textarea name="message" id="message" placeholder="¿Qué tipo de reportaje os gustaría?" rows="6" required="required"></textarea>
          </div>
          <div class="input">
              <input type="submit" class="" value="Solicitar presupuesto">
          </div>
        </div>
      </form>
    </section>
    <section class="footer oscuro">
      <?php include_once('../footer.php'); ?>
    </section>
    <div class="header-wrapper">
    </div>
  </div>
    <?php
      $active= array(
        "home"=>"",
        "nosotros"=>"",
        "album"=>"",
        "galeria"=>"",
        "video"=>"",
        "extras"=>"",
        "vosotros"=>"is-active",
      );
      include_once('../header.php');
    ?>
      <!--<div class='alerta warning'><div class='message'>En breve nos pondremos en contacto con vosotros<div class='close fa fa-close'></div></div></div>-->
      <?php

      	if(isset($_POST['email'])) {


      	    // Direccion a la que enviar el email
      	    $email_to = "info@hqbodas.com";


            //Funciones de error y exito en el envio
      	    function warning($text){
      	    	echo "<div class='alerta warning'><div class='message'>".$text."<div class='close fa fa-close'></div></div></div>";
      	    }
      	    function success($text){
      	    	echo "<div class='alerta success'><div class='message'>".$text."<div class='close fa fa-close'></div></div></div>";
      	    }

      	    function died($error) {

      	        warning($error);

      	        die();

      	    }



      	    // validation expected data exists

      	    if(!isset($_POST['name']) ||

      	        !isset($_POST['email']) ||

      	        !isset($_POST['message'])) {

      	        died('Ha habido un problema con el formulario. Comprueba que al menos vuestro Nombre, Email y Mensaje están rellenos.');

      	    }



      	    $name=$_POST['name'];
      	    $date=$_POST['date'];
      	    $lugar=$_POST['lugar'];
      	    $email=$_POST['email'];
      	    $message=$_POST['message'];

            $email_subject = "Solicitud presupuesto: ".$name." ".$date.". En ".$lugar;


      	    $error_message = "";

      	    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

        		if(!preg_match($email_exp,$email)) {

        			$error_message .= '-No has introducido una direccion de email válida-<br />';

        		}

      	    $string_exp = "/^[A-Za-z .'-]+$/";

        		if(!preg_match($string_exp,$name)) {

        			$error_message .= '-Hay algún caracter inválido en el nombre-<br />';

        		}

        		if(strlen($message) < 10) {

        			$error_message .= '-El mensaje es demasiado corto-<br />';

        		}

        		if(strlen($error_message) > 0) {

        			died($error_message);

        		}



      	    function clean_string($string) {

      	      $bad = array("content-type","bcc:","to:","cc:","href");

      	      return str_replace($bad,"",$string);

      	    }





      	// create email headers

      		$headers = 'From: '.$email."\r\n".

      		'Reply-To: '.$email."\r\n" .

      		'X-Mailer: PHP/' . phpversion();

      		@mail($email_to, $email_subject, $message, $headers);
      		success("En breve nos pondremos en contacto con vosotros. Muchas gracias");
      	}

      ?>

  </body>




</html>
