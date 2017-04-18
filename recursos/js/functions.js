//Precarga las imagenes en el navegador y ejecuta la funcion pasada como ultimo parametro una vez estas estan cargadas
//Las imagenes deben pasarse en un array propiedad de un objeto
var preloadImages = function(param) { //La funcion debe pasarse como una propiedad de ese objeto
  var cache = [];
  var fotos= param.fotos;
  var check=true;
  var num_fotos = fotos.length;
  //Pide las imagenes y las carga en cache
  for (var i = num_fotos; i--;) {  //Recorre toto el array de fotos
    var cacheImage = document.createElement('img'); //Importante!!
    cacheImage.src = fotos[i];
    cache.push(cacheImage);
  }
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
      param.funcion();
    }
  },300);

};
function preloadImgs(imagenes) {
  var cache = [];
  var num_img = imagenes.length;
  for (var i=0;i<num_img;i++) {  //Recorre toto el array de fotos
    var cacheImage = document.createElement('img'); //Importante!!
    cacheImage.src = imagenes[i];
    cache.push(cacheImage);
  }
  return cache;
}

function preloadImg(imagen){
  var imagenDOM=document.createElement('img');
  imagenDOM.src=imagen;
  return imagenDOM;
}

function bloqueoCarga(elemento){
  elemento.append("<div class='shade flex-center-center'><div class='loader landing'></div></div>");
};
