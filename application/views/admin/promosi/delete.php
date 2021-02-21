

<!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"> -->
<button type="button" class="btn btn-danger btn-xs " data-toggle="modal" data-target="#delete-<?php echo $promosi->id_promosi ?>">
	<i class="fa fa-times"></i>
</button>
 <div class="modal fade" id="delete-<?php echo $promosi->id_promosi ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data Promosi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h4>Peringatan!</h4>
						Yakin Ingin menghapus data ini ? data yang dihapus tidak dapat dikembalikan.
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Keluar</button>
					<a href="<?php echo base_url('admin/promosi/delete/'.$promosi->id_promosi) ?>" class="btn btn-danger"><i class="fa fa-ban"></i> Ya, hapus data ini</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->        