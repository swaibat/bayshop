<div class="card p-3">
  <div class="row">
    <div class="col-sm-12 mt-n3">
      <button data-toggle="modal" data-target="#mymodal" data-id="<?php echo base_url('admin/types/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
        Add Type
      </button>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>s/n</th>
            <th>name</th>
            <th>location</th>
            <th>created at</th>
            <th>status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1;
          foreach ($types as $type) { ?>
            <tr id="row_<?= $type['id'] ?>">
              <td><?= $count++ ?></td>
              <td><?= $type['name']; ?></td>
              <td><?= $type['location']; ?></td>
              <td><?= date("d-m-Y, H:i:s", strtotime($type['created_at'])); ?></td>
              <td class="text-center">
                <div class="custom-control custom-switch">
                  <input type="checkbox" <?= $type['status'] == '1' ? 'checked' : '' ?> class="custom-control-input" id="custom<?= $type['id'] ?>">
                  <label class="custom-control-label" for="custom<?= $type['id']; ?>"></label>
                </div>
              </td>
              <td class="text-center">
                <div class="btn-group btn-group-sm">
                  <button data-toggle="modal" data-target="#mymodal" data-modal='' data-id="<?= base_url('admin/types/' . $type['id'] . '/update') ?>" id="menu" class="btn btn-outline-primary">
                    <ion-icon src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath d='M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z'/%3E%3C/svg%3E"></ion-icon>
                  </button>
                  <button data-toggle="modal" data-target="#delmodal" name='types' id='<?= $type['id']; ?>' class='btn btn-primary delete' data-toggle="modal" data-target="#exampleModal">
                    <ion-icon name="trash-bin"></ion-icon>
                  </button>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>