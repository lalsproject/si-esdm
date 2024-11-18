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

    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.colVis.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/responsive.bootstrap4.min.js"></script>

	
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.html5.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.flash.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/buttons.print.min.js"></script>

	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.keyTable.min.js"></script>
	<script src="<?= base_url('assets/front/mods/') ?>../plugins/components/datatables/dataTables.select.min.js"></script>

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
		<div class="row">
			<div class="col-md-12">
				<center>
					<h2><strong style="color: red;"><?php echo $title ?></strong></h2>
					<hr>
				</center>
			</div>
			<div class="col-md-12">
				<table id="tmb" class="table dt-responsive dt nowrap" width="100%" style="overflow: auto;">
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
						</tr>
					</thead>
					<tbody>
						<?php if ($tambang != null){ ?>
							<?php $no = 1; foreach ($tambang as $row2){ ?>
								<tr>
									<td><?php echo $no++; ?></td>
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
											<a onclick="window.location='<?php echo base_url() ?>assets/img/tambang/<?php echo $row2->Foto; ?>'" class="btn"><img style=" width: 100px" src="<?php echo base_url() ?>assets/img/tambang/<?php echo $row2->Foto; ?>"></a>
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
	<script>
		$('.table').dataTable();
	</script>
</body>
</html>