// 詳細ボタンでモーダルウィンドウを開く
$(".button__detail").on('click', function () {
  // var id = $(this).data('id');
  // $(id).fadeIn();
  $(this).next().fadeIn();
});

// xボタンでモーダルウィンドウを閉じる
$(".button__modal-close").on('click', function () {
  // var id = $(this).data('id');
  // $(id).fadeOut();
  $('.div__modal').fadeOut();
});

$(function(){
  $('#datepicker').datepicker();
});
