function ActionDestroy(Event) {

    Event.preventDefault();
    let url = $(this).data('url');
    Swal.fire({
        title: 'Bạn có muốn xóa?',
        text: "Khi xóa bạn sẽ không thấy nó nữa!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xóa luôn!'
    }).then((result) => {
        if (result.isConfirmed) {
            location.replace(url);
        }
    })
}

$(function() {
    $(document).on('click', '.ac_destroy', ActionDestroy);
});