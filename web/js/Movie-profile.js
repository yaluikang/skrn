$(window).on('load',function(){
    let $id = $('#content-sidebar-pro').attr('data-movie-id');
    let $actors = new AjaxBuilder("http://lukankin.ru/getactors", "GET");
    $actors.setGetParameter('movieid', $id);
    $actors.ajaxRequest();
});