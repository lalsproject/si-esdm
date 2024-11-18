<div class="col-md-12">
	
	<div class="panel">
		<div class="panel-heading"> Warning Panel
            <div class="pull-right"><a href="#" onclick="$('#modal_add').modal('show');return false;" style="color: white;"><i class="ti-plus"></i> Tambah Data</a></div>
        </div>
		<div class="panel-body" style="width: 100%;">
			<table class="table dt-responsive dt nowrap" style="width: 100%;">
				<thead>
					<tr>
						<th width="5%"><center>No</center></th>
						<th width="40%">NAMA PERUSAHAAN</th>
						<th width="40%">ALAMAT</th>
						<th width="15%"><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($perusahaan != null){ ?>
						<?php $no=1; foreach ($perusahaan as $p){ ?>
							<tr>
								<td><center><?php echo $no++; ?></center></td>
								<td>(#<?php echo $p->IdPerusahaan ?>) <?php echo $p->Perusahaan ?></td>
								<td><?php echo $p->AlamatPerusahaan ?></td>
								<td>
									<center>
										<button type="button" class="btn btn-circle btn-warning" onclick="getEdit('<?= encrypt_url($p->IdPerusahaan); ?>')"><i class="fa fa-pencil"></i></button>
										<a onclick="return confirm('yakin ingin menghapus data <?= $p->Perusahaan ?>?');" href="<?= site_url('deletePerusahaan/'.encrypt_url($p->IdPerusahaan)); ?>" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
									</center>
								</td>
							</tr>
						<?php } ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>
<!-- sample modal content -->
<div id="modal_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah Perusahaan</span></h4>
            </div>
			<form action="<?php echo site_url('savePerusahaan') ?>" id="add_form" method="post" accept-charset="utf-8">
				<div class="modal-body" id="add_body">
					<div class="row">
						<div class="form-group col-md-12">
							<label>Nama Perusahaan</label>
							<input type="text" name="perusahaan" class="form-control" required>
						</div>
						<div class="form-group col-md-12">
							<label>Alamat</label>
							<textarea name="alamat" class="form-control" required></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
					<input type="submit" name="submit" class="btn btn-danger btn-flat pull-right" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- sample modal content -->
<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit Perusahaan</span></h4>
            </div>
			<form action="" id="edit_form" method="post" accept-charset="utf-8">
				<div class="modal-body" id="edit_body">
				   
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" onclick="$('#edit_form').removeAttr('action');" data-dismiss="modal">Close</button>
					<input type="submit" name="submit" class="btn btn-danger btn-flat pull-right" value="Simpan">
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	function getEdit(req)
	{
		$.ajax({
			url: '<?php echo site_url('perusahaanEdit/') ?>'+req,
			type: 'POST',
			dataType: 'json',
			success: function(res)
			{
				$('#modal_edit').modal('show');
				$('#edit_body').html(res);
				$('#edit_form').attr('action','<?php echo site_url('saveEditPerusahaan/') ?>');
			},
			error: function(err)
			{
				$.toast({heading: "Opss !!",text: "Ada yang salah !!",position: "top-right",loaderBg: "#ff6849",icon: "error",hideAfter: 3000,stack: 6});
			}
		});
	}
</script>