$(document).ready(() => {
  $("#reload").click(() => {
    location.reload();
  });
  $("#back").click(() => {
    history.back();
  });
  $("#foward").click(() => {
    history.forward();
  });
  $(".delete").click((e) => {
    e.preventDefault();
    $("#del-confirm").click(() => {
      $.ajax({
        url: `/admin/delete/${e.target.name}/${e.target.id}`,
        type: "post",
      }).done(() => {
        $("#delmodal").modal("toggle");
        $(`#row_${e.target.id}`).css("background", "#f2c994").fadeOut(1500);
        setTimeout(() => {
          window.location.reload();
        }, 1500);
      });
    });
  });

  $(document).on("click", "#menu", function (e) {
    e.preventDefault();
    $(".modal-dialog").addClass($(this).data("modal"));
    var url = $(this).data("id"); // it will get action url
    $("#dynamic-content").html(""); // leave it blank before ajax call
    $("#modal-loader").show(); // load ajax loader
    $.ajax({
      url: url,
      type: "POST",
      dataType: "html",
    })
      .done(function (data) {
        $("#dynamic-content").html("");
        $("#dynamic-content").html(data); // load response
        $("#modal-loader").hide(); // hide ajax loader
      })
      .fail(function () {
        $("#modal-loader").hide();
      });
  });

  $("#example").DataTable({
    dom:
      "<'top'f>" +
      "<'bottom't>" +
      "<'row'<'col-sm-3'i><'col-sm-3'l><'col-sm-6'p>>",
  });

  $("#content").summernote({
    height: 200, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: false, // set focus to editable area after initializing summernote
  });
  $("#description").summernote({
    height: 200, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: false, // set focus to editable area after initializing summernote
  });
  $(".js-select2").select2();
});

/**
 * multifile
 * image upload Heleper
 */
$(function() {
  $(".MultiFile-list").sortable({
    placeholder: "upload-btn"
  });
  $(".MultiFile-list").disableSelection();
  $('#photo-upload').change(() => {
    $('#olden').removeClass('d-flex').addClass('d-none');
    $('#img-holder').removeClass('d-flex justify-content-center align-items-center');
    $('.upload-btn').addClass('mt-1').removeClass('d-none');
    $(".MultiFile-preview").removeAttr("style")
    $('.MultiFile-list').find(">").addClass("first");
  })
});
