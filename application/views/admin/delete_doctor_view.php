
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0
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
<title>Doc Direct</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/select2/select2.css"/>


<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?= base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?= base_url() ?>assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
<!-- BEGIN HEADER INNER -->
<div class="page-header-inner container">
<!-- BEGIN LOGO -->
<div class="page-logo">
<a href="<?= base_url()?>">
<img src="http://localhost/admin_ci/assets/admin/layout2/img/logo-doc_direct.png" alt="logo" class="logo-default"/>
</a>
<div class="menu-toggler sidebar-toggler">
<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
</div>
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
</a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN PAGE TOP -->
<div class="page-top">
<!-- BEGIN HEADER SEARCH BOX -->
<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search..." name="query">
<span class="input-group-btn">
<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
</span>
</div>
</form>
<!-- END HEADER SEARCH BOX -->				
<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
<ul class="nav navbar-nav pull-right">
<!-- BEGIN USER LOGIN DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-user">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
<img alt="" class="img-circle" src="<?= base_url() ?>assets/admin/layout2/img/haricz.jpg"/>
<span class="username username-hide-on-mobile">
Haricz </span>
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu dropdown-menu-default">
<li>
<a href="">
	<i class="icon-user"></i> My Profile </a>
</li>
<li>
	<a href="">
		<i class="icon-calendar"></i> My Reminders </a>
	</li>
	<li>
		<a href="">
			<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
			3 </span>
		</a>
	</li>
	<li class="divider">
	</li>
	<li>
		<a href="login.html">
			<i class="icon-key"></i> Log Out </a>
		</li>
	</ul>
</li>
<!-- END USER LOGIN DROPDOWN -->
<!-- BEGIN USER LOGIN DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
<li class="dropdown dropdown-extended quick-sidebar-toggler">
	<span class="sr-only">Toggle Quick Sidebar</span>
	<i class="icon-logout"></i>
</li>
<!-- END USER LOGIN DROPDOWN -->
</ul>
</div>
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END PAGE TOP -->
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->

<div class="clearfix">
</div>
<div class="container">
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
<!-- BEGIN SIDEBAR MENU -->
<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
<li></li>
<li>
	<a href="<?= base_url() ?>admin">
		<i class="icon-home"></i>
		<span class="title">Dashboard</span>
	</a>
</li>
<li class="start active">
	<a href="javascript:;">
		<i class="icon-user"></i>
		<span class="title">Manage Doctors</span>
		<span class="selected"></span>
		<span class="arrow open"></span>
	</a>
	<ul class="sub-menu">
		<li>
			<a href="<?= base_url()?>admin/add_doctor_page">												
				Add Doctor
			</a>
		</li>
		<li>
			<a href="">
				Delete Doctor
			</a>
		</li>
	</ul>
</li>
<li>
	<a href="javascript:;">
		<i class="icon-user"></i>
		<span class="title">Manage Users</span>
		<span class="arrow "></span>
	</a>
	<ul class="sub-menu">
		<li>
			<a href="">												
				User List
			</a>
		</li>
		<li>
			<a href="">
				Delete User
			</a>
		</li>
	</ul>
</li>					
<li>
<a href="javascript:;">
	<?php
	echo "<span class='badge badge-roundless badge-danger'>" . $number_of_pending . "</span>";
	?>
<i class="icon-rocket" style="margin-left:20px;"></i>					
<span class="title">							
View Pending Doctors
</span>
</a>

