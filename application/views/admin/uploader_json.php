<div class="row">
	<div class="form-group col-md-6">
		<label>File GeoJson</label>
		<input type="file" id="file-selector" required>
		<textarea name="json" id="json" style="display: none;"></textarea>
	</div>
	<div class="form-group col-md-6">
		<label>Tipe Tambang</label>
		 <select name="tambang" id="tambang" required class="form-control">
			<option value="">--Pilih</option>
			<option value="1">Kontrak Karya</option>
			<option value="2">IUP Logam</option>
			<option value="3">Non Logam</option>
		</select>
	</div>
	<div class="col-md-12">
		<button type="button" class="btn btn-danger" onclick="ajax_upload()"> Upload</button>
	</div>
	<div class="col-md-12" id="notif">
		
	</div>
</div>

<script>
document.getElementById("file-selector")
	.addEventListener("change", function () {
	var fr = new FileReader();
	fr.readAsText(this.files[0]);
	fr.onload = function () {
		console.table(fr.result);
		$('#json').html(fr.result);
	};  
});
</script>
<script>
	function ajax_upload()
	{
		$.ajax({
		  url: '<?= site_url('Admin/uploader_gis') ?>',
		  type: 'POST',
		  dataType: 'json',
		  data: {
		  	data: $('#json').val(),
		  	tipe: $('#tambang').val()
		  },
		  success: function(data)
		  {
		  	$('#notif').html(data);
		  	window.location = '';
		  },
		  error: function(xhr, textStatus, errorThrown) {
		  	console.log(errorThrown)
		  }
		});
	}
	
</script>