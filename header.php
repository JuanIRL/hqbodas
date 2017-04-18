<header>
  <?php
    $hqdir="";
    $escondido="";

    if($active['home']!=''){
      $escondido='escondido';
    }
   ?>
  <span class="logo <?php echo $escondido;?>">
    <a href="/index.php">
      <img alt="HQBodas reportajes fotográficos y en vídeo de bodas. En la sierra de Madrid y desplazamiento a toda la comunidad de Madrid." src="<?php echo $hqdir;?>/recursos/img/logo/hqbodaslogonegro.png"/>
    </a>
  </span>
  <nav class="">
    <ul>
      <li class="<?php echo $active['home']?>"><a href="<?php echo $hqdir;?>/">Home</a></li>
      <li class="<?php echo $active['nosotros']?>"><a href="<?php echo $hqdir;?>/nosotros/">Nosotros</a></li>
      <li class="<?php echo $active['galeria']?>"><a href="<?php echo $hqdir;?>/galeria/">Galería</a></li>
      <li class="<?php echo $active['album']?>"><a href="<?php echo $hqdir;?>/album/">Álbum</a></li>
      <li class="<?php echo $active['video']?>"><a href="<?php echo $hqdir;?>/video/">Vídeo</a></li>
      <li class="<?php echo $active['extras']?>"><a href="<?php echo $hqdir;?>/extras/">Extras</a></li>
      <li class="<?php echo $active['otros']?>"><a href="<?php echo $hqdir;?>/otros/">Otros</a></li>
      <li class="<?php echo $active['precios']?>"><a href="<?php echo $hqdir;?>/precios/">Precios</a></li>
      <li class="<?php echo $active['vosotros']?>"><a href="<?php echo $hqdir;?>/vosotros/">Vosotros</a></li>
    </ul>
  </nav>
  <span class="menu">
    <div class="raya"></div>
    <div class="raya"></div>
    <div class="raya"></div>
  </span>

</header>
