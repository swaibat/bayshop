$(document).ready(function() {
    $(document).on('click', '#menu', function(e) {
        e.preventDefault();
        $('modal-dialog').addClass($(this).data('modal'));
        var url = $(this).data('id'); // it will get action url
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show(); // load ajax loader
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'html'
        })
        .done(function(data) {
            $('#dynamic-content').html('');
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide(); // hide ajax loader 
        })
        .fail(function() {
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
    });
    $('form').parsley();
    $('#example').DataTable({
        dom: "<'top'f>" + "<'bottom't>" +
            "<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>"
    });
    $("#status").on('change', (e) => {
        const {
            target
        } = e
        target.checked === true ? target.value = '0' : target.value = '1';
        console.log(e.target.value);
    })
    $('#content').summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });
    $('#description').summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false // set focus to editable area after initializing summernote
    });
    $('#country').select2({
        placeholder: 'Select Country'
    });
    $('#category').select2({
        placeholder: 'Select category'
    });
    $('#product_type').select2({
        placeholder: 'Select product Type'
    });
    $('#vendor').select2({
        placeholder: 'Select product Type'
    });
    $('#type').select2({
        placeholder: 'Select Type'
    });
});


