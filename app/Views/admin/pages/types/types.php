<div class="card p-3">
  <div class="row">
    <div class="col-sm-12 mt-n3">
      <button data-toggle="modal" data-target="#mymodal" data-id="<?php echo base_url('admin/types/create'); ?>" id="menu" class="btn btn-sm btn-primary mb-n5">
        Add Type
      </button>
      <?php $count = 1;
      $table = new \CodeIgniter\View\Table();
      $table->setHeading(array('No.', 'name', 'location', 'created at', 'status', 'Action'));
      foreach ($types as $type) {
        $table->addRow([
          $count++, $type['name'],$type['location'],
          date("d-m-Y, H:i:s", strtotime($type['created_at'])),
          get_status($type),
          edit_delete('types', $type)
        ]);
      }
      $table->setTemplate(['table_open' => '<table id="example" class="table table-striped table-bordered" style="width:100%">', 'row_start' => '<tr id="row_' . $category['id'] . '">',]);
      echo $table->generate(); ?>
    </div>
  </div>
</div>
