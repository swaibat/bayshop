<?php

/**
 * helper for dashboard statistics cards
 * @param statdata
 */
function stat_card($data)
{
  return '<div class="col-md-3">
  <div class="d-flex w-100 flex-column box2 bg-white p-3 rounded">
    <div class="d-flex justify-content-between">
      <span class="d-flex">
        <ion-icon class="stat-icon mr-3 mb-0" src="' . $data['icon'] . '"></ion-icon>
        <span class="d-flex mt-2">
          <h3 id="online" class="mb-1 mr-2">' . $data['data'] . '</h3>
          <h6>' . $data['name'] . '</h6>
        </span>
      </span>
    </div>
    <div class="btn-group mt-2">
      <span>
        <small class="mb-0 ml-1 text-success">
          <ion-icon name="checkmark-circle"></ion-icon>
        </small>
        <small class="mb-0">' . $data['footer1'] . '</small>
      </span>
      <span class="ml-2 border-left">
        <small class="mb-0 ml-1 text-warning">
          <ion-icon name="hourglass"></ion-icon>
        </small>
        <small class="mb-0">' . $data['footer2'] . '</small>
      </span>
    </div>
  </div>
</div>';
}

function edit_delete($table_name, $data, $type)
{
  if ($type['type'] == "modal") {
    return
      '<div class="btn-group btn-group-sm">
    <button data-toggle="modal" data-target="#mymodal" data-modal="" data-id="' . base_url() . '/admin/' . $table_name . '/' . $data['id'] . '/update" id="menu" class="btn btn-outline-primary">
      <ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhZCIgZGF0YS1pY29uPSJlZGl0IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiIGNsYXNzPSJzdmctaW5saW5lLS1mYSBmYS1lZGl0IGZhLXctMTgiIHN0eWxlPSItLWZhLXNlY29uZGFyeS1vcGFjaXR5OjEuMDsgLS1mYS1wcmltYXJ5LW9wYWNpdHk6MC4xOyI+PGcgY2xhc3M9ImZhLWdyb3VwIj48cGF0aCBmaWxsPSJjdXJyZW50Q29sb3IiIGQ9Ik01NjQuNiA2MC4ybC00OC44LTQ4LjhhMzkuMTEgMzkuMTEgMCAwIDAtNTUuMiAwbC0zNS40IDM1LjRhOS43OCA5Ljc4IDAgMCAwIDAgMTMuOGw5MC4yIDkwLjJhOS43OCA5Ljc4IDAgMCAwIDEzLjggMGwzNS40LTM1LjRhMzkuMTEgMzkuMTEgMCAwIDAgMC01NS4yek00MjcuNSAyOTcuNmwtNDAgNDBhMTIuMyAxMi4zIDAgMCAwLTMuNSA4LjV2MTAxLjhINjR2LTMyMGgyMjkuOGExMi4zIDEyLjMgMCAwIDAgOC41LTMuNWw0MC00MGExMiAxMiAwIDAgMC04LjUtMjAuNUg0OGE0OCA0OCAwIDAgMC00OCA0OHYzNTJhNDggNDggMCAwIDAgNDggNDhoMzUyYTQ4IDQ4IDAgMCAwIDQ4LTQ4VjMwNi4xYTEyIDEyIDAgMCAwLTIwLjUtOC41eiIgY2xhc3M9ImZhLXNlY29uZGFyeSI+PC9wYXRoPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik00OTIuOCAxNzMuM2E5Ljc4IDkuNzggMCAwIDEgMCAxMy44TDI3NC40IDQwNS41bC05Mi44IDEwLjNhMTkuNDUgMTkuNDUgMCAwIDEtMjEuNS0yMS41bDEwLjMtOTIuOEwzODguOCA4My4xYTkuNzggOS43OCAwIDAgMSAxMy44IDB6IiBjbGFzcz0iZmEtcHJpbWFyeSI+PC9wYXRoPjwvZz48L3N2Zz4K"></ion-icon>
    </button>
    <button data-toggle="modal" data-target="#delmodal" name="' . $table_name . '" id="' . $data['id'] . '" class="btn btn-primary delete" data-toggle="modal" data-target="#exampleModal">
      <ion-icon src="data:image/svg+xml;base64,PHN2ZyBkYXRhLWljb249InRyYXNoLXJlc3RvcmUiIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNDQ4IDUxMiIgPjxnPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik0zMiA5NmwyMS4yIDM3MWE0OCA0OCAwIDAgMCA0Ny45IDQ1aDI0NS44YTQ4IDQ4IDAgMCAwIDQ3LjktNDVMNDE2IDk2em0yODEuMzcgMTkySDI1NnYxMTJhMTYgMTYgMCAwIDEtMTYgMTZoLTMyYTE2IDE2IDAgMCAxLTE2LTE2VjI4OGgtNTcuMzdjLTE0LjI2IDAtMjEuNC0xOC4xOC0xMS4zMi0yOC44bDg5LjM4LTk0LjI2YTE1LjQxIDE1LjQxIDAgMCAxIDIxLjc4LS44NHEuNDMuNDEuODQuODRsODkuMzggOTQuMjZjMTAuMDggMTAuNjIgMi45NCAyOC44LTExLjMyIDI4Ljh6IiBjbGFzcz0ic2Vjb25kYXJ5Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTQzMiAzMkgzMTJsLTkuNC0xOC43QTI0IDI0IDAgMCAwIDI4MS4xIDBIMTY2LjhhMjMuNzIgMjMuNzIgMCAwIDAtMjEuNCAxMy4zTDEzNiAzMkgxNkExNiAxNiAwIDAgMCAwIDQ4djMyYTE2IDE2IDAgMCAwIDE2IDE2aDQxNmExNiAxNiAwIDAgMCAxNi0xNlY0OGExNiAxNiAwIDAgMC0xNi0xNnpNMjM1LjMxIDE2NC45NHEtLjQxLS40NC0uODQtLjg0YTE1LjQxIDE1LjQxIDAgMCAwLTIxLjc4Ljg0bC04OS4zOCA5NC4yNmMtMTAuMDggMTAuNjItMi45NCAyOC44IDExLjMyIDI4LjhIMTkydjExMmExNiAxNiAwIDAgMCAxNiAxNmgzMmExNiAxNiAwIDAgMCAxNi0xNlYyODhoNTcuMzdjMTQuMjYgMCAyMS40LTE4LjE4IDExLjMyLTI4Ljh6IiBjbGFzcz0icHJpbWFyeSI+PC9wYXRoPjwvZz48L3N2Zz4K"></ion-icon>
    </button>
  </div>
  ';
  } else {
    return
      '<div class="btn-group btn-group-sm">
    <a class="btn btn-outline-primary" href="' . base_url() . '/admin/' . $table_name . '/' . $data['id'] . '/update">
      <ion-icon src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhZCIgZGF0YS1pY29uPSJlZGl0IiByb2xlPSJpbWciIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU3NiA1MTIiIGNsYXNzPSJzdmctaW5saW5lLS1mYSBmYS1lZGl0IGZhLXctMTgiIHN0eWxlPSItLWZhLXNlY29uZGFyeS1vcGFjaXR5OjEuMDsgLS1mYS1wcmltYXJ5LW9wYWNpdHk6MC4xOyI+PGcgY2xhc3M9ImZhLWdyb3VwIj48cGF0aCBmaWxsPSJjdXJyZW50Q29sb3IiIGQ9Ik01NjQuNiA2MC4ybC00OC44LTQ4LjhhMzkuMTEgMzkuMTEgMCAwIDAtNTUuMiAwbC0zNS40IDM1LjRhOS43OCA5Ljc4IDAgMCAwIDAgMTMuOGw5MC4yIDkwLjJhOS43OCA5Ljc4IDAgMCAwIDEzLjggMGwzNS40LTM1LjRhMzkuMTEgMzkuMTEgMCAwIDAgMC01NS4yek00MjcuNSAyOTcuNmwtNDAgNDBhMTIuMyAxMi4zIDAgMCAwLTMuNSA4LjV2MTAxLjhINjR2LTMyMGgyMjkuOGExMi4zIDEyLjMgMCAwIDAgOC41LTMuNWw0MC00MGExMiAxMiAwIDAgMC04LjUtMjAuNUg0OGE0OCA0OCAwIDAgMC00OCA0OHYzNTJhNDggNDggMCAwIDAgNDggNDhoMzUyYTQ4IDQ4IDAgMCAwIDQ4LTQ4VjMwNi4xYTEyIDEyIDAgMCAwLTIwLjUtOC41eiIgY2xhc3M9ImZhLXNlY29uZGFyeSI+PC9wYXRoPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik00OTIuOCAxNzMuM2E5Ljc4IDkuNzggMCAwIDEgMCAxMy44TDI3NC40IDQwNS41bC05Mi44IDEwLjNhMTkuNDUgMTkuNDUgMCAwIDEtMjEuNS0yMS41bDEwLjMtOTIuOEwzODguOCA4My4xYTkuNzggOS43OCAwIDAgMSAxMy44IDB6IiBjbGFzcz0iZmEtcHJpbWFyeSI+PC9wYXRoPjwvZz48L3N2Zz4K"></ion-icon>
    </a>
    <button data-toggle="modal" data-target="#delmodal" name="' . $table_name . '" id="' . $data['id'] . '" class="btn btn-primary delete" data-toggle="modal" data-target="#exampleModal">
      <ion-icon src="data:image/svg+xml;base64,PHN2ZyBkYXRhLWljb249InRyYXNoLXJlc3RvcmUiIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNDQ4IDUxMiIgPjxnPjxwYXRoIGZpbGw9IiNhNWE3YTkiIGQ9Ik0zMiA5NmwyMS4yIDM3MWE0OCA0OCAwIDAgMCA0Ny45IDQ1aDI0NS44YTQ4IDQ4IDAgMCAwIDQ3LjktNDVMNDE2IDk2em0yODEuMzcgMTkySDI1NnYxMTJhMTYgMTYgMCAwIDEtMTYgMTZoLTMyYTE2IDE2IDAgMCAxLTE2LTE2VjI4OGgtNTcuMzdjLTE0LjI2IDAtMjEuNC0xOC4xOC0xMS4zMi0yOC44bDg5LjM4LTk0LjI2YTE1LjQxIDE1LjQxIDAgMCAxIDIxLjc4LS44NHEuNDMuNDEuODQuODRsODkuMzggOTQuMjZjMTAuMDggMTAuNjIgMi45NCAyOC44LTExLjMyIDI4Ljh6IiBjbGFzcz0ic2Vjb25kYXJ5Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmZmZmZiIgZD0iTTQzMiAzMkgzMTJsLTkuNC0xOC43QTI0IDI0IDAgMCAwIDI4MS4xIDBIMTY2LjhhMjMuNzIgMjMuNzIgMCAwIDAtMjEuNCAxMy4zTDEzNiAzMkgxNkExNiAxNiAwIDAgMCAwIDQ4djMyYTE2IDE2IDAgMCAwIDE2IDE2aDQxNmExNiAxNiAwIDAgMCAxNi0xNlY0OGExNiAxNiAwIDAgMC0xNi0xNnpNMjM1LjMxIDE2NC45NHEtLjQxLS40NC0uODQtLjg0YTE1LjQxIDE1LjQxIDAgMCAwLTIxLjc4Ljg0bC04OS4zOCA5NC4yNmMtMTAuMDggMTAuNjItMi45NCAyOC44IDExLjMyIDI4LjhIMTkydjExMmExNiAxNiAwIDAgMCAxNiAxNmgzMmExNiAxNiAwIDAgMCAxNi0xNlYyODhoNTcuMzdjMTQuMjYgMCAyMS40LTE4LjE4IDExLjMyLTI4Ljh6IiBjbGFzcz0icHJpbWFyeSI+PC9wYXRoPjwvZz48L3N2Zz4K"></ion-icon>
    </button>
  </div>
  ';
  }
}

