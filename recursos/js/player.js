var direccionactual= encodeURIComponent(window.location.href);
var fotoactual="";

function switchImage(ruta){
  $('.slideshow-wrapper').css('background-image',"url('"+ruta+"')");
  fotoactual=encodeURIComponent(ruta);
  $('.pinit').attr('data-pin-href',"https://es.pinterest.com/pin/create/button/?url="+direccionactual+"&media="+fotoactual+"&description=HQBodas%20%7C%20Vuestro%20d%C3%ADa%20especial%2C%20como%20nunca%20imaginasteis.")

}
function isLoaded(imagen, interval){

  if(imagen.complete){
    clearInterval(interval);
    $('.shade').remove();
    switchImage(imagen.src);
    console.log("Imagen cargada.")
  }
  console.log("Cargando imagen...")
}
$(document).ready(function(){

  console.log("Fotos: ");
  console.log(contenido);
  console.log(id);
  console.log("Fotos alta resolucion: ");
  console.log(contenidofull);
  var array2=[];
  var array2full=[];
  for(var i=3;i<contenido.length-2;i++){//Importante que sea a partir de contenido[i+2] y restar 5 para evitar añadir los nombres de subdirectorios. Arreglar!!

    array2[i-3]="../recursos/img/bodas/"+id+"/"+contenido[i];
  }
  for(var i=0;i<contenidofull.length-2;i++){//Importante que sea a partir de contenido[i+2] y restar 2 para evitar añadir los nombres de subdirectorios. Arreglar!!

    array2full[i]="../recursos/img/bodas/"+id+"/fullres/"+contenidofull[i];
  }
  console.log(array2);
  console.log(array2full);
  var cuenta=1;
  var cuentaMax=array2.length;
  var cuentaMaxFull=array2full.length;

  var imagenesCargadas=[preloadImg(array2.pop())];
  imagenesCargadas.push(preloadImg(array2.pop()));

  var imagenesCargadasFull=[preloadImg(array2full.pop())];
  imagenesCargadasFull.push(preloadImg(array2full.pop()));

  var cargando=setInterval(function(){
    if(imagenesCargadas[0].complete && imagenesCargadas[1].complete){
      clearInterval(cargando);
      $('.shade').remove();
      switchImage(imagenesCargadas[0].src);
      console.log("Imagen cargada.")
      $('.cuenta').html(cuenta+"/"+cuentaMax);
      fotoactual=encodeURIComponent(imagenesCargadas[0].src);
      $('.pinit').attr('data-pin-href',"https://es.pinterest.com/pin/create/button/?url="+direccionactual+"&media="+fotoactual+"&description=HQBodas%20%7C%20Vuestro%20d%C3%ADa%20especial%2C%20como%20nunca%20imaginasteis.")

    }
    console.log("Cargando imagen...")
  },300);

  $('.slideshow-wrapper').hover(function(){
    $('.pinit').removeClass('escondido');
  },function(){
    $('.pinit').addClass('escondido');
  });


  var pos=0;
  var max=imagenesCargadas.length-1;

  $('.next.min').on('click',function(){
    pos++;
    if(cuenta<cuentaMax){
      cuenta++;
      $('.cuenta').html(cuenta+"/"+cuentaMax);
    }else if (cuenta==cuentaMax) {
      cuenta=1;
      $('.cuenta').html(cuenta+"/"+cuentaMax);
    }
    if(pos<=max){
      switchImage(imagenesCargadas[pos].src);
    }
    if(pos>max){
      if(array2.length>0){
        bloqueoCarga($('.slideshow-wrapper'));
        imagenesCargadas.push(preloadImg(array2.pop()));
        imagenesCargadasFull.push(preloadImg(array2full.pop()));
        max=imagenesCargadas.length-1;
        cargando=setInterval(function(){
          if(imagenesCargadas[pos].complete){
            clearInterval(cargando);
            $('.shade').remove();
            switchImage(imagenesCargadas[pos].src);
            console.log("Imagen cargada.")
          }
          console.log("Cargando imagen...")
        },300);
      }else if (array2.length==0) {
        pos=0;
        switchImage(imagenesCargadas[pos].src);
      }
    }
  });
  $('.prev.min').on('click',function(){
    pos--;
    if(cuenta==1){
      cuenta=cuentaMax;
      $('.cuenta').html(cuenta+"/"+cuentaMax);
    }
    else if (cuenta>1) {
      cuenta--;
      $('.cuenta').html(cuenta+"/"+cuentaMax);
    }
    if(pos>=0){
      if(imagenesCargadas[pos].complete){
        switchImage(imagenesCargadas[pos].src);
      }
    }
    if(pos<0){
      if(array2.length==0){
        pos=max;
        switchImage(imagenesCargadas[pos].src);
      }else if (array2.length>=0) {
        bloqueoCarga($('.slideshow-wrapper'));
        imagenesCargadas.unshift(preloadImg(array2.shift()));
        imagenesCargadasFull.unshift(preloadImg(array2full.shift()));
        pos=0;
        max=imagenesCargadas.length-1;
        cargando=setInterval(function(){
          if(imagenesCargadas[pos].complete){
            clearInterval(cargando);
            $('.shade').remove();
            switchImage(imagenesCargadas[pos].src);
            console.log("Imagen cargada.");
          }
          console.log("Cargando imagen...");
        },300);
      }
    }
  });
  $('.fullscreen').on('click',function(){
    $('.slideshow-wrapper').toggleClass('full');
    $('.controles').toggleClass('outside');//-----------------------------------borrar?
    if($(this).hasClass('fa-expand')){
      $(this).removeClass('fa-expand').addClass('fa-compress');
      $('.logo').addClass('escondido');
      max=imagenesCargadasFull.length-1;
      switchImage(imagenesCargadasFull[pos].src);
      $('.prev').removeClass('min').addClass('full');
      $('.next').removeClass('min').addClass('full');
      return;
    }
    $(this).removeClass('fa-compress').addClass('fa-expand');
    $('.logo').removeClass('escondido');
    max=imagenesCargadas.length-1;
    switchImage(imagenesCargadas[pos].src);
    $('.prev').removeClass('full').addClass('min');
    $('.next').removeClass('full').addClass('min');
  });
  $('.next.full').on('click',function(){
    pos++;
    if(cuenta<cuentaMaxFull){
      cuenta++;
      $('.cuenta').html(cuenta+"/"+cuentaMaxFull);
    }else if (cuenta==cuentaMaxFull) {
      cuenta=1;
      $('.cuenta').html(cuenta+"/"+cuentaMaxFull);
    }
    if(pos<=max){
      switchImage(imagenesCargadasFull[pos].src);
    }
    if(pos>max){
      if(array2full.length>0){
        bloqueoCarga($('.slideshow-wrapper'));
        imagenesCargadasFull.push(preloadImg(array2full.pop()));
        imagenesCargadas.push(preloadImg(array2.pop()));
        max=imagenesCargadasFull.length-1;
        cargando=setInterval(function(){
          if(imagenesCargadasFull[pos].complete){
            clearInterval(cargando);
            $('.shade').remove();
            switchImage(imagenesCargadasFull[pos].src);
            console.log("Imagen cargada.")
          }
          console.log("Cargando imagen...")
        },300);
      }else if (array2full.length==0) {
        pos=0;
        switchImage(imagenesCargadasFull[pos].src);
      }
    }
  });
  $('.prev.full').on('click',function(){
    pos--;
    if(cuenta<=1){
      cuenta=cuentaMaxFull;
      $('.cuenta').html(cuenta+"/"+cuentaMaxFull);
    }else if (cuenta>1) {
      cuenta--;
      $('.cuenta').html(cuenta+"/"+cuentaMaxFull);
    }
    if(pos>=0){
      if(imagenesCargadasFull[pos].complete){
        switchImage(imagenesCargadasFull[pos].src);
      }
    }
    if(pos<0){
      if(array2full.length==0){
        pos=max;
        switchImage(imagenesCargadasFull[pos].src);
      }else if (array2full.length>=0) {
        bloqueoCarga($('.slideshow-wrapper'));
        imagenesCargadasFull.unshift(preloadImg(array2full.shift()));
        imagenesCargadas.unshift(preloadImg(array2.shift()));
        pos=0;
        max=imagenesCargadasFull.length-1;
        cargando=setInterval(function(){
          if(imagenesCargadasFull[pos].complete){
            clearInterval(cargando);
            $('.shade').remove();
            switchImage(imagenesCargadasFull[pos].src);
            console.log("Imagen cargada.");
          }
          console.log("Cargando imagen...");
        },300);
      }
    }
  });

  $.getJSON('../recursos/img/bodas/'+id+'/info.json',function(data){


    var titulo=data.titulo,
    fecha=data.fecha,
    idboda=data.bodaid;

    $('title').html('Galería '+titulo);
    $('.info h3').html(titulo);
    $('.info h5').html(fecha);
  });

});
