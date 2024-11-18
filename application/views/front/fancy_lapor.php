<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
	<title></title>

	<!-- ===== Bootstrap CSS ===== -->
	<link href="<?= base_url('assets/front/mods/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- ===== Plugin CSS ===== -->
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/toast-master/css/jquery.toast.css" rel="stylesheet">
    
	<!-- ===== Animation CSS ===== -->
	<link href="<?= base_url('assets/front/mods/') ?>css/animate.css" rel="stylesheet">
	<!-- ===== Custom CSS ===== -->
	<link href="<?= base_url('assets/front/mods/') ?>css/style.css" rel="stylesheet">
	<!-- ===== Color CSS ===== -->
	<link href="<?= base_url('assets/front/mods/') ?>css/colors/red.css" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
		<!-- jQuery -->
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?= base_url('assets/front/mods/') ?>bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- Sidebar menu plugin JavaScript -->
	<script src="<?= base_url('assets/front/mods/') ?>js/sidebarmenu.js"></script>
	<!--Slimscroll JavaScript For custom scroll-->
	<script src="<?= base_url('assets/front/mods/') ?>js/jquery.slimscroll.js"></script>
	<!--Wave Effects -->
	<script src="<?= base_url('assets/front/mods/') ?>js/waves.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/toast-master/js/jquery.toast.js"></script>
    <script src="<?= base_url('assets/front/mods/') ?>js/toastr.js"></script>


    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/switchery/dist/switchery.min.js"></script>
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <style type="text/css" media="screen">
		li.active,
		{
			background: #0000001f;
			color: black;
		}

		.sidebar-nav ul#side-menu li a.active{
			background: #e0e0e0;
			color: black;
		}
		.panel-heading,
		.modal-header
		{
			background: linear-gradient(to right,#d93c17 1%,#ff704f 100%);
			color: white;
			padding: 10px 25px;
		}
		.panel .panel-heading
		{
			padding: 10px 25px !important;
		}
		.panel .panel-footer
		{
			padding: 10px 25px !important;
		}
		.panel .panel-body
		{
			padding: 15px 25px !important;
		}
		.form-group .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9
		{
			margin-bottom: 10px;
		}
		.form-control
		{
			border: 1px solid #e5ebec !important;
		}
		.form-control:focus {     
		    border: 1px solid red !important;
		}
		.btn-flat
		{
			border-radius: 0px;
		}
		.table>tbody>tr>td,
		.table>tbody>tr>th
		{
		    font-size: 14px;
		}
		.modal-title
		{
			color: white;
		}
		
		.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
		    color: #fff;
		    background-color: #e74a25;
		    border-color: #e74a25;
		}
		.footer
		{
			background: white;
		}
		textarea{
			resize: none;
		}
	</style>
</head>
<body>
	<div class="preloader" style="display: none;">
		<div class="cssload-speeding-wheel"></div>
	</div>
	<div class="col-md-12" style="">
		<form action="<?php echo site_url('send_lapor') ?>" method="POST" accept-charset="utf-8">
			<div class="row">
				<div class="col-md-12">
					<center>
						<h3>Lapor Tambang Ilegal</h3>
						<p style="font-size: 12px;color: red;">* Masukan Email Aktif Untuk Memverifikasi Laporan Anda</p>
						<hr>
					</center>
				</div>
				<div class="form-group col-md-6">
					<label>Nama Lengkap</label>
					<input type="text" required name="nama" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label>Email</label>
					<input type="email" required name="email" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label>Kota / Kabupaten</label>
					<select name="daerah" class="form-control sl2" required>
						<option value="">-- Pilih</option>
						<?php foreach ($daerah as $d){ ?>
							<option value="<?php echo $d->IdDaerah ?>">(#<?php echo $d->IdDaerah ?>) <?php echo $d->Daerah ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Kecamatan</label>
					<input type="text" required name="kecamatan" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label>Kelurahan / Desa</label>
					<input type="text" required name="kelurahan" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label>Lokasi</label>
					<input type="text" required name="lokasi" class="form-control">
				</div>
				<div class="form-group col-md-12">
					<label>Detail Laporan</label>
					<textarea name="detail" id="editor1" required class="form-control"></textarea>
				</div>
				<div class="form-group col-md-12">
					<input type="submit" class="btn btn-primary btn-flat pull-right" name="submit" value="Lapor" onclick="$('.preloader').show()">
				</div>
			</div>
		</form>
	</div>
	<script>
		$('.sl2').select2();
	</script>
	<script src="<?= base_url('assets/ckeditor/') ?>ckeditor.js?date=<?= encrypt_url(date('dmY')); ?>"></script>
	<script type="text/javascript">
	    CKEDITOR.replace('editor1',{
	    	removePlugins: 'sourcearea,image,quran',
	    });
	</script>
</body>
</html>