$('document').ready(function(){
  $('.close').on('click',function(){
    $('.alerta').addClass('hide');
  });
  setTimeout(function(){
    console.log('Escondiendo');
    $('.alerta').addClass('hide');
    setTimeout(function(){
      $('.alerta').addClass('oculto');
    },1000)
  },5000);

});
