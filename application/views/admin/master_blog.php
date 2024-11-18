
<div class="col-md-6">
	<div class="panel">
		<div class="panel-heading">
			Buat Blog Baru
		</div>
		<form action="<?= site_url('saveBlog') ?>" method="POST" accept-charset="utf-8">
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-6">
						<label>Judul</label>
						<input type="text" name="judul" class="form-control" required id="judul" onchange="sluged($(this).val())">
						<input type="hidden" name="slug" id="slug_judul">
					</div>
					<div class="form-group col-md-6">
						<label>Kategori</label>
						<select name="kategori" class="form-control sl2" required>
							<option value="">--Pilih</option>
							<?php foreach ($kategori as $k){ ?>
								<option value="<?= $k->IdKat ?>"><?= $k->Kategori ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-12">
						<label>Isi</label>
						<textarea name="isi" id="editor1" required class="form-control"></textarea>
					</div>
					<div class="form-group col-md-12">
						<input type="submit" class="btn btn-flat btn-danger btn-block" name="submit" value="Simpan">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="col-md-6">
	<div class="panel">
		<div class="panel-heading">
			List Blog
		</div>
		<div class="panel-body">
			<table class="table table-hover dt-responsive dt">
				<thead>
					<tr>
						<th width="5%"><center>#</center></th>
						<th width="20%">Tanggal</th>
						<th width="10%"><center>Kategori</center></th>
						<th>Judul</th>
						<th width="15%"><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($blog != null){ ?>
						<?php $no = 1; foreach ($blog as $b){ ?>
							<tr>
								<td><center><?php echo $no++; ?></center></td>
								<td><center><?php echo date('d/m/Y H:i:s',strtotime($b->RegDate)) ?></center></td>
								<td><center><?php echo $b->Kategori ?></center></td>
								<td><?php echo wordwrap($b->Judul) ?></td>
								<td>
									<center>
										<button type="button" class="btn btn-circle btn-warning" onclick="getEdit('<?= encrypt_url($b->IdBlog); ?>')"><i class="fa fa-pencil"></i></button>
										<a onclick="return confirm('yakin ingin menghapus data <?= $b->Judul ?>?');" href="<?= site_url('delBlog/'.encrypt_url($b->IdBlog)); ?>" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
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
<div id="modal_edit" class="modal fade" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit Blog</span></h4>
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
<script src="<?= base_url('assets/ckeditor/') ?>ckeditor.js?date=<?= encrypt_url(date('dmY')); ?>"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor1',{
    	removePlugins: 'image,quran',
    });
</script>
<script type="text/javascript">
	function getEdit(req)
	{
		$.ajax({
			url: '<?php echo site_url('blogEdit/') ?>'+req,
			type: 'POST',
			dataType: 'html',
			success: function(res)
			{
				$('#modal_edit').modal('show');
				$('#edit_body').html(res);
				$('#edit_form').attr('action','<?php echo site_url('saveEditBlog/') ?>');
			},
			error: function(err)
			{
				$.toast({heading: "Opss !!",text: "Ada yang salah !!",position: "top-right",loaderBg: "#ff6849",icon: "error",hideAfter: 3000,stack: 6});
			}
		});
	}

	function sluged(str){
	    var $slug = '';
	    var trimmed = $.trim(str);
	    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
	    replace(/-+/g, '-').
	    replace(/^-|-$/g, '');
	    console.log($slug.toLowerCase());
	    $('#slug_judul').val($slug.toLowerCase());
	}
</script>