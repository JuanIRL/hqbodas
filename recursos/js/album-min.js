var hacerVisibles=function (){
  console.log('Visibles');
  $('.foto').each(function(idx){
    console.log('visible');
    var ft=$(this);
    setTimeout(function(){
      console.log('espera');
      ft.addClass('visible');
    }, idx*100)
  });
  setTimeout(function(){
    $('.txt-invisible').each(function(i){
      var txt=$(this);
      setTimeout(function(){
        txt.removeClass('txt-invisible');
      },i*500);
    });
  }, 1000);
};

$('document').ready(function(){

  var oReq = new XMLHttpRequest();

  oReq.onload = function() {
    var datos=this.responseText;
    var array=datos.split(',');
    var array2=[];
    for(var i=0;i<array.length;i++){
      var foto=array[i];
      foto=foto.replace('[','');
      foto=foto.replace(']','');
      num=foto.length;
      foto=foto.substring(1,num-1);
      foto='../recursos/img/album/'+foto;
      array2.push(foto);
    }
    cache=preloadImgs(array2);
    var check=true;
    //Comprueba regularmente si han terminado de descargar
    var checkReady=setInterval(function(){

      for(var i=0; i<cache.length;i++){
        check=check && cache[i].complete; //Importante!!
      }
      if(!check){
          console.log('Cargando imagenes...');
          check=true;
      } else {
        console.log('Imagenes cargadas.')

        clearInterval(checkReady);

        for(var j=0;j<cache.length;j++){
          $('.album-wrapper').append("<div class='foto'><img src='"+ cache[j].src + "'/></div>");
        }
        hacerVisibles();
      }
    },300);

  }

  oReq.open("get", "get-album.php", true);

  oReq.send();
});


