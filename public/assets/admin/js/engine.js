$('#mytable')
.off('click', '#checkall')
.on('click', '#checkall', function () {
    if ($("#mytable #checkall").is(':checked')) {
        $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", true);
        });

    } else {
        $("#mytable input[type=checkbox]").each(function () {
            $(this).prop("checked", false);
        });
    }
});

$('#mytable')
.off('click', '.delete-row')
.on('click', '.delete-row', function() {
    var id = $(this).closest('tr').attr('id');
    $('#delete-button').attr('data-row-id', id);
});

$('#delete-popup')
.off('click', '#delete-button')
.on('click', '#delete-button', function() {
    var id = $(this).attr('data-row-id');
    $('#' + id).find('.delete-row').submit();
    console.log($('#' + id))
});

$('#delete-selected-popup')
.off('click', '#delete-selected-button')
.on('click', '#delete-selected-button', function() {
    var selectedId = $('#mytable').find('input[name="selected-rows[]"]:checked').map(function() { return $(this).val() }).get();

    $.ajax({
        url: 'categories/delAll',
        type: 'POST',
        dataType: 'json',
        data: {id: selectedId},
    })
    .done(function(response) {
        if(response.status)
            window.location.reload();
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    

});

$("[data-toggle=tooltip]").tooltip();