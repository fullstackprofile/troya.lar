$( document ).ready(function() {
    $('.nav-menu li a.submenu').on('click', function (e){
        e.preventDefault();

        if(!$(this).parent().hasClass('active')){
            $('.main-menu ul').removeClass('show-submenu');
            $('.main-menu li').removeClass('active');
            $(this).parent().addClass('active');
            $(this).next().addClass('show-submenu');
        }else {
            $(this).parent().removeClass("active");
            $(this).next().removeClass('show-submenu');
        }
    });
});
