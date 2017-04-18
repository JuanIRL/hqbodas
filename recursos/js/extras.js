function botaItem() {
  var randNum = Math.floor(Math.random() * $('.item').length)
  $('.item').eq(randNum).addClass('botar').siblings().removeClass('botar');
  console.log(randNum);

};
var botar;
$(document).ready(function(){
  botar=setInterval(function(){
    console.log('Bota!!');
    botaItem();
  },1000);
  $('.item').on('click',function(){
    var item=$(this);
    clearInterval(botar);
    if(item.hasClass('abierto')){
      item.removeClass('abierto').children('.extras-content').addClass('cerrado');
      botar=setInterval(function(){console.log('Bota');botaItem();},1000);
    } else {
      item.addClass('abierto').children('.extras-content').removeClass('cerrado');
      item.siblings('.item').removeClass('abierto').children('.extras-content').addClass('cerrado');
      clearInterval(botar);
    }


  });

});
