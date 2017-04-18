var wWidth = window.innerWidth;
var wHeight = window.innerHeight;
var abrirNav= function (){
  $('nav').addClass('is-open');
  $('.header-wrapper').addClass('is-open');
  $('.menu').addClass('is-open');
  $('.logo').addClass('is-open');
};
var cerrarNav= function(){
  $('nav').removeClass('is-open');
  $('.header-wrapper').removeClass('is-open');
  $('.menu').removeClass('is-open');
  $('.logo').removeClass('is-open');
}
$(document).ready(function(){
  /**if(wWidth>640){
    $('.menu').hover(function(){
      abrirNav();
      $('header').on('mouseenter',function(){
        abrirNav();
      });
      $('header').on('mouseleave',function(){
        cerrarNav();
        $(this).off('mouseenter');
      });
    });
  }*/
  $('.menu').on('click',function(){
    if(!$(this).hasClass('is-open')){
      abrirNav();
    }else{
    cerrarNav();
    }
  });
});
