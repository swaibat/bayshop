<style>
.sidepanel {
    width: 0;
    position: fixed;
    z-index: 1000;
    height: 100vh;
    width: 0px;
    top: 0;
    right: 0;
    overflow-x: hidden;
    transition: width 0.1s;
}

.panel-open {
    width: 380px;
}

.seo-title {
    font-family: arial, sans-serif;
    font-size: 1.2rem;
    color: #1a0dab;
}

.seo-description {
    font-family: arial, sans-serif;
    color: #4d5156;
    font-size: 14px;
    font-weight: normal;
    line-height: 22px;
}

.site {
    color: #202124;
}

</style>
<div class="sidepanel card shadow">
    <div class="card-body">
        <h4 class="text-center">SEO settings</h4>
        <hr>
        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Page SEO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Social Share</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <p class='mb-1'>Preview on google</p>
                <small class='mb-2'>These changes will take time to be shown in Google</small>
                <div class="border py-3 px-3 mt-2">
                    <p class='seo-description mb-1'><span class='site'>www.doolbay.com</span> > products > <span class="seo_title_text">dodo</span></p>
                    <h3 class='seo-title'><span class="seo_title_text">dodo</span> | Doolbay</h3>
                    <p class='seo-description seo_description_text truncate-overflow'>Excepteur sint reprehenderit
                        magna ex do excepteur
                        deserunt ullamco do aliqua laboris cupidatat proident.</p>

                </div>
                <div class="form-row mt-3">
                    <div class="form-group w-100">
                        <label for="seo_title">SEO title</label>
                        <input type="text" class="form-control" name="seo_title" id="seo_title"
                            placeholder="Enter title">
                    </div>
                    <div class="form-group w-100">
                        <label for="seo_description">SEO description</label>
                        <textarea class="form-control" name="seo_description" id="seo_description"
                            placeholder="Enter deacription"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <h5 class='mb-1'>social Share</h5>
                <small class='seo-description'>Below is the preview of your social share can if you feel it can look
                    better than this you can edit the <b>title</b> and <b>description</b></small>
                <div class="d-flex border p-2 mt-2 bg-light rounded">
                <img id="social-img" class='rounded border' src="" alt="">
                <div class="pl-3">
                    <p class='seo-description mb-1'><span class='site'>www.doolbay.com</span></p>
                    <h3 class='seo-title '>dodo | Doolbay</h3>
                    <p class='seo-description social_desctiption_text truncate-overflow'>Excepteur sint reprehenderit magna ex do excepteur
                        deserunt ullamco do aliqua laboris cupidatat proident.</p>
                        </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group w-100">
                        <label for="social_title">Social title</label>
                        <input type="text" class="form-control" name='social_title' id="social_title"
                            placeholder="Enter title">
                    </div>
                    <div class="form-group w-100">
                        <label for="social_description">Social description</label>
                        <textarea class="form-control" name="social_description" id="social_description"
                            placeholder="Enter description"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <span id="close-panel" class="btn btn-secondary btn-sm">Close</span>
            <span class="btn btn-primary btn-sm ">Save</span>
        </div>
    </div>
</div>
<script>
$(".sidepanel .form-control").keyup(({target}) => {
    // console.log(target.value);
    $(`.${target.id}_text`).text(target.value)
})
$("#title").change(({target})=>{
    $("#seo_title, #social_title").val(target.value)
    $(".seo_title_text, .social_title_text").text(target.value)
})
$(".summernote-simple").change(({target})=>{
    console.log(target.value);
    // $("#seo_description, #social_description").val(target.value)
    // $(".seo_description_text, .social_description_text").text(target.value)
})
$("#edit-seo").click(() => {
    $(".sidepanel").addClass("panel-open");
})
$("#close-panel").click(() => {
    $(".sidepanel").removeClass("panel-open");
})

// $("#seo_description").change((e)=>{
//     console.log(e.target.value)
//     $("#seo-description-text").val($(this).val())
// })

</script>
