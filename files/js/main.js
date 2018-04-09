$(document).ready(function(){
    $(document).on('click', '#menu_icon', function(){
        $('#primary-menu').slideToggle();
        $(this).find('svg').toggleClass('fa-bars fa-times');
    });
});