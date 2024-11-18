
<div class="col-md-6">
	<div class="panel">
		<div class="panel-heading">
			Form Tambah Daerah
		</div>
		<div class="panel-body">
			<form action="<?php echo site_url('saveDaerah') ?>" method="post" accept-charset="utf-8">
				<div class="row">
					<div class="form-group col-md-12">
						<label>Daerah</label>
						<input type="text" autofocus required name="daerah" class="form-control">
					</div>
					<div class="form-group col-md-12">
						<input type="submit" name="submit" class="btn btn-danger btn-flat pull-right" value="Simpan">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel">
		<div class="panel-heading">
			List Daerah
		</div>
		<div class="panel-body">
			<table class="table dt-responsive dt nowrap" width="100%">
				<thead>
					<tr>
						<th width="5%"><center>No</center></th>
						<th width="75%">Daerah</th>
						<th width="20%"><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($daerah != null){ ?>
						<?php $no = 1; foreach ($daerah as $d){ ?>
							<tr>
								<td><center><?php echo $no++; ?></center></td>
								<td><?php echo $d->Daerah ?></td>
								<td>
									<center>
										<button type="button" class="btn btn-circle btn-warning" onclick="getEdit('<?= encrypt_url($d->IdDaerah); ?>')"><i class="fa fa-pencil"></i></button>
										<a onclick="return confirm('yakin ingin menghapus data <?= $d->Daerah ?>?');" href="<?= site_url('deleteDaerah/'.encrypt_url($d->IdDaerah)); ?>" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
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
<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit Daerah</span></h4>
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
	$('.table').dataTable();
	function getEdit(req)
	{
		$.ajax({
			url: '<?php echo site_url('daerahEdit/') ?>'+req,
			type: 'POST',
			dataType: 'json',
			success: function(res)
			{
				$('#modal_edit').modal('show');
				$('#edit_body').html(res);
				$('#edit_form').attr('action','<?php echo site_url('saveEditDaerah/') ?>');
			},
			error: function(err)
			{
				$.toast({heading: "Opss !!",text: "Ada yang salah !!",position: "top-right",loaderBg: "#ff6849",icon: "error",hideAfter: 3000,stack: 6});
			}
		});
	}
</script>