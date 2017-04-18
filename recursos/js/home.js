function cargaFondosEscritorio(){
  var oReq = new XMLHttpRequest(); //New request object

  oReq.onload = function() {
      //Obtiene string con rutas de imagenes
      var datos=this.responseText;

      console.log(datos);

      //Las separa por las comas
      var array=datos.split(',');
      //Mete cada ruta en un elemento del array2
      var array2=[];

      console.log(array);

      for(var i=0;i<array.length;i++){
        var inicio=array[i].indexOf("\"");
        var final=array[i].lastIndexOf("\"");
        var foto=array[i].substring(inicio+1,final).replace("[","");
        array2[i]='recursos/img/home/' + foto;
      };

      //Precarga las imagenes desde su ruta. Devuelve un array de objetos imagen sobre los que comprobar estado
      var imagenes=preloadImgs(array2);
      var imagenesCargadas=[];
      //Comprueba las imagenes que ya estan cargadas y las añade, en el mismo orden en que estan en imagenes[], a imagenesCargadas[] quitandolas de imagenes[]
      var checkLoad=setInterval(function(){
        if(imagenes[0].complete){
          imagenesCargadas.push(imagenes[0].src);
          imagenes.splice(0,1);
        };
        //Comprueba que no quedan imagenes por cargar para parar el interval
        if(imagenes.length==0){
          clearInterval(checkLoad);
        };
        console.log(imagenesCargadas);
      },150);

      //Intervalo para ir cambiando el fondo. Dependiente de las imagenes que hay en imagenesCargadas[]--Solo pondra de fondo las que ya esten descargadas
      var pos=0;
      var ciclo=setInterval(function(){
        var max=imagenesCargadas.length-1;
        if(max>3){
          $('.shade').remove();
          if(pos<max){
            pos++;
            $('.home').css('background-image',"url('"+imagenesCargadas[pos]+"')");
            return;
          };
          pos=0;
          $('.home').css('background-image',"url('"+imagenesCargadas[pos]+"')");
        };
      },6000);//6000
  };
  oReq.open("get", "get-fotos.php", true);
  //                               ^ Don't block the rest of the execution.
  //                                 Don't wait until the request finishes to
  //                                 continue.
  oReq.send();
};
function cargaFondosMovil(){
  var oReq = new XMLHttpRequest(); //New request object

  oReq.onload = function() {
      //Obtiene string con rutas de imagenes
      var datos=this.responseText;
      console.log(datos);
      //Las separa por las comas
      var array=datos.split(',');
      //Mete cada ruta en un elemento del array2
      var array2=[];
      console.log(array2);
      for(var i=0;i<array.length;i++){
        var inicio=array[i].indexOf("\"");
        var final=array[i].lastIndexOf("\"");
        var foto=array[i].substring(inicio+1,final).replace("[","");
        array2[i]='recursos/img/home/movil/'+foto;
      };
      //Precarga las imagenes desde su ruta. Devuelve un array de objetos imagen sobre los que comprobar estado
      var imagenes=preloadImgs(array2);
      var imagenesCargadas=[];
      //Comprueba las imagenes que ya estan cargadas y las añade, en el mismo orden en que estan en imagenes[], a imagenesCargadas[] quitandolas de imagenes[]
      var checkLoad=setInterval(function(){
        if(imagenes[0].complete){
          imagenesCargadas.push(imagenes[0].src);
          imagenes.splice(0,1);
        };
        //Comprueba que no quedan imagenes por cargar para parar el interval
        if(imagenes.length==0){
          clearInterval(checkLoad);
        };
        console.log(imagenesCargadas);
      },150);

      //Intervalo para ir cambiando el fondo. Dependiente de las imagenes que hay en imagenesCargadas[]--Solo pondra de fondo las que ya esten descargadas
      var pos=0;
      var ciclo=setInterval(function(){
        var max=imagenesCargadas.length-1;
        if(max>3){
          $('.shade').remove();
          if(pos<max){
            pos++;
            $('.home').css('background-image',"url('"+imagenesCargadas[pos]+"')");
            return;
          };
          pos=0;
          $('.home').css('background-image',"url('"+imagenesCargadas[pos]+"')");
        };
      },6000);
  };
  oReq.open("get", "get-fotos-movil.php", true);
  //                               ^ Don't block the rest of the execution.
  //                                 Don't wait until the request finishes to
  //                                 continue.
  oReq.send();
};

$('document').ready(function(){
  if(window.innerWidth>=770){
    cargaFondosEscritorio();
  }else if(window.innerWidth<770){
    cargaFondosMovil();
  };

  $(window).on('orientationchange',function(event){
    window.location.reload();
  });

});
