<?php if ($blog != null){ ?>
	<div class="row">
		<div class="form-group col-md-6">
			<label>Judul</label>
			<input type="hidden" name="idblog" value="<?php echo $blog->IdBlog ?>">
			<input type="text" name="judul" class="form-control" required id="judul" value="<?= $blog->Judul ?>" onchange="sluged($(this).val())">
			<input type="hidden" name="slug" id="slug_judul_edit" value="<?= $blog->Slug ?>">
		</div>
		<div class="form-group col-md-6">
			<label>Kategori</label>
			<select name="kategori" class="form-control sl2edit" required>
				<option value="<?= $blog->IdKat ?>"><?= $blog->Kategori ?></option>
				<?php foreach ($kategori as $k){ ?>
					<?php if ($k->IdKat != $blog->IdKat): ?>
						<option value="<?= $k->IdKat ?>"><?= $k->Kategori ?></option>
					<?php endif ?>
				<?php } ?>
			</select>
		</div>
		<div class="col-md-12">
			<label>Isi</label>
			<textarea name="isi" id="isiEdit" required class="form-control">
				<?php echo $blog->Isi ?>
			</textarea>
		</div>
	</div>
	<script>
		$('.sl2edit').select2();
	</script>
	<script type="text/javascript">
		CKEDITOR.replace('isiEdit',{
			removePlugins: 'sourcearea,image,quran',
		});
		function sluged(str){
			var $slug = '';
			var trimmed = $.trim(str);
			$slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
			replace(/-+/g, '-').
			replace(/^-|-$/g, '');
			console.log($slug.toLowerCase());
			$('#slug_judul_edit').val($slug.toLowerCase());
		}
</script>
<?php }else{ ?>
	<script>
		window.location = '';
	</script>
<?php } ?>