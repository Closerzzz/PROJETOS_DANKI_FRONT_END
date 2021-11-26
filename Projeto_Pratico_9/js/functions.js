$('nav.desktop a').hover(function(){
    $('nav li').removeClass('selected');
    $(this).parent().addClass('selected');
})

//MENU MOBILE
$('nav.mobile h3').click(function(){
    $('ul.nav-desktop').slideToggle();
})