<div class="col-md-12">
	<div class="panel">
		<div class="panel-heading">
			List Laporan
		</div>
		<div class="panel-body">
			<table class="table table-hover dt dt-responsive">
				<thead>
					<tr>
						<th width="5%"><center>No</center></th>
						<th>Nama</th>
						<th>Daerah</th>
						<th>Kecamatan</th>
						<th>Kelurahan</th>
						<th>Lokasi</th>
						<th width="5%"><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($peti != null){ ?>
						<?php $no = 1; foreach ($peti as $p){ ?>
							<tr>
								<td><center><?= $no++; ?></center></td>
								<td><?= $p->Nama ?></td>
								<td><?= $p->Daerah ?></td>
								<td><?= $p->Kecamatan ?></td>
								<td><?= $p->Kelurahan ?></td>
								<td><?= $p->Lokasi ?></td>
								<td>
									<center>
										<button type="button" class="btn btn-circle btn-success" onclick="view_detail(<?= $p->IdLaporan ?>)"><i class="fa fa-eye"></i></button>
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
<div id="modal_view" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="$('#view_body').html('')">×</button>
                <h4 class="modal-title">View Detail Laporan</span></h4>
            </div>
			<div class="modal-body" id="view_body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-flat" data-dismiss="modal" onclick="$('#view_body').html('')">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	function view_detail(req)
	{
		$.ajax({
			url: '<?php echo site_url('getDetailLaporan/') ?>'+req,
			type: 'POST',
			dataType: 'json',
			success: function(res)
			{
				// console.table(res);
				$('#modal_view').modal('show');
				$('#view_body').html(res['Detail']);
			},
			error: function(err)
			{
				$.toast({heading: "Opss !!",text: "Ada yang salah !!",position: "top-right",loaderBg: "#ff6849",icon: "error",hideAfter: 3000,stack: 6});
			}
		});
	}
</script>