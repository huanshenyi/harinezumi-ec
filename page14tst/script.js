$(function() {
  // 「#login-show」要素に対するclickイベントを作成してください
  $('#login-show').click(function(){
    $('#login-modal').fadeIn();
  });
  $('.signup-show').click(function(){
  $('#signup-modal').fadeIn();
});
$('.close-modal').click(function(){
  $('#login-modal').fadeOut();
 $('#signup-modal').fadeOut();


});
$('.language-text').hide();


$('.language-title').hover(
  function() {
    // カーソルをのせた時の処理
    $('.language-text').fadeIn();
  },
  function() {
    // カーソルをはずした時の処理
    $('.language-text').fadeOut();
  });

  $("#hanhui").click(function(){
      $('html,body').animate({
        'scrollTop': 0
      }, 'slow');
    });

});
