<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/front/mods/') ?>../plugins/images/favicon.png">
    <title>Login Dashboard</title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="<?= base_url('assets/front/mods/') ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
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
    <style type="text/css" media="screen">
    	.login-register
    	{
    		background: white !important;
    	}
    </style>
</head>

<body class="mini-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <section id="wrapper" class="login-register container">
        <div class="login-box" style="border-radius: 20px;box-shadow: 10px 10px 0px 0px #00000021;">
            <div class="white-box" style="border-radius: 20px;">

                <form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo site_url('logged_process') ?>">
                    <h3 class="box-title m-b-20">Sign In</h3>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input name="username" class="form-control" type="text" required="" placeholder="Username" style="border-bottom: 1px solid #cfcfcf;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input name="password" class="form-control" type="password" required="" placeholder="Password" style="border-bottom: 1px solid #cfcfcf;">
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-danger btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                    
                </form>
               <?php echo $this->session->flashdata('notif'); ?>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url('assets/front/mods/') ?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?= base_url('assets/front/mods/') ?>js/sidebarmenu.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?= base_url('assets/front/mods/') ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/front/mods/') ?>js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url('assets/front/mods/') ?>js/custom.js"></script>
    <!--Style Switcher -->
    <script src="<?= base_url('assets/front/mods/') ?>../plugins/components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>