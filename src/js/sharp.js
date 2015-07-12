$(function() {
    $('#menu-trigger').click(function() {
        $('.main-menu').toggleClass('open');
        $(this).find('.fa').each(function() {
            if ($(this).hasClass('fa-chevron-circle-down')) {
                $(this).removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up')
            } else {
                $(this).removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down')
            }
        });
    });

});