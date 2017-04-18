<?php

function scan_dir($dir) {
  $ignored = array('.', '..', '.svn', '.htaccess','.DS_Store', 'movil');

  $files = array();
  foreach (scandir($dir) as $file) {
      if (in_array($file,$ignored)) continue;
      $files[$file] = filemtime($dir . '/' . $file);
  }

  arsort($files);
  $files = array_keys($files);

  return ($files) ? $files : false;
}

$dir='recursos/img/home/movil';
$datos=scan_dir($dir);

echo json_encode($datos);

?>
