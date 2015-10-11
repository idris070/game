$(document).ready(function(){

    // При наведении на ссылку
    $(".link_test").mouseover
    (function(){

        // Получаем ID блока, который нужно показать
        var title = $(this).attr("title");

        // Показываем блок
        $(this).append( $(title) );
        $(title).fadeIn();
    });

    // При уходе мышки со ссылки
    $(".link_test").mouseout
    (function(){

        // Получаем ID блока, который нужно показать
        var title = $(this).attr("title");

        // Скрываем блок
        $(title).fadeOut();

    });
});

function time1() {
  var time = Date.now();
  window.location = "index.php?time="+time;

}
