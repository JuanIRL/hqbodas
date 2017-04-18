$(document).ready(function(){
  function resumeProgress(video,progress, value){
    video.play();
    var duration = video.duration;
    console.log(duration + " " + value);
    progress.setAttribute('value',''+value);
    progress.setAttribute('max',''+duration);

    var cuentaTiempo = setInterval (function(){
      var current = video.currentTime;
      progress.setAttribute('value',''+current);
    },500);

  }
  $('.hosted-video').each(function(){
    var video = $(this).children('video').get(0);

    var progress = $(this).children('.controls-strip').children('progress').get(0);
    progress.setAttribute('value',''+0);


    $(this).children('.controls-strip').children('.play').on('click',function(){
      var current = video.currentTime;
      if($(this).hasClass('fa-play')){
        resumeProgress(video,progress,current);
        $(this).removeClass('fa-play');
        $(this).addClass('fa-pause');
        return;
      }
      video.pause();
      $(this).removeClass('fa-pause');
      $(this).addClass('fa-play');
    });
  });

});
