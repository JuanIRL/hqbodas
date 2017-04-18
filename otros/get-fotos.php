<?php
    function scan_dir($dir) {
      $ignored = array('.', '..', '.svn', '.htaccess','.DS_Store');

      $files = array();
      foreach (scandir($dir) as $file) {
          if (in_array($file,$ignored)) continue;
          $files[$file] = filemtime($dir . '/' . $file);
      }

      arsort($files);
      $files = array_keys($files);

      return ($files) ? $files : false;
    }

    $dir='../recursos/img/comuniones/min/';
    $dir2='../recursos/img/bautizos/min/';
    $datos_comuniones=scan_dir($dir);
    $datos_bautizos=scan_dir($dir2);


    echo json_encode($datos_comuniones) . "_div_" . json_encode($datos_bautizos);

?>
