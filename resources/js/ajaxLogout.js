$('#btn_logout').on('click', function (e) {
    e.preventDefault();
    $.ajax({     
        type: $('#logout-form').attr('method'), 
        url: $('#logout-form').attr('action'),     
        data: $('#logout-form').submit()
    }); 
});
