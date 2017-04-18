<?php

    $dir='../recursos/img/bodas/'.$_GET['bodaid'].'/miniaturas';

    $datos=scandir($dir);

    echo json_encode($datos);

?>