function get_status($data)
{
  return '<div class="custom-control custom-switch">
  <input type="checkbox" ' . ($data['status'] == 1 ? "checked" : " ") . ' class="custom-control-input" id="custom' . $data['id'] . '">
  <label class="custom-control-label" for="custom' . $data['id'] . '"></label>
  </div>';
}

function model_loader()
{
  return '<div class="modal loader" id="modal-loader" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel">
 <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
     <form id="form">
       <div class="modal-header border-0">
         <h6 class="modal-title position-absolute header-load bg-primary " id="mymodalLabel"><span class="loader-text"> .</span></h6>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="form-row modal-body p-4">
         <div class="col-md-12">
           <div class="form-group mt-3 px-2">
             <div class="load-form-control"></div>
           </div>
         </div>
         <div class="col-md-12">
           <div class="form-group mt-3 px-2">
             <div class="load-form-control"></div>
           </div>
         </div>
         <div class="col-md-12 px-3 mb-3">
           <div class="load-form-control mt-3 upload"></div>
         </div>
         <div class="col-md-12">
           <div class="input-group mb-3 mt-2 px-3 d-flex align-items-center">
             <div class="load-form-control status-text"></div>
             <div class="load-form-control ml-3 status"></div>
           </div>
         </div>
       </div>
       <div class="modal-footer">
         <div class="load-form-control btn"></div>
         <div class="load-form-control btn"></div>
       </div>
     </form>
   </div>
 </div>
</div>';
}

function custom_chekbox($data)
{
  return '<div class="col-md-12">
  <div class="input-group mb-3 mt-2 px-3 d-flex align-items-center">
    <span class="mt-2">' . $data['label'] . ' :</span>
    <span class="button b2 mt-0 ml-3 mt-2" id="button-10"><input id="' . $data['id'] . '" value="1" type="checkbox" checked name="' . $data['name'] . '" class="checkbox">
      <div class="knobs"><span>NO</span></div>
      <div class="layer"></div>
    </span>
  </div>
</div>';
}

function image_uploader($data)
{
  return '';
}

function get_pairs($data)
{
  foreach ($data as $mem) {
    $dat[$mem['id']] = $mem['name'];
  }
  return $dat;
}

function custom_navigation($page,$data){
    $html ='<ul class="sidebar-menu">';
      foreach($data as $key => $value){
        if ($value['children']) {
        $html .='<li class="nav-item dropdown"> <a href="#" class="nav-link has-dropdown">
        <ion-icon class="ion" name="'.$value['icon'].'"></ion-icon>
        <span>'.$key.'</span></a>
      <ul class="dropdown-menu">';
      foreach($value['children'] as $key => $value){
        $html .= '<li><a class="nav-link" href="'.$value.'">'.$value.'</a></li>';
      }
      $html .= '</ul></li>';
    } else {
      $html .='<li class="nav-item ">
      <a href="'.base_url('/'.$page['nav'].'/'.$key).'" class="nav-link">
      <ion-icon class="ion" name="'.$value['icon'].'"></ion-icon>
      <span>'.$key.'</span></a>
    </li>';
    }
    }
    $html .= '</ul>';
    return $html;
}
