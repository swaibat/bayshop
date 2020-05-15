// create method
function postForm() {
  $(".js-select2").select2({
    minimumResultsForSearch: -1,
  });
  $("#form").submit(function (event) {
    event.preventDefault();
    $(".helper-text-danger").remove();
    var data = new FormData($("#form")[0]);
    $.ajax({
      type: "POST",
      enctype: "multipart/form-data",
      url: $(this).attr("action"),
      data: data,
      processData: false,
      contentType: false,
    }).done(function (res) {
        res.errors
          ? Object.entries(res.errors).map((error) => {
              $(`#${error[0]}`).after(
                `<small class="helper-text-danger">${error[1]}</small>`
              );
            })
          : Toastify({
              text: res.message,
              backgroundColor: "#228B22",
            }).showToast();
      }).fail(function (err) {
        Toastify({
          text: "Error operation failed",
          backgroundColor: "#FFA500",
        }).showToast();
      });
  });
}

$(document).ready(() => {
  $(".js-select2").select2();
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
});

/**
 * multifile
 * image upload Heleper
 */
$(function () {
  $(".MultiFile-list").sortable({
    placeholder: "upload-btn",
  });
  $(".MultiFile-list").disableSelection();
  $("#photo-upload").change(() => {
    $("#olden").removeClass("d-flex").addClass("d-none");
    $("#img-holder").removeClass(
      "d-flex justify-content-center align-items-center"
    );
    $(".upload-btn").addClass("mt-1").removeClass("d-none");
    $(".MultiFile-preview").removeAttr("style");
    $(".MultiFile-list").find(">").addClass("first");
  });
});

$('.show').zoomImage();

$('.show-small-img:first-of-type').css({'border': 'solid 1px #951b25', 'padding': '2px'})
$('.show-small-img:first-of-type').attr('alt', 'now').siblings().removeAttr('alt')
$('.show-small-img').click(function () {
  $('#show-img').attr('src', $(this).attr('src'))
  $('#big-img').attr('src', $(this).attr('src'))
  $(this).attr('alt', 'now').siblings().removeAttr('alt')
  $(this).css({'border': 'solid 1px #951b25', 'padding': '2px'}).siblings().css({'border': 'none', 'padding': '0'})
  if ($('#small-img-roll').children().length > 4) {
    if ($(this).index() >= 3 && $(this).index() < $('#small-img-roll').children().length - 1){
      $('#small-img-roll').css('left', -($(this).index() - 2) * 76 + 'px')
    } else if ($(this).index() == $('#small-img-roll').children().length - 1) {
      $('#small-img-roll').css('left', -($('#small-img-roll').children().length - 4) * 76 + 'px')
    } else {
      $('#small-img-roll').css('left', '0')
    }
  }
})

//Enable the next button

$('#next-img').click(function (){
  $('#show-img').attr('src', $(".show-small-img[alt='now']").next().attr('src'))
  $('#big-img').attr('src', $(".show-small-img[alt='now']").next().attr('src'))
  $(".show-small-img[alt='now']").next().css({'border': 'solid 1px #951b25', 'padding': '2px'}).siblings().css({'border': 'none', 'padding': '0'})
  $(".show-small-img[alt='now']").next().attr('alt', 'now').siblings().removeAttr('alt')
  if ($('#small-img-roll').children().length > 4) {
    if ($(".show-small-img[alt='now']").index() >= 3 && $(".show-small-img[alt='now']").index() < $('#small-img-roll').children().length - 1){
      $('#small-img-roll').css('left', -($(".show-small-img[alt='now']").index() - 2) * 76 + 'px')
    } else if ($(".show-small-img[alt='now']").index() == $('#small-img-roll').children().length - 1) {
      $('#small-img-roll').css('left', -($('#small-img-roll').children().length - 4) * 76 + 'px')
    } else {
      $('#small-img-roll').css('left', '0')
    }
  }
})

//Enable the previous button

$('#prev-img').click(function (){
  $('#show-img').attr('src', $(".show-small-img[alt='now']").prev().attr('src'))
  $('#big-img').attr('src', $(".show-small-img[alt='now']").prev().attr('src'))
  $(".show-small-img[alt='now']").prev().css({'border': 'solid 1px #951b25', 'padding': '2px'}).siblings().css({'border': 'none', 'padding': '0'})
  $(".show-small-img[alt='now']").prev().attr('alt', 'now').siblings().removeAttr('alt')
  if ($('#small-img-roll').children().length > 4) {
    if ($(".show-small-img[alt='now']").index() >= 3 && $(".show-small-img[alt='now']").index() < $('#small-img-roll').children().length - 1){
      $('#small-img-roll').css('left', -($(".show-small-img[alt='now']").index() - 2) * 76 + 'px')
    } else if ($(".show-small-img[alt='now']").index() == $('#small-img-roll').children().length - 1) {
      $('#small-img-roll').css('left', -($('#small-img-roll').children().length - 4) * 76 + 'px')
    } else {
      $('#small-img-roll').css('left', '0')
    }
  }
})

