
<div class="col-md-12">
	<div class="panel">
		<div class="panel-heading">
			<?php echo $title ?>
			<?php if ($type != false){ ?>
				<div class="pull-right"><a href="#" onclick="$('#modal_add').modal('show');return false;" style="color: white;"><i class="ti-plus"></i> Tambah Data</a></div>
			<?php } ?>
		</div>
		<div class="panel-body">
			<table id="tmb" class="table dt-responsive dt nowrap">
				<thead >
					<tr>
						<th><center>No</center></th>
						<th width="50%">NAMA PERUSAHAAN</th>
						<th>LOKASI</th>
						<th>LUAS</th>
						<th>LONG</th>
						<th>LAT</th>
						<th>TAHAPAN</th>
						<th>SK</th>
						<th width="20%">NOMOR SK</th>
						<th>MASA BERLAKU</th>
						<th>KOMODITAS</th>
						<th>STATUS</th>
						<th>KETERANGAN</th>
						<th>DAERAH</th>
						<th>FOTO</th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($tambang != null){ ?>
						<?php $no = 1; foreach ($tambang as $row2){ ?>
							<tr>
								<td><?php echo $no++; ?>(#<?= $row2->IdTambang ?>)</td>
								<td><?php echo $row2->Perusahaan; ?></td>
								<td><?php echo $row2->Lokasi; ?></td>
								<td><?php echo $row2->Luas; ?></td>
								<td><?php echo $row2->Long; ?></td>
								<td><?php echo $row2->Lat; ?></td>
								<td><?php echo $row2->Tahapan; ?></td>
								<td><?php echo $row2->SK; ?></td>
								<td><?php echo $row2->NoSK; ?></td>
								<td><?php echo date('d/m/Y',strtotime($row2->TSelesai)) ?></td>
								<td><?php echo $row2->Komoditas; ?></td>
								<td><?php echo $row2->Status; ?></td>
								<td><?php echo $row2->Ket; ?></td>
								<td><?php echo $row2->Daerah; ?></td>
								<td class="text-center">
									<center>
										<a onclick="edit_foto(<?php echo encrypt_url($row2->IdTambang); ?>)" class="btn"><img style=" width: 100px" src="<?php echo base_url() ?>assets/img/tambang/<?php echo $row2->Foto; ?>"></a>
									</center>
								</td>
								<td>
									<center>
										<a onclick="return confirm('yakin ingin menghapus data?');" style="background-color:red ; color: white; border: red;" href="<?php echo site_url('hapusTambang/'.encrypt_url($row2->IdTambang).'/'.encrypt_url($idtype)) ?>" data-original-title="Hapus" class="btn btn-inverse waves-effect"><i class=" ti-trash"></i></a>
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
<?php if ($type != false){ ?>
<!-- sample modal content -->
<div id="modal_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Tambah Data Tambang <?php echo $type ?></span></h4>
			</div>
			<form action="<?php echo site_url('saveTambang') ?>" id="add_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="modal-body" id="add_body">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Nama Perusahaan</label>
							<input type="hidden" name="type" value="<?php echo $idtype ?>">
							<select name="perusahaan" class="form-control sl2" required>
								<option value="">-- Pilih</option>
								<?php foreach ($perusahaan as $p){ ?>
									<option value="<?php echo $p->IdPerusahaan ?>">(#<?php echo $p->IdPerusahaan ?>) <?php echo $p->Perusahaan ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Daerah</label>
							<select name="daerah" class="form-control sl2" required>
								<option value="">-- Pilih</option>
								<?php foreach ($daerah as $d){ ?>
									<option value="<?php echo $d->IdDaerah ?>">(#<?php echo $d->IdDaerah ?>) <?php echo $d->Daerah ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label>Longitude</label>
							<input type="text" name="longi" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Latitude</label>
							<input type="text" name="lat" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Luas</label>
							<input type="number" name="luas" class="form-control" required>
						</div>
						<div class="form-group col-md-12">
							<label>Lokasi</label>
							<textarea name="lokasi" class="form-control" required></textarea>
						</div>
						<div class="form-group col-md-6">
							<label>Tahapan</label>
							<select name="tahapan" class="form-control sl2">
								<option value="">-- Pilih</option>
								<option value="Survey">Survey</option>
								<option value="Eksplorasi">Eksplorasi</option>
								<option value="Produksi">Produksi</option>
								<option value="Eksplorasi & Operasi Produksi">Eksplorasi & Operasi Produksi</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>SK</label>
							<input type="text" name="sk" class="form-control" required>
						</div>
						<div class="form-group col-md-3">
							<label>No SK</label>
							<input type="text" name="nosk" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Tanggal SK Awal</label>
							<input type="date" name="tawal" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Tanggal SK Akhir</label>
							<input type="date" name="takhir" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Komoditas</label>
							<select name="komoditas" class="form-control sl2">
								<option value="">-- Pilih</option>
								<option value="Emas">Emas</option>
								<option value="Pasir Besi">Pasir Besi</option>
								<option value="Batuan">Batuan</option>
								<option value="Lempung">Lempung</option>
								<option value="Batu Gamping">Batu Gamping</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<label>Status</label>
							<input type="text" name="status" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							<label>Keterangan</label>
							<input type="text" name="keterangan" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							<label>Foto</label>
							<input type="file" name="gambar">
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
<?php } ?>

<script>
	
</script>