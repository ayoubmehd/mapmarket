$(function () {

    var images = $('#inputGroupFile04');
    var gallery1 = $('#gallery1');
    images.on('change', function () {

        var imagesFiles = images.prop('files');
        console.log('imagesFiles.lenght' ,imagesFiles.length)
        if(imagesFiles.length > 0) {
            var form_data = new FormData();
            for(var i = 0; i < imagesFiles.length; i++) {
                form_data.append('images[]', imagesFiles[i], imagesFiles[i].name);
                console.log('Form Data',imagesFiles[i]);
            }


            jQuery.ajax({
                type: "POST",
                url: images.data('action'),
                data: form_data,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res)
                    {
                        gallery1.prepend(res);
                    }
                }
            });
        }
    });

    gallery1.on('click', '', function () {

        

    });

});