$(window).on('load', function(){
    $('.p-loading').delay(900).fadeOut(800);
  });
  
  $(function(){
    setTimeout('stopload()', 10000);
  })
  
  function stopload(){
    $('.p-loading').delay(900).fadeOut(800);
  }