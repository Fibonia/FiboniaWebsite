$(function(){

  $('.nav-scroll').click(function(){
    $('.active').removeClass('active');
    $('.show').removeClass('show');
    panelId = $(this).attr('href');
    $(panelId).addClass('show');
    $(this).addClass('active');
  });
  
});
