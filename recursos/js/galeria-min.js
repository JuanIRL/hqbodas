function cargaMiniaturas(boda){

  var muestra=boda.children('.muestra');
  var href=boda.parent('a').attr('href');


  var position=href.indexOf('bodaid=')+7;

  var bodaid=href.substring(position);


  var oReq = new XMLHttpRequest(); //New request object

  oReq.onload = function() {
      //This is where you handle what to do with the response.
      //The actual data is found on this.responseText
      var datos=this.responseText;
      var array=datos.split(',');
      var array2=[];
      for(var i=0;i<array.length-2;i++){
        var inicio=array[i+2].indexOf("\"");
        var final=array[i+2].lastIndexOf("\"");
        var foto=array[i+2].substring(inicio+1,final);
        array2[i]='../recursos/img/bodas/'+bodaid+'/miniaturas/'+foto;
      }
      var param={
        fotos: array2,
        funcion: function(){
          var ranNum=Math.floor((Math.random()*3)+2);
          muestra.children('.shade').remove();
          var pos=0;
          muestra.css('background-image',"url('"+array2[pos]+"')");
          var max=array2.length-1;
          var ciclo=setInterval(function(){
            if(pos<max){
              pos++;
              muestra.css('background-image',"url('"+array2[pos]+"')");
              return;
            }
            pos=0;
            muestra.css('background-image',"url('"+array2[pos]+"')");
          },ranNum*1000);


        }
      }
      preloadImages(param);
  }
  oReq.open("get", "../galeria/get-fotos.php?bodaid="+bodaid, true);
  //                               ^ Don't block the rest of the execution.
  //                                 Don't wait until the request finishes to
  //                                 continue.
  oReq.send();
}

function ordenaBodas(arraybodas){
  console.log(arraybodas);
  var lista=[];
  lista.push(arraybodas[0]);
  var meses=["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
  bodas: for(var i=1;i<arraybodas.length;i++){
    var objboda=arraybodas[i];
    var idarray=objboda.idboda;
    var datearray=objboda.fecha.split(" ");
    var mesarray=meses.indexOf(datearray[0].toLowerCase())+1;
    var yrarray=Number(datearray[2]);
    var lengthlista=lista.length;
    console.log(idarray + " fecha " + yrarray + "año-mes" + mesarray);
    list: for(var j=0;j<lengthlista;j++){
      var datelista=lista[j].fecha.split(" ");
      idlista=lista[j].idboda;
      var meslista=meses.indexOf(datelista[0].toLowerCase())+1;
      var yrlista=Number(datelista[2]);

      console.log("Comparando: " + idarray + " año" + yrarray + " mes" + mesarray + " con " + idlista + " año" + yrlista + " mes" + meslista);
      if(yrarray<yrlista){
        console.log(yrarray + "<" + yrlista);
        lista.splice(j,0,objboda);
        console.log(lista);
        continue bodas;
      }
      if(yrarray===yrlista){
        if(mesarray<meslista){
          console.log(mesarray + "<" + meslista);
          lista.splice(j,0,objboda);
          console.log(lista);
          continue bodas;
        }
      }
    }
    lista.push(objboda);
    console.log(idarray + "Puesto al final");
    console.log(lista);

  }

  for(var l=0;l<lista.length;l++){
    var idboda=lista[l].idboda;
    var titulo=lista[l].titulo;
    var fecha=lista[l].fecha;
    $('.galeria').prepend("<a href='player.php?bodaid="+idboda+"'><div class='boda' id='"+idboda+"'><div class='muestra'><div class='shade flex-center-center'><div class='loader landing'></div></div></div><div class='info'><h3>"+titulo+"</h3><h5>"+fecha+"</h5></div></div></a>");

    cargaMiniaturas($("#"+idboda));
  }
}

$('document').ready(function(){

  var oReq = new XMLHttpRequest();

  oReq.onload = function() {
    console.log('Cargando bodas...');
    var datos=this.responseText;
    var array=datos.split(',');
    var array2=[];
    //for(var i=0;i<array.length-2;i++){
    for(var i=0;i<array.length;i++){
      //var inicio=array[i].indexOf("\"");
      //var final=array[i].lastIndexOf("\"");
      //var dirBoda=array[i].substring(inicio+1,final);
      var dirBoda=array[i];
      dirBoda=dirBoda.replace('[','');
      dirBoda=dirBoda.replace(']','');
      array2[i]=dirBoda.substring(1,dirBoda.length-1);
    }
    console.log(array2);
    var arraybodas=[];
    for(var i=0;i<array2.length;i++){
      var bodaid=array2[i];
      $.getJSON('../recursos/img/bodas/'+bodaid+'/info.json',function(data){


        var titulo=data.titulo,
        fecha=data.fecha,
        idboda=data.bodaid;

        var itemboda={titulo,fecha,idboda};
        arraybodas.push(itemboda);



        //$('.galeria').append("<a href='player.php?bodaid="+idboda+"'><div class='boda' id='"+idboda+"'><div class='muestra'><div class='shade flex-center-center'><div class='loader landing'></div></div></div><div class='info'><h3>"+titulo+"</h3><h5>"+fecha+"</h5></div></div></a>");

        //cargaMiniaturas($("#"+idboda));
      });

    }
    var interval=setInterval(function(){
      if(arraybodas.length===array2.length){
        console.log('Ordenando bodas...');
        clearInterval(interval);
        ordenaBodas(arraybodas);
      }
    },500);

  }

  oReq.open("get", "get-bodas.php", true);

  oReq.send();
});


