<html lang="en" style="width: auto !important;height: auto !important;"><head>
	<meta charset="utf-8"/>
	<meta name="viewport"
	      content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Paid Promote Monitor
	</title>
	<!-- Favicon -->
	<link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/img/brand/favicon.png"
	      rel="icon"
	      type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
	      rel="stylesheet">
	<!-- Icons -->

	<link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/nucleo/css/nucleo.css"
	      rel="stylesheet"/>
	<link
		href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css"
		rel="stylesheet"/>
	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/css/argon-dashboard.css?v=1.1.0"
	      rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/apps/InfestPromote/style/app.css" rel="stylesheet"/>
	<script>
        var BASE_URL = '<?php echo base_url(); ?>index.php/';
        var BASE_PATH = '<?php echo base_url(); ?>';
        var MODULE_URL = '<?php echo base_url();?>application/modules/InfestPromote';
	</script>
	<script src='<?php echo base_url(); ?>core/InfestPromote/js/api.js' type="text/javascript"></script>
</head>

<body class="bg-default" style="width: auto !important;height: auto !important;">
<div class="main-content">
	<div class="container mt--8 pb-5" style="margin-top: 1% !important;">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-6">
				<h1 class="text-white">Welcome!</h1>
				<p class="text-lead text-light">Use these awesome forms to login</p>
			</div>
			<div class="col-lg-5 col-md-7">
				<div class="card bg-secondary shadow border-0">
					<div class="card-body px-lg-5 py-lg-5">
						<form id="login" role="form">
							<div class="form-group mb-3">
								<div class="input-group input-group-alternative">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-email-83"></i></span>
									</div>
									<input name="email" class="form-control" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group input-group-alternative">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
									</div>
									<input name="password" class="form-control" placeholder="Password" type="password">
								</div>
							</div>
							<div class="text-center">
								<button onclick="login()" type="button" class="btn btn-primary my-4">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/vendor/argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>assets/apps/InfestPromote/js/app.js" type="text/javascript"></script>

</body></html>