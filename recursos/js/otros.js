//Funcion provisional para abrir fotos en ventana aparte
var clickFotoOtros = function(e){
  //var link = e.getAttribute("src");
  var url=e.getAttribute("src");
  url=url.split("/")
  console.log(url);
  var link= url[0] + "/" + url[1] + "/" + url[2] + "/" + url[3] + "/" + url[5];
  window.open(link);
};

$(document).ready(function(){
  /**var oReq = new XMLHttpRequest();
  oReq.onload = function() {

    var datos=JSON.parse(this.responseText);
    console.log(datos);

    var total=datos.total;
    for(i=0;i<total;i++){
      var uri=datos.data[i].uri;
      var id=uri.substring(uri.lastIndexOf("/")+1);
      var titulo=datos.data[i].name;
      var date=datos.data[i].created_time;
      var tagBodaId=datos.data[i].tags[0].canonical;
      var fechaVideo=date.substring(0,10).split('-');
      var foto=datos.data[i].pictures.sizes[3].link;

      console.log("Id de la boda: "+tagBodaId);
      console.log("Fecha de subida: "+fechaVideo);
      console.log("Video "+id);
      console.log("Ruta de miniatura:" +foto);

      $('.bautizos-videos').append("<a target='_blank' href='"+datos.data[i].link+"'><div class='bautizo' data-videoid='"+id+"' data-bautizoid='"+tagBodaId+"'><div class='muestra video fa fa-vimeo-square' style='background-image:url("+foto+")'></div><div class='info'><h3>"+titulo+"</h3><h5>Video subido el "+fechaVideo[2]+"-"+fechaVideo[1]+"-"+fechaVideo[0]+"</h5></div></div></a>");
    };

    $('.boda').each(function(){
      var boda=$(this);
      var id=boda.data('bodaid');
      $.getJSON('../recursos/img/bodas/'+id+'/info.json',function(data){

        boda.children('.info').children('h5').html(data.fecha);

      });
    });



  };
  oReq.open("get", "https://api.vimeo.com/users/hqbodas/videos", true);

  oReq.setRequestHeader("Authorization","bearer c899f65a2892733633f4809bb54aee75");

  oReq.send();*/
  var adjustSize = function(){
    var comunionesSize = 0;
    var bautizosSize = 0;
    $('.fotos.comuniones .carrusel .img').each(function(){
      comunionesSize = comunionesSize + $(this).outerWidth();
    });
    $('.fotos.bautizos .carrusel .img').each(function(){
      bautizosSize = bautizosSize + $(this).outerWidth();
    });

    $('.fotos.comuniones .carrusel').css("width",comunionesSize + "px");
    $('.fotos.bautizos .carrusel').css("width",bautizosSize + "px");
  };

  var oReq= new XMLHttpRequest();
  oReq.onload= function() {

    var datos=this.responseText;

    var grupos=datos.split("_div_");


    var arraycomuniones=grupos[0].split(',');
    var arraycomuniones2=[];
    for(var i=0;i<arraycomuniones.length;i++){
      var inicio=arraycomuniones[i].indexOf("\"");
      var final=arraycomuniones[i].lastIndexOf("\"");
      var foto=arraycomuniones[i].substring(inicio+1,final);
      arraycomuniones2[i]='../recursos/img/comuniones/min/'+foto;
    };

    var arraybautizos=grupos[1].split(',');
    var arraybautizos2=[];
    for(var i=0;i<arraybautizos.length;i++){
      var inicio=arraybautizos[i].indexOf("\"");
      var final=arraybautizos[i].lastIndexOf("\"");
      var foto=arraybautizos[i].substring(inicio+1,final);
      arraybautizos2[i]='../recursos/img/bautizos/min/'+foto;
    };
    var elementos=[];
    var checkLoad=true;
    for(var i=0;i<arraycomuniones2.length;i++){
      elementos.push(preloadImg(arraycomuniones2[i]));
    };
    for(var i=0;i<arraybautizos2.length;i++){
      elementos.push(preloadImg(arraybautizos2[i]));
    };

    var loadInterval = setInterval(function(){
      for(var i=0;i<elementos.length;i++){
        checkLoad = checkLoad && elementos[i].complete;
      };
      if(checkLoad){
        for(var i=0;i<arraycomuniones2.length;i++){
          $('.fotos.comuniones .carrusel').append("<div class='img'><img onclick='clickFotoOtros(this)' src='"+arraycomuniones2[i]+"'/></div>");
        };
        for(var i=0;i<arraybautizos2.length;i++){
          $('.fotos.bautizos .carrusel').append("<div class='img'><img onclick='clickFotoOtros(this)' src='"+arraybautizos2[i]+"'/></div>");
        };
        adjustSize();
        clearInterval(loadInterval);
      };
      checkLoad=true;
    },500);
  };

  oReq.open("get","get-fotos.php");
  oReq.send();

  $('.carrusel-arrow.left').on('click', function(){
    console.log($(this).siblings('.otros-wrapper').children('.carrusel'));
  });

  $(window).on('resize',function(event){
    adjustSize();
  });


  var txt=$('p').text();
  txt=txt.split(" ");
  var txt2="";
  for(i=0;i<txt.length;i++){
    txt2=txt2 + "<span class='text-in'>" + txt[i] + "</span> "
  }
  $('p').html(txt2);

  $('.text-in').each(function(i){
      var letra=$(this);
      setTimeout(function(){
        letra.addClass('text-in-left');
      },i * 80);
  });

});
