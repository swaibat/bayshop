<script>
    $('.social').click((event) => {
        const provider = event.target.textContent.trim()
        var authWindow = window.open('http://localhost:8888/hauth/callback?provider=' + provider, 'authWindow', 'width=600,height=400,scrollbars=yes');
        return false;
    })
    $('#form').submit(function(event) {
        event.preventDefault();
        var data = new FormData($('#form')[0]);
        $.ajax({
            type: "POST",
            url: $(this).attr("action"),
            data: data,
            processData: false,
            contentType: false,
            cache: false,
        }).done(function(res) {
            location.replace('<?= base_url('admin/dashboard') ?>')
            Toastify({
                text: res.message,
                backgroundColor: JSON.stringify(res.status).match('20') ? "#228B22" : '#FFA500',
            }).showToast();
        }).fail(function(err) {
            Toastify({
                text: 'Error operation failed',
                backgroundColor: '#FFA500',
            }).showToast();
        });;

    });
</script>
