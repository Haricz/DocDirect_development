<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>DocDirect</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?= base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>/assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>/assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>/assets/custom/webfont-medical-icons/wfmi-style.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>/assets/custom/custom.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?= base_url() ?>/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?= base_url() ?>/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md">
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="<?= base_url() ?>"><h1>DocDirect</h1></a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<?php if($this->session->has_userdata('acc_id')): ?>
						<li class="dropdown dropdown-user dropdown-dark">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<span class="username username-hide-mobile"><?= $this->session->userdata('acc_firstname') ?></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="<?= base_url('user/appointments') ?>">
									<i class="icon-user"></i>Appointments & Reviews </a>
								</li>
								<li>
									<a href="<?= base_url('user/edit_profile') ?>">
									<i class="icon-calendar"></i>Account Settings </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="<?= base_url('auth/logout') ?>">
									<i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>
					<?php else: ?>
						<li class="dropdown dropdown-user">
							<a href="<?= base_url('home/doctor_registration') ?>">
								<span class="username username-hide-mobile">Join the directory</span>
							</a>
						</li>
						<li class="droddown dropdown-separator">
							<span class="separator"></span>
						</li>
						<li class="dropdown dropdown-user ">
							<a href="<?= base_url('home/login') ?>">
								<span class="username username-hide-mobile">Register/Login</span>
							</a>
						</li>
					<?php endif; ?>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-12">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-body">
										<div class="row">
											<div class="col-md-1"></div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-6">
														<div class="text-left">
															<h2>Find a doctor you love.</h2>
															<h2>Get the care you need.</h2>
														</div><br/>
														<h4>Choose a specialty</h4>
														<form role="form" method="GET" action="<?= base_url(). 'dir/search' ?>">
															<div class="form-body">
																<div class="form-group">
																	<select name="specialization" class="form-control-lg">
																		<option value="0">Any</option>
																		<?php foreach($specializations as $spec): ?>
																			<option value="<?= $spec->spec_id ?>" 
																				<?php if($this->input->get('specialization') == $spec->spec_id) echo 'selected'; ?>>
																				<?= $spec->spec_name ?>
																			</option>
																		<?php endforeach; ?>
																	</select>
																</div>
															</div>
															<h4>in Cebu City</h4>
															<br/>
															<div class="form-actions">
																<button type="submit" class="btn blue btn-lg">Find Doctors</button>
															</div>
														</form>
													</div>
													<div class="col-md-1"> </div>
													<div class="col-md-5">
														<br/><br/><!-- 
														<div class="text-left">
															<h4>With DocDirect, you can:</h4>
														</div> -->
														<div class="text-center">
															<h4>Know more about your doctor</h4>
															<i class="fa fa-info-circle font-blue icon-lg"></i>
															<h4>See doctor reviews from other patients</h4>
															<i class="fa fa-star font-yellow icon-lg"></i>
															<i class="fa fa-star font-yellow icon-lg"></i>
															<i class="fa fa-star font-yellow icon-lg"></i>
															<i class="fa fa-star font-yellow"></i>
															<i class="fa fa-star font-yellow"></i>
															<h4>Reserve appointments without hassle</h4>
															<i class="fa fa-smile-o font-blue icon-lg"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br/><br/>
										<div class="row">
											<div class="col-md-5">
												
											</div>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-24 footer-block">
				<a href="about.html"><h2>About</h2></a>
				<p>
					 DocDirect is an online directory for Doctors in Cebu with a booking option for selected doctors. 
					 Find the right doctor for you, by viewing the doctors' profiles with complete information from consultation fees to user reviews.
				</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Survey</h2>
				<address class="margin-bottom-40">
					Want to take a quick survey about our website?<br>
					<a href="register.html">
					<button type="button" class="btn blue">Take Survey
					</button>
					</a>
				</address>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Contact Us</h2>
				<address class="margin-bottom-40">
					Got some feedback on the site? Send them in. We'd love to hear from you.<br/>
				 	Email: <a href="mailto:info@metronic.com">docdirect@gmail.com</a>
				</address>
			</div>
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container">
		 2016 &copy; DocDirect
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url() ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?= base_url() ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url() ?>/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url() ?>/assets/global/plugins/nouislider/jquery.nouislider.all.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/pages/scripts/components-nouisliders.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
   	// initiate layout and plugins
   	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features\
	Profile.init(); // init page demo
	ComponentsNoUiSliders.init();

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>