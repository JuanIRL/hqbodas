function subir(){
  console.log("Subiendo..."+window.innerWidth);
  if(window.innerWidth>770 && window.innerWidth<1000){
    $('.content').each(function(){
      var content=$(this);
      var topDis=content.position().top;
      console.log("Posicion previa: "+topDis);
      $(this).css("top",(topDis-240)+"px");
      console.log("Posicion posterior: "+(topDis-240));
    });
    if($('.content:first-child').position().top<=-240){
      $('.subir').css("display","none");
    }
    $('.bajar').css('display','block');
    return;
  }
  if(window.innerWidth>1500){
    $('.content').each(function(){
      var content=$(this);
      var topDis=content.position().top;
      console.log("Posicion previa: "+topDis);
      $(this).css("top",(topDis-400)+"px");
      console.log("Posicion posterior: "+(topDis-400));
    });
    if($('.content:first-child').position().top<=-400){
      $('.subir').css("display","none");
    }
    $('.bajar').css('display','block');
    return;
  }
  $('.content').each(function(){
    var content=$(this);
    var topDis=content.position().top;
    console.log("Posicion previa: "+topDis);
    $(this).css("top",(topDis-300)+"px");
    console.log("Posicion posterior: "+(topDis-300));
  });
  if($('.content:first-child').position().top<=-300){
    $('.subir').css("display","none");
  }
  $('.bajar').css('display','block');
  return;

}
function bajar(){
  if(window.innerWidth > 1000 || window.innerWidth < 770){
    $('.content').each(function(){
      var content=$(this);
      var topDis=content.position().top;
      console.log("Posicion previa: "+topDis);
      $(this).css("top",(topDis+300)+"px");
      console.log("Posicion posterior: "+(topDis+300));
    });
    if($('.content:last-child').position().top>=300){
      $('.bajar').css("display","none");
    };
    $('.subir').css('display','block');
    return;
  };
  if(window.innerWidth>=770 && window.innerWidth<=1000){
    $('.content').each(function(){
      var content=$(this);
      var topDis=content.position().top;
      console.log("Posicion previa: "+topDis);
      $(this).css("top",(topDis+240)+"px");
      console.log("Posicion posterior: "+(topDis+240));
    });
    if($('.content:last-child').position().top>=240){
      $('.bajar').css("display","none");
    };
    $('.subir').css('display','block');
    return;
  };
  if(window.innerWidth>1500){
    $('.content').each(function(){
      var content=$(this);
      var topDis=content.position().top;
      console.log("Posicion previa: "+topDis);
      $(this).css("top",(topDis+400)+"px");
      console.log("Posicion posterior: "+(topDis+400));
    });
    if($('.content:last-child').position().top>=400){
      $('.bajar').css("display","none");
    };
    $('.subir').css('display','block');
    return;
  };
};

$(document).ready(function(){

  $('.subir').on('click',function(){
    subir();
  });
  $('.bajar').on('click',function(){
    bajar();
  });


});


