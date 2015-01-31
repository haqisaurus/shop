var BASE_URL = $('#BASE_URL').val();
var SITE_URL = $('#SITE_URL').val();

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

    var selectedId = $('#mytable').find('input[name="selected-rows[]"]:checked').map(function() { return $(this).val() }).get(),
    url = $(this).attr('data-url');

    $.ajax({
        url: url,
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

var indexUpload = 1,
    href = window.location.href,
    index =href.substr(href.lastIndexOf('/') + 1);

$('#fileupload').fileupload({
    url: SITE_URL + '/product/upload',
    dataType: 'json',
    sequentialUploads: true,
    formData: { data : index},
    done: function (e, data) {
        if (data.result.status) {
            $('#media-progress').find('tr').eq(indexUpload).find('.right').html('<i class="fa fa-check-circle-o"></i>');
        } else {
            $('#media-progress').find('tr').eq(indexUpload).find('.right').html('<i class="fa fa-times-circle-o"></i>');
        }

        indexUpload++;
    },
    fail: function (e, data) {
        $('#media-progress').find('tr').eq(indexUpload).find('.right').html('<i class="fa fa-times-circle-o"></i>');
        indexUpload++;
    },
    progress: function (e, data) {

        var parent = $('#media-progress'),
            length = parent.find('tr').length,
            tr = $('<tr/>', { 'class' : 'row-' + length }),
            td = $('<td/>'),
            img = $('<img/>', { 'class' : 'image-preview'}),
            progress = $('<div/>', { 'class' : 'progress'}),
            bar = $('<div/>', { 'class' : 'progress-bar bar-' + length, 'role' : 'progressbar', 'aria-valuenow' : 0, 'aria-valuemin' : 0, 'aria-valuemax' : '100' });
        
        parent.append(tr.append([
            $('<td/>', { 'class' : ''}).append(length), 
            $('<td/>', { 'class' : 'left'}).append(img), 
            $('<td/>', { 'class' : 'center'}).append(progress.append(bar)),
            $('<td/>', { 'class' : 'right'}).append($('<img/>', { 'class' : 'image-status'}).attr('src', BASE_URL + 'assets/admin/img/loader.gif'))
            ]));

        var percent = parseInt(data.loaded / data.total * 100, 10);
        parent.find('.bar-' + length).css('width', percent + '%').text(percent);

        if (data.files && data.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                parent.find('.row-' + length).find(img).attr('src', e.target.result);
            }
            reader.readAsDataURL(data.files[0]);
        }
    },
    add: function (e, data) {
        var goUpload = true;
        var uploadFile = data.files[0];
        if (!(/\.(gif|jpg|jpeg|tiff|png|svg)$/i).test(uploadFile.name)) {
            alert('You must select an image file only');
            goUpload = false;
        }
        if (uploadFile.size > 2000000) { // 2mb
            alert('Please upload a smaller image, max size is 2 MB');
            goUpload = false;
        }
        if (goUpload == true) {
            data.submit();
        }
    },
});

