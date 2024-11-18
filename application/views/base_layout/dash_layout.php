<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
	<title><?= $title ?></title>

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


<body class="mini-sidebar ">
	<!-- Preloader -->
	<div class="preloader">
		<div class="cssload-speeding-wheel"></div>
	</div>
	<div id="wrapper">
		<!-- ===== Top-Navigation ===== -->
		<nav class="navbar navbar-default navbar-static-top m-b-0">
			<div class="navbar-header">
				<a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
					<i class="fa fa-bars"></i>
				</a>
				<div class="top-left-part">
					<a class="logo" href="">
						<b>
							<img src="<?= base_url('assets/front/mods/') ?>../plugins/images/private/icon-32x32_putih.png" alt="home" />
						</b>
						<span>
							<img src="<?= base_url('assets/front/mods/') ?>../plugins/images/private/icon-txt.png" alt="homepage" class="dark-logo" />
						</span>
					</a>
				</div>
				<ul class="nav navbar-top-links navbar-left hidden-xs">
					<li>
						<a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
					</li>
				</ul>
				<!-- <ul class="nav navbar-top-links navbar-right pull-right">
					<li class="dropdown">
						<a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
							<i class="icon-speech"></i>
							<span class="badge badge-xs badge-danger">6</span>
						</a>
						<ul class="dropdown-menu mailbox animated bounceInDown">
							<li>
								<div class="drop-title">You have 4 new messages</div>
							</li>
							<li>
								<div class="message-center">
									<a href="javascript:void(0);">
										<div class="user-img">
											<img src="<?= base_url('assets/front/mods/') ?>../plugins/images/user.png?dd=<?= encrypt_url(date('H:i:s')) ?>" alt="user" class="img-circle">
											<span class="profile-status busy pull-right"></span>
										</div>
										<div class="mail-contnet">
											<h5>Sonu Nigam</h5>
											<span class="mail-desc">I've sung a song! See you at</span>
											<span class="time">9:10 AM</span>
										</div>
									</a>
								</div>
							</li>
							<li>
								<a class="text-center" href="javascript:void(0);">
									<strong>See all notifications</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul> -->
			</div>
		</nav>
		<!-- ===== Top-Navigation-End ===== -->
		<!-- ===== Left-Sidebar ===== -->
		<aside class="sidebar" role="navigation">
			<div class="scroll-sidebar">
				<div class="user-profile">
					<div class="dropdown user-pro-body">
						<div class="profile-image">
							<img src="<?= base_url('assets/front/mods/') ?>../plugins/images/user.png?dd=<?= encrypt_url(date('H:i:s')) ?>" alt="user-img" class="img-circle">
							<a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="badge badge-danger">
									<i class="fa fa-angle-down"></i>
								</span>
							</a>
							<ul class="dropdown-menu animated flipInY">
								
								<li><a href="<?= site_url('logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
							</ul>
						</div>
						<p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> <?php echo $this->session->userdata('username'); ?></a></p>
					</div>
				</div>
				<nav class="sidebar-nav">
					<ul id="side-menu">
						<li>
							<a href="<?php echo site_url('dashboard') ?>" aria-expanded="false"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard </span></a>
						</li>
						<li>
							<a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Data Master </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?= site_url('daerah') ?>">Daerah</a></li>
								<li><a href="<?= site_url('perusahaan') ?>">Perusahaan</a></li>
							</ul>
						</li>

						<li>
							<a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-notebook fa-fw"></i> <span class="hide-menu"> Data Tambang </span></a>
							<ul aria-expanded="false" class="collapse">
								<?php $type = $this->db->get('tbl_mas_type_mineral')->result(); ?>
								<?php if ($type != null){ ?>
									<?php foreach ($type as $ty){ ?>
										<li><a href="<?= site_url('tambang/'.encrypt_url($ty->IdType)) ?>"><?php echo $ty->Type ?></a></li>
									<?php } ?>
								<?php } ?>
								
							</ul>
						</li>

						<li>
							<a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-note fa-fw"></i> <span class="hide-menu"> Blog </span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="<?= site_url('createpost') ?>">Post</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo site_url('peti') ?>" aria-expanded="false"><i class="icon-envelope-open fa-fw"></i> <span class="hide-menu">PETI</span></a>
						</li>
						<!-- <li>
							<a href="sd" aria-expanded="false"><i class="icon-settings fa-fw"></i> <span class="hide-menu">Setting Slider</span></a>
						</li>
						<li>
							<a href="#" aria-expanded="false" onclick="update_gis();return false;"><i class="icon-settings fa-fw"></i> <span class="hide-menu">Update GIS File</span></a>
						</li> -->
						<li>
							<a href="<?= site_url('home') ?>" aria-expanded="false"><i class="icon-home fa-fw"></i> <span class="hide-menu">Home Page</span></a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<!-- ===== Left-Sidebar-End ===== -->
		<!-- Page Content -->
		<div class="page-wrapper">
			<div class="container-fluid" style="padding: 10px;">
				<!-- .row -->
				<div class="row" style="margin-top: 10px;">
					<?php echo $this->session->flashdata('notif'); ?>
					<?php $this->load->view($content); ?>
				</div>
				<!-- /.row -->
				<!-- ===== Right-Sidebar ===== -->
				
				<!-- ===== Right-Sidebar-End ===== -->
			</div>
			<!-- /.container-fluid -->
			<footer class="footer t-a-c">
				© Copyright  <a href="https://instagram.com/pemprovsulut?igshid=MzRlODBiNWFlZA==" target="_blank" title=""><?php echo strtoupper('dinas energi simber daya dan mineral sulawesi utara ') ?> <?php echo date('Y') ?> </a>
			</footer>
		</div>
		<!-- /#page-wrapper -->
	</div>

	<!-- sample modal content -->
	<div id="modal_upload_json" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="$('#upload_body').html('')">×</button>
	                <h4 class="modal-title">Update GIS</span></h4>
	            </div>
				<div class="modal-body" id="upload_body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-flat" data-dismiss="modal" onclick="$('#upload_body').html('')">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /#wrapper -->
	<!-- Custom Theme JavaScript -->
	<script>
		$('.dt-responsive').dataTable();
		$('.sl2').select2();
		$.fn.modal.Constructor.prototype.enforceFocus = function() {
	    $( document )
	        .off( 'focusin.bs.modal' ) // guard against infinite focus loop
	        .on( 'focusin.bs.modal', $.proxy( function( e ) {
	            if (
	                this.$element[ 0 ] !== e.target && !this.$element.has( e.target ).length
	                // CKEditor compatibility fix start.
	                && !$( e.target ).closest( '.cke_dialog, .cke' ).length
	                // CKEditor compatibility fix end.
	            ) {
	                this.$element.trigger( 'focus' );
	            }
	        }, this ) );
	};

	function update_gis()
	{
		$.ajax({
		  url: '<?php echo site_url('Admin/upload_gis') ?>',
		  type: 'POST',
		  dataType: 'html',
		  success: function(data)
		  {
		  	$('#modal_upload_json').modal('show');
		  	$('#upload_body').html(data);
		  	
		  },
		  error: function(xhr, textStatus, errorThrown)
		  {
		  	console.log(errorThrown);
		  }
		});
		
	}
	</script>
	<script src="<?= base_url('assets/front/mods/') ?>js/custom.js"></script>
</body>

</html>