</li>
<li>
	<a href="javascript:;">
		<i class="icon-diamond"></i>
		<span class="title">Manage Booking</span>
		<span class="arrow "></span>
	</a>
	<ul class="sub-menu">
		<li>
			<a href="">
				Enable Booking for Doctor</a>
			</li>
			<li>
				<a href="l">
					Disable Booking for Doctor</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content">
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
		Add a Doctor</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-user"></i>
					<a href="">Manage Doctors</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="#">Add Doctor</a>
				</li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->

		<!-- BEGIN PAGE CONTENT-->
	

		<div class="row" style="margin-left:0px;margin-right:0px;">			
			<div class="tab-pane" id="tab_5">
				<div class="portlet box blue ">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-gift"></i>PERSONAL INFORMATION
						</div>
					</div>
					<div class="portlet-body form">
						<!-- BEGIN FORM-->
						<form name="doctorForm" method="post" action="add_doctor_page">
							<div class="form-horizontal form-bordered" >
								<div class="form-body">
									<div class="form-group">
										<label class="control-label col-md-3">First Name</label>
										<div class="col-md-9">											
											<input type="text" name="doc_fname" value="<?php echo set_value('doc_fname');?>" placeholder="first name" class="form-control" required>
											<div style="color:red;"><?php echo form_error('doc_fname'); ?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Middle Name</label>
										<div class="col-md-9">
											<input type="text" name="doc_mname" placeholder="middle name" class="form-control">										
										</div>
									</div>
									<div class="form-group">
									<label class="control-label col-md-3">Last Name</label>
										<div class="col-md-9">
											<input type="text" name="doc_lname" value="<?php echo set_value('doc_lname');?>" placeholder="last name" class="form-control" required>
											<div style="color:red;"><?php echo form_error('doc_lname'); ?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Email</label>
										<div class="col-md-9">
											<input type="text" name="doc_email" value="<?php echo set_value('doc_email');?>" placeholder="email address" class="form-control" required>
											<div style="color:red;"><?php echo form_error('doc_email'); ?></div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Date of Birth</label>
										<div class="col-md-9">
											<input type="date" name="doc_dob" class="form-control" placeholder="date of birth" min="1900-01-01" max="1998-01-01" required>
										</div>
									</div>				
									<div class="form-group">
										<label class="control-label col-md-3">Gender</label>
										<div class="col-md-9">
											<select name="doc_gender" class="form-control">
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>																	
								</div>							
							</div>

							<div class="portlet blue box">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>PROFESSIONAL INFORMATION
									</div>
								</div>
							</div>

							<div class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-body">
										<div class="form-group">
											<label class="control-label col-md-3">PRC Number</label>
											<div class="col-md-9">
												<input type="text" name="doc_prc" placeholder="xxxxxxx" class="form-control">
											</div>
											<label class="control-label col-md-3">Original Issue Date</label>
											<div class="col-md-9">
												<input type="date" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Main Specialty</label>
											<div class="col-md-9">		
											<select name="doc_main_spec" placeholder="Select your main specialty" class="form-control select2_category" required>
												<option value="" disabled selected></option>
												<?php	
													foreach ($spec as $s) {
														echo "<option value='" . $s->spec_id . "'>" . $s->spec_name . "</option>";
													}
												?>
											</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Other Specialties</label>
											<div class="col-md-9">
												<select name="doc_other_specialties[]"  class="form-control select2_sample1" placeholder="Select other specialties" multiple>
													<?php	
													foreach ($spec as $s) {
														echo "<option value='" . $s->spec_id . "'>" . $s->spec_name . "</option>";
													}
													?>
													
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- ORGANIZATION-->
							<div class="portlet blue box">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>ORGANIZATIONS
									</div>
								</div>
							</div>

							<div class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">	
										<div id="organization">																													
										</div>										
										<div style="text-align:right;">                                          
										<a class="btn yellow" href="#form_modal_organization" data-toggle="modal" style="margin:0px auto;width:160px;">Add Organization&nbsp;<i class="fa fa-plus"></i></a>														
										</div>	
									</div>																					
								</div>							
								<br/>
							</div>

							<div id="form_modal_organization" class="modal fade" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">PROFESSIONAL INFORMATION</h4>
										</div>
										<div class="modal-body">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-md-4">Position</label>													
														<input type="text" id="doc_position" class="form-control" placeholder="ex. President, VP, Member" style="width:250px;">	
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Organization</label>													
														<input type="text" id="doc_organization" class="form-control" placeholder="ex. Cebu Medical Society"  style="width:250px;">
												</div>													
											</div>
										</div>
										<div class="modal-footer"><br>
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn green btn-primary" id="add_organization" data-dismiss="modal">Add</button>
										</div>
									</div>
								</div>
							</div>
							<!-- ORGANIZATION-->

							<!-- MEDICAL EDUCATION-->
							<div class="portlet blue box">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>MEDICAL EDUCATION
									</div>
								</div>
							</div>

							<div class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<div id="education">																													
										</div>										
										<div style="text-align:right;">                                          
										<a class="btn yellow" href="#form_modal_education" data-toggle="modal" style="margin:0px auto;width:160px;">Add Education&nbsp;<i class="fa fa-plus"></i></a>														
										</div>									
									</div>																					
								</div>							
								<br/>
							</div>

							<div id="form_modal_education" class="modal fade" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">MEDICAL EDUCATION</h4>
										</div>
										<div class="modal-body">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-md-4">Course/Degree</label>													
														<input type="text" id="doc_course" class="form-control" placeholder="ex. Medical Technology" style="width:250px;">	
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Educational Institution</label>													
														<input type="text" id="doc_ed_institution" class="form-control" placeholder="ex. CDU, Cebu Velez College"  style="width:250px;">
												</div>													
											</div>
										</div>
										<div class="modal-footer"><br>
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn green btn-primary" id="add_education" data-dismiss="modal">Add</button>
										</div>
									</div>
								</div>
							</div>
							<!-- MEDICAL EDUCATION-->

							<!-- MEDICAL EXPERIENCE-->
							<div class="portlet blue box">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>MEDICAL EXPERIENCE
									</div>
								</div>
							</div>

							<div class="form-horizontal form-bordered">
								<div class="form-body">
									<div class="form-group">
										<div id="experience">																													
										</div>										
										<div style="text-align:right;">                                          
										<a class="btn yellow" href="#form_modal_experience" data-toggle="modal" style="margin:0px auto;width:160px;">Add Experience&nbsp;<i class="fa fa-plus"></i></a>														
										</div>									
									</div>																					
								</div>							
								<br/>
							</div>

							<div id="form_modal_experience" class="modal fade" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">MEDICAL EXPERIENCE</h4>
										</div>
										<div class="modal-body">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="control-label col-md-4">Work</label>													
														<input type="text" id="doc_work" class="form-control" placeholder="ex. Medical Assistant, Resident" style="width:250px;">	
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">Institution</label>													
														<input type="text" id="doc_ex_institution" class="form-control" placeholder="ex. CDU, Cebu Velez College"  style="width:250px;">
												</div>		
												<div class="form-group">
													<label class="control-label col-md-4">Start</label>				
														<select id="doc_ex_start" class="form-control" style="width:90px;"></select>									
												</div>
												<div class="form-group">
													<label class="control-label col-md-4">End</label>													
														<select id="doc_ex_end" class="form-control" style="width:90px;"></select>	
												</div>													
											</div>
										</div>
										<div class="modal-footer"><br>
											<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											<button class="btn green btn-primary" id="add_experience" data-dismiss="modal">Add</button>
										</div>
									</div>
								</div>
							</div>
							<!-- MEDICAL EXPERIENCE-->

							<div class="portlet blue box">
								<div class="portlet-title">
									<div class="caption">
										<i class="fa fa-gift"></i>CLINIC AND OFFICE INFORMATION
									</div>
								</div>
							</div>

							<div class="form-horizontal form-bordered">

								<div class="form-body">
									<div class="form-group">

									<div class="office">
										<div class="office_fields">
											
											<label style="margin-left:80px;">Hospital&nbsp;&nbsp;</label>		
											<label style="margin-left:225px;">Room&nbsp;&nbsp;</label>	
											<label style="margin-left:112px;">Contact Number</label>
											<label style="margin-left:132px;">Consultation Fee</label>
											<br>

											<select name="doc_hospital[]"  class="form-control select2_sample1" placeholder=" " style="display:inline-block;margin-left:80px;width:250px;">	
												<option selected disabled hidden value=''></option>											
												<?php
												foreach ($hospitals as $h) {
														echo "<option value='" . $h->hosp_id . "'>" . $h->hosp_name . "</option>";
													}
												?>	
											</select>	
											<input type="text" name="doc_room[]" class="form-control" placeholder="213-B"  style="display:inline;margin-left:38px;width:120px;text-align:center;">
											<input type="text" name="doc_office_number[]" class="form-control" placeholder="4164744"  style="display:inline;margin-left:38px;width:120px;text-align:center;">
											<input type="text" name="doc_consultation_fee[]" class="form-control" placeholder="250"  style="display:inline;margin-left:123px;width:120px;text-align:center;">		
											<br><br><br>
											<p style="margin-left:3px;font-weight:bold;font-style:italic;font-size:11px;">Schedule</p>

											<label style="margin-left:30px;">Sunday</label>
											<label style="margin-left:187px;">Monday</label>
											<label style="margin-left:180px;">Tuesday</label>
											<label style="margin-left:182px;">Wednesday</label>
											<br>

											<div class="col-md-3">
												<div class="input-group">
													<input type="text" class="form-control timepicker timepicker-no-seconds" style="display:inline;margin-left:30px;width:85px;text-align:center;font-size:13px;margin-left:-10px;">													
													</span>
												</div>
											</div>
											&nbsp;--	
											<div class="col-md-3">
												<div class="input-group">
													<input type="text" class="form-control timepicker timepicker-no-seconds" style="display:inline;width:95px;text-align:center;font-size:12px;margin-left:-10px;">													
													</span>
												</div>
											</div>			

											<br><br>

											<label style="margin-left:30px;">Thursday</label>
											<label style="margin-left:175px;">Friday</label>
											<label style="margin-left:195px;">Saturday</label>

											<br>

											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;margin-left:30px;width:110px;text-align:center;font-size:11px;">&nbsp;--											
											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;width:95px;text-align:center;font-size:12px;">

											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;margin-left:15px;width:110px;text-align:center;font-size:11px;">&nbsp;--											
											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;width:95px;text-align:center;font-size:12px;">

											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;margin-left:15px;width:110px;text-align:center;font-size:11px;">&nbsp;--											
											<input type="time" class="form-control" placeholder="22:22"  style="display:inline;width:95px;text-align:center;font-size:12px;">


											
											<br><br><hr>

										</div>		
									</div>

										<div style="text-align:right;">					
											<button type="button" class="btn green" id="addFieldOffice" style="width:198.375px;"> Add Another Work </button>
											<button type="button" class="btn red" id="deleteFieldOffice"> Delete Last Entry </button>					
										</div>
												

																														
								</div>							
								<br/>
							</div>


							<div class="form-actions">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green" style="margin-left:-30px;width:500px;"><i class="fa fa-check"></i> Submit
												</button>
												<!--<button type="button" class="btn default">Reset</button>-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
						<!-- END FORM-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- END PAGE CONTENT-->
</div>
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<!--Cooming Soon...-->
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
<div class="page-footer-inner">
2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
</div>
<div class="scroll-to-top">
<i class="icon-arrow-up"></i>
</div>
</div>
<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url() ?><?= base_url() ?>assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?><?= base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url() ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>\
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?= base_url() ?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?= base_url() ?>assets/admin/layout2/css/themes/grey.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url() ?>assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN USER SCRIPTS -->
<script type="text/javascript" src="<?= base_url() ?>js/admin_addDoctorFunctions.js"></script>
<!-- END USER SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/pages/scripts/form-samples.js"></script>
<script src="<?= base_url() ?>assets/admin/pages/scripts/components-pickers.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {    
// initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
FormSamples.init();
ComponentsPickers.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>