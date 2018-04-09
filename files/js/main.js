$(document).ready(function(){
    $(document).on('click', '#menu_icon', function(){
        $('#primary-menu').slideToggle();
        $(this).find('svg').toggleClass('fa-bars fa-times');
    });

    $('.tablink').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.tablink').removeClass('current');
		$('.tabcontent').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
});