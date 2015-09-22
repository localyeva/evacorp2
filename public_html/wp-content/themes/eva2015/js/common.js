$('#navigation li button.navbar-btn').click(function () {
    location.href = $(this).data('url');
});