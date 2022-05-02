$(function() {

    $('.cb_warp').on('click', function() {
        $(this).parents('.card').find('.cb_child').prop('checked', $(this).prop('checked'));
    });
    $('.check_all').on('click', function() {
        $(this).parents().find('.cb_child').prop('checked', $(this).prop('checked'));
        $(this).parents().find('.cb_warp').prop('checked', $(this).prop('checked'));
    });
});