$(document).ready(function(){
  var oReq = new XMLHttpRequest();
  oReq.onload = function() {

    var datos=JSON.parse(this.responseText);
    console.log(datos);

    var total=datos.total;
    bucleVideos: for(i=0;i<total;i++){
      var vidData=datos.data[i];
      var uri=vidData.uri;
      var id=uri.substring(uri.lastIndexOf("/")+1);
      var titulo=vidData.name;
      var date=vidData.created_time;
      var tagBodaId=0;
      if(vidData.tags[0]){
        tagBodaId=vidData.tags[0].canonical;
      }
      var fechaVideo=date.substring(0,10).split('-');
      var foto=vidData.pictures.sizes[3].link;
      var notBoda=false;

      for(var j=0; j<vidData.tags.length;j++){
        var tag = vidData.tags[j].canonical.toLowerCase();
        if( tag == "comunion" || tag == "bautizo" || tag=="bautizos" || tag=="comuniones"){
          notBoda=true;
        };
      };
      if(notBoda){
        continue bucleVideos;
      };
      if(tagBodaId){
        $('.galeria').append("<a target='_blank' href='"+vidData.link+"'><div class='boda' data-videoid='"+id+"' data-bodaid='"+tagBodaId+"'><div class='muestra video fa fa-vimeo-square' style='background-image:url("+foto+")'></div><div class='info'><h3>"+titulo+"</h3><h5>Video subido el "+fechaVideo[2]+"-"+fechaVideo[1]+"-"+fechaVideo[0]+"</h5></div></div></a>");
      };
    }

    $('.boda').each(function(){
      var boda=$(this);
      var id=boda.data('bodaid');
      if(id=="bodas"){
        return;
      };
      $.getJSON('../recursos/img/bodas/'+id+'/info.json',function(data){

        boda.children('.info').children('h5').html(data.fecha);

      });
    });



  }
  oReq.open("get", "https://api.vimeo.com/users/hqbodas/videos", true);

  oReq.setRequestHeader("Authorization","bearer c899f65a2892733633f4809bb54aee75");

  oReq.send();



});


