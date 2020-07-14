<form id="form" class="w-100" method="post" action="<?= base_url('admin/settings'); ?>">
    <nav id='action-nav' class="d-flex justify-content-between align-items-center  p-0 mt-n5 mb-3 ">
        <div class="d-flex ml-auto">
            <button class="btn btn-light">
                Cancel
            </button>
            <button type="submit" class="btn btn-light ml-3 px-4">
                save
            </button>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2">
            <div class="bg-white p-3 shadow-xs rounded">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-checklist-tab" data-toggle="pill" href="#v-pills-checklist"
                        role="tab" aria-controls="v-pills-checklist" aria-selected="true">Checklist</a>
                    <a class="nav-link" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general" role="tab"
                        aria-controls="v-pills-general" aria-selected="false">General</a>
                    <a class="nav-link" id="v-pills-store-tab" data-toggle="pill" href="#v-pills-store" role="tab"
                        aria-controls="v-pills-store" aria-selected="false">Store</a>
                    <a class="nav-link" id="v-pills-emails-tab" data-toggle="pill" href="#v-pills-emails" role="tab"
                        aria-controls="v-pills-emails" aria-selected="false">Emails</a>
                    <a class="nav-link" id="v-pills-SEO-tab" data-toggle="pill" href="#v-pills-SEO" role="tab"
                        aria-controls="v-pill-SEO" aria-selected="false">SEO</a>
                    <a class="nav-link" id="v-pills-Intergrations-tab" data-toggle="pill" href="#v-pills-Intergrations"
                        role="tab" aria-controls="v-pills-Intergrations" aria-selected="false">Intergrations</a>
                    <a class="nav-link" id="v-pills-Social-tab" data-toggle="pill" href="#v-pills-Social" role="tab"
                        aria-controls="v-pills-Social" aria-selected="false">Social login</a>
                    <a class="nav-link" id="v-pills-Slider-tab" data-toggle="pill" href="#v-pills-Slider" role="tab"
                        aria-controls="v-pills-Slider" aria-selected="false">Slider</a>
                </div>
            </div>
        </div>
        <div class='col-md-10 rounded' id="form" novalidate="">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- settings Checklist -->
                <div class="tab-pane  py-0 fade py-0" id="v-pills-checklist" role="tabpanel"
                    aria-labelledby="v-pills-checklist-tab">
                    <?php include 'checklist.php'?>
                </div>
                <!-- General settings -->
                <div class="tab-pane py-0 fade" id="v-pills-general" role="tabpanel"
                    aria-labelledby="v-pills-general-tab">
                    <?php include 'general.php'?>
                </div>
                <!-- store settings -->
                <div class="tab-pane py-0 fade show active" id="v-pills-store" role="tabpanel"
                    aria-labelledby="v-pills-store-tab">
                    <?php include 'store.php'?>
                </div>
                <!-- emails settings -->
                <div class="tab-pane py-0 fade" id="v-pills-emails" role="tabpanel"
                    aria-labelledby="v-pills-emails-tab">
                    <?php include 'emails.php'?>
                </div>
                <!-- seo settings -->
                <div class="tab-pane py-0 fade" id="v-pills-SEO" role="tabpanel" aria-labelledby="v-pills-SEO-tab">
                    <?php include 'SEO.php'?>
                </div>
                <!-- intergrations settings -->
                <div class="tab-pane py-0 fade" id="v-pills-Intergrations" role="tabpanel"
                    aria-labelledby="v-pills-Intergrations-tab">
                    <?php include 'intergrations.php' ?>
                </div>
                <!-- social settings -->
                <div class="tab-pane py-0 fade" id="v-pills-Social" role="tabpanel"
                    aria-labelledby="v-pills-Social-tab">
                    <?php include 'social.php'?>
                </div>
                <!-- Slider settings -->
                <div class="tab-pane py-0 fade" id="v-pills-Slider" role="tabpanel"
                    aria-labelledby="v-pills-Slider-tab">
                    <?php include 'slider.php' ?>
                </div>
            </div>
        </div>
    </div>
</form>
<?= script_tag('assets/shared/jquery/jquery-3.5.1.min.js'); ?>
<script>
var formData = new FormData($('#form')[0]);
// logo upload
$('#logo').change(function() {
    const file = $(this)[0].files[0];
    formData.append('logo', file);
    const reader = new FileReader();
    reader.onloadend = () => $('#logo-img').css("background-image", "url(" + reader.result + ")");
    file ? reader.readAsDataURL(file) : '';
});

// logo upload
$('#favicon').change(function() {
    const file = $(this)[0].files[0];
    formData.set('favicon', file);
    const reader = new FileReader();
    reader.onloadend = () => $('#favicon-img').css("background-image", "url(" + reader.result + ")");
    file ? reader.readAsDataURL(file) : '';
});
$("form").submit(function(e) {
    e.preventDefault();
    formData.append('data', JSON.stringify($(this).serializeArray()));
    $.ajax({
        url: '/admin/settings',
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data, textStatus, jqXHR) {
            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
        }
    });
});
</script>
