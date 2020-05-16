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

!function(t){var r={};function e(a){if(r[a])return r[a].exports;var s=r[a]={i:a,l:!1,exports:{}};return t[a].call(s.exports,s,s.exports,e),s.l=!0,s.exports}e.m=t,e.c=r,e.d=function(t,r,a){e.o(t,r)||Object.defineProperty(t,r,{enumerable:!0,get:a})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,r){if(1&r&&(t=e(t)),8&r)return t;if(4&r&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(e.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&r&&"string"!=typeof t)for(var s in t)e.d(a,s,function(r){return t[r]}.bind(null,s));return a},e.n=function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(r,"a",r),r},e.o=function(t,r){return Object.prototype.hasOwnProperty.call(t,r)},e.p="",e(e.s=0)}([function(t,r){const e={value:0,stars:5,half:!1,emptyStar:"far fa-star",halfStar:"fas fa-star-half-alt",filledStar:"fas fa-star",color:"#fcd703",readonly:!1,click:function(t){console.error("No click callback provided!")}};jQuery.fn.extend({rating:function(t={}){return this.each((function(){$(this).attr("rating")&&$(this).empty(),this.stars=t.value?t.value:e.value,this.readonly=t.readonly?t.readonly:e.readonly,this.getStars=function(){return $(this).find($("i"))},$(this).css({color:t.color?t.color:e.color}).attr("rating",!0),this.readonly||($(this).on("mousemove",(function(r){let a=t.half?t.half:e.half;if(this.getStars().index(r.target)>=0)if(a){$(this).find("i").attr("class",t.emptyStar?t.emptyStar:e.emptyStar);let a=.5;$(this).find("i").css({width:$(this).find("i").outerWidth()}),r.offsetX>$(r.target).outerWidth()/2&&(a=1);let s=this.getStars().index(r.target)+a;for(let r=0;r<this.getStars().length;r++)r+.5<s?$(this.getStars()[r]).attr("class",t.filledStar?t.filledStar:e.filledStar):r<s&&$(this.getStars()[r]).attr("class",t.halfStar?t.halfStar:e.halfStar)}else{$(this).find("i").attr("class",t.emptyStar?t.emptyStar:e.emptyStar);let a=this.getStars().index(r.target)+1;for(let r=0;r<this.getStars().length;r++)r<a&&$(this.getStars()[r]).attr("class",t.filledStar?t.filledStar:e.filledStar)}})),$(this).on("mouseout",(function(t){this.printStars()})),$(this).on("click",(function(r){if(t.half?t.half:e.half){let t=.5;r.offsetX>$(r.target).outerWidth()/2&&(t=1),this.stars=this.getStars().index(r.target)+t}else this.stars=this.getStars().index(r.target)+1;(t.click?t.click:e.click)({stars:this.stars,event:r})})));const r=t.stars?t.stars:e.stars;for(let a=0;a<r;a++){let r=$("<i></i>").addClass(t.emptyStar?t.emptyStar:e.emptyStar).appendTo($(this));if(this.readonly||r.css({cursor:"pointer"}),a>1e3)return}if(this.printStars=function(){if(t.half?t.half:e.half){$(this).find("i").attr("class",t.emptyStar?t.emptyStar:e.emptyStar);for(let r=0;r<this.stars;r++)r<this.stars-.5?$(this.getStars()[r]).attr("class",t.filledStar?t.filledStar:e.filledStar):$(this.getStars()[r]).attr("class",t.halfStar?t.halfStar:e.halfStar)}else{$(this).find("i").attr("class",t.emptyStar?t.emptyStar:e.emptyStar);for(let r=0;r<this.stars;r++)$(this.getStars()[r]).attr("class",t.filledStar?t.filledStar:e.filledStar)}},this.stars>0){this.printStars(),(t.click?t.click:e.click)({stars:this.stars})}}))}}),$((function(){$("[data-rating-stars]").each((function(){let t={},r=/^data-rating\-(.+)$/;$.each($(this).get(0).attributes,(function(e,a){if(r.test(a.nodeName)){let e=a.nodeName.match(r)[1];t[e]=a.nodeValue}})),null!=t.input&&(t.click=function(r){$(t.input).val(r.stars)}),$(this).rating(t)}))}))}]);