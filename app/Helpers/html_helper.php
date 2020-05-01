<?php

/**
 * helper for dashboard statistics cards
 * @param statdata
 */
function stat_card($data)
{
  return '<div class="col-md-3 border-right">
  <div class="d-flex w-100 flex-column box2">
    <div class="d-flex justify-content-between">
      <span class="d-flex">
        <ion-icon class="stat-icon mr-3 mb-0" src="' . $data['icon'] . '"></ion-icon>
        <span class="d-flex mt-2">
          <h3 id="online" class="mb-1 mr-2">' . $data['data'] . '</h3>
          <h6>' . $data['name'] . '</h6>
        </span>
      </span>
      <div class="mt-2">
        <small class="">Last 7 days</small>
        <small class="d-flex ml-3">
          <span class="text-success">
            <ion-icon name="arrow-up"></ion-icon>
          </span>
          ' . $data['last_7'] . '
        </small>
      </div>
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

function edit_delete($table_name, $data)
{
  return '<div class="btn-group btn-group-sm">
  <a class="btn btn-outline-primary" href="' . base_url() . '"/admin/products/"' . $data['id'] . '"/update">
    <ion-icon src=""></ion-icon>
  </a>
  <button data-toggle="modal" data-target="#delmodal" name="' . $table_name . '" id="' . $data['id'] . '" class="btn btn-primary delete" data-toggle="modal" data-target="#exampleModal">
    <ion-icon name="trash-bin"></ion-icon>
  </button>
</div>';
}

function get_status($data)
{
  return '<div class="custom-control custom-switch">
  <input type="checkbox" ' . ($data['status'] == 1 ? "checked" : " ") . ' class="custom-control-input" id="custom' . $data['id'] . '">
  <label class="custom-control-label" for="custom' . $data['id'] . '"></label>
  </div>';
}
