$(function(){
    var windowwidth = $(window)[0].innerWidth;
    if(windowwidth <= 768){
    $('.nome-usuario h2').click(function(){
        var el = $('.sidebar')
        if(el.is(':visible')){
            el.hide();
            $('.main-content').css('left','0px')
        }else{
            el.show();
            $('.main-content').css('left','300px')
            }
        })
    }
})