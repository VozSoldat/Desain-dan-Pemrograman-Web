$(document).ready(function() {
    $('#file').change(function() {
        if (this.file_length) {
            $('#upload-button').prop('disabled', false).css('opacity', 1)
        }else{
            $('#upload-button').prop('disabled', true).css('opacity', 0.5)
        }
    })

    $('#upload-form').submit(function(e){
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error:function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file');
            }
        })
    })
})