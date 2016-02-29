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
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8">
	<title>DocDirect</title>

	<!--USER REVIEWS IMPORT START -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?= base_url() ?>assets/admin/pages/css/timeline.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!--USER REVIEWS IMPORT END -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE STYLES -->
	<link href="<?= base_url() ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE STYLES -->
	<!-- BEGIN THEME STYLES -->
	<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
	<link href="<?= base_url() ?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
	<link href="<?= base_url() ?>assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- JQUERY & BOOTSTRAP JS-->
	<!--<script src="<?= base_url() ?>assets/global/plugins/jquery-2.1.4.min.js"></script> -->

	<!-- JS END -->

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
								<a href="<?= base_url('home/login') ?>">
									<span class="username username-hide-mobile">Register</span>
								</a>
							</li>
							<li class="droddown dropdown-separator">
								<span class="separator"></span>
							</li>
							<li class="dropdown dropdown-user ">
								<a href="<?= base_url('home/login') ?>">
									<span class="username username-hide-mobile">Login</span>
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

<!-- <div class="clearfix">
</div> -->
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
							<div class="col-md-1">
							</div>
							<div class="col-md-10">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-body">
										<div class="row">
											<div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-2" style="margin-left:1.5%;margin-top:1.5%">
												<div class="profile-userpic" style="width:150px;height:150px">
													<img src="<?= base_url() . 'uploads/doc_images/' . $doctor[0]['img_file_name'] ?>" class="img-responsive" alt="">
												</div>					
											</div>
											
											<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7" style="margin-top:2%">
												<p style="font-weight:bold;font-size:30px;margin-left:2%">Dr. <?php foreach($doctor as $user):?> <?=$user["doc_fname"]?> <?=$user["doc_lname"]?><?php endforeach;?>, MD<button type="button" id="editButton" style="margin-left:5%" class="btn green-meadow">Edit Profile</button></p>
												<div class="col-lg-11 col-xl-11 col-md-11 col-sm-11 col-xs-11">
													<p style="font-size:15px="><?php foreach($spec as $specs):?> <?=$specs["spec_name"]?>, <?php endforeach;?> </p>
												</div>
												<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">
													<p style="font-size:15px=">30 Years of Experience</p>
												</div>
												<div class="col-lg-9 col-xl-9 col-md-9 col-sm-9 col-xs-9">
													<?php $z=0;$stars=0;?><?php foreach($reviews as $review):?> <?php $z++;?> <?php $stars = $stars + $review['rev_rating'] ?> <?php endforeach;?>
													<?php if($stars!=0){
														echo "<span class='stars'>" .$stars/$z . "</span>";
													}
													?>
												</div>
											</div>
										</div>

										<br>
										<div class="row" style="margin-left:1.5%;margin-top:2%">
											<div class="portlet-body">
												<ul class="nav nav-tabs">
													<li class="active">
														<a href="#tab_1_1" data-toggle="tab">
															Profile </a>
														</li>
														<li>
															<a href="#tab_1_2" data-toggle="tab">
																User Reviews </a>
															</li>
														</ul>



														<div class="tab-content">
															<div class="tab-pane fade active in" id="tab_1_1">				
																<?php $x=0;?>								
																<?php if($offices != false) foreach($offices as $details):?>
																	<div class="row">
																		<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">
																			<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																				<i class="fa fa-hospital-o"></i> 	<b><a href="#" class="office-name" id="office-name<?php echo $x;?>"  data-type="text" data-pk="<?=$details['office_id']?>" data-url="/docdirect/Doctor/update_office" data-title="Enter office name" data-name="office_name"><p style="font-size:15px;font-weight:bold;display:inline"> <?=$details['office_name']?> </p> <i class="fa fa-pencil editIndicator" style="color:green;display:none"></i> </a></b>	 																				
																			</div>

																			<div class="row">
																				<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">	
																					<div class="row">
																						<div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1"></div>
																						<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																							<a href="#" class="office-ad" id="office-ad<?php echo $x;?>"  data-type="textarea" data-pk="<?=$details['hosp_id']?>" data-url="/docdirect/Doctor/update_office" data-title="Enter office address" data-name="hosp_address"><p>  <?=$details['hosp_address']?>  </p></a>
																							<a style="display:inline" href="map.html" class="dropdown-toggle">
																								<span style="color:lightblue;text-decoration:underline" class="username username-hide-mobile">View Map</span>
																							</a>
																						</div>		
																					</div>	

																				</div>
																			</div>
																			<div class="row" style="margin-top:4%">
																				<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">
																					<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																						<i class="fa fa-phone"></i> <b>(032) <a href="#" class="office-number" id="office-number<?php echo $x;?>" data-type="text" data-pk="<?=$details['office_id']?>" data-url="/docdirect/Doctor/update_office" data-title="Enter new number" data-name="office_tel_no"><p style="font-size:15px;display:inline"> <?=$details['office_tel_no']?> </p></a></b>																						
																					</div>
																				</div>
																			</div>
																		</div>	

																		<div class="col-lg-5 col-lg-5 col-xl-5 col-md-5 col-sm-5 col-xs-5">
																			<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																				<i class="fa fa-clock-o"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">SCHEDULE</p>	<a href="#" class="office-sched" id="office-sched"><p style="font-weight:bold;margin-left:5%;margin-top:3%">MONDAY-FRIDAY</p><p style="margin-left:5%"> 1:00PM - 4:00PM</p><p style="font-weight:bold;margin-left:5%"> SATURDAY</p><p style="margin-left:5%"> 11:00AM - 2:00PM</p></a>																						
																			</div>
																			<div class="row">
																				<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">	
																					<div class="row">
																						<div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>
																						<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	

																						</div>
																					</div>
																					<div class="row" style="margin-top:5%">
																						<div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>
																						<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																							<button type="button" class="btn btn-primary">Book an Appointment</button>
																						</div>
																					</div>															
																				</div>
																			</div>
																		</div>																																											
																	</div>
																	<hr>
																	<?php $x = $x + 1?>
																<?php endforeach;?>

																<div class="row">
																	<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">
																		<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																			<i class="fa fa-graduation-cap"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">Education</p>		<br>
																			<?php $x=0;?>	<?php if($education != false) foreach($education as $details):?><b><a href="#" class="education" id="education<?php echo $x;?>" data-type="text" data-pk="<?=$details['edu_id']?>" data-url="/docdirect/Doctor/update_doc_info" data-title="Enter educational attainment" data-name="edu_institution"> <p style="margin-left:5%;margin-top:3%"><?=$details['edu_institution']?> <i class="fa fa-pencil editIndicator" style="color:green;display:none"></i></p>  </a></b><?php $x = $x + 1?><?php endforeach;?>																		
																		</div>
<!-- 															<div class="row">
																<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">	
																	<div class="row">
																		<div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1"></div>
																		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																			<p> ABC Institute of Medicine</p>
																			<p> XYZ Medical College</p>
																		</div>		
																	</div>	
																													
																</div>
															</div> -->
															<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																<i class="fa fa-stethoscope"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">Specializations</p> 
																<?php $x=0;?>	<?php if($spec != false) foreach($spec as $details):?>	<a href="#" class="specialization"id="specialization<?php echo $x;?>" data-type="select2" data-pk="<?=$details['spec_id']?>" data-url="/docdirect/Doctor/update_doc_info" data-title="Enter educational attainment" data-name="docspec_spec_id"> <p style="margin-left:5%;margin-top:3%"> <?=$details['spec_name']?>  <i class="fa fa-pencil editIndicator" style="color:green;display:none"></i>  </p></a><?php $x = $x + 1?> <?php endforeach;?>																						
															</div>
<!-- 															<div class="row">
																<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">	
																	<div class="row">
																		<div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1"></div>
																		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																			<p> General Physician</p>
																			<p> Pediatrician</p>
																		</div>		
																	</div>	
																													
																</div>
															</div> -->
															<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																<i class="fa fa-check-circle-o"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">Certifications</p>
																<?php $x=0;?>	<?php if($certification != false) foreach($certification as $details):?>	
																<a href="#" class="certification" id="certification<?php echo $x;?>" data-type="text" data-pk="<?=$details['cert_id']?>" data-url="/docdirect/Doctor/update_doc_info" data-title="Enter certification" data-name="cert_name"> 
																	<p style="margin-left:5%;margin-top:3%"><?=$details['cert_name']?> <i class="fa fa-pencil editIndicator" style="color:green;display:none"></i> </p> </a>	<?php $x = $x + 1?><?php endforeach;?>																						
																</div>
<!-- 															<div class="row">
																<div class="col-lg-7 col-xl-7 col-md-7 col-sm-7 col-xs-7">	
																	<div class="row">
																		<div class="col-lg-1 col-xl-1 col-md-1 col-sm-1 col-xs-1"></div>
																		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																			<p> Board of Internal Medicine</p>
																			<p> Tobol Certified</p>
																		</div>		
																	</div>	
																													
																</div>
															</div> -->
														</div>	

														<div class="col-lg-5">
															<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																<i class="fa fa-sitemap"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">Organizations</p>		
																<?php $x=0;?> <?php if($organization != false) foreach($organization as $details):?>	
																<a href="#" class="organization" id="organization<?php echo $x;?>" data-type="text" data-pk="<?=$details['org_id']?>" data-url="/docdirect/Doctor/update_doc_info" data-title="Enter organization" data-name="org_name">
																	<p style="margin-left:5%;margin-top:3%"> <?=$details['org_name']?>  
																		<i class="fa fa-pencil editIndicator" style="color:green;display:none"></i></p> </a>
																		<?php $x = $x + 1?>	
																	<?php endforeach;?>																					
																</div>
<!-- 															<div class="row">
																<div class="col-lg-8 col-xl-8 col-md-8 col-sm-8 col-xs-8">	
																	<div class="row">
																		<div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>
																		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																			<p>Member of Tobol</p>
																			<p>Cebu Medical Society</p>
																		</div>
																	</div>															
																</div>
															</div> -->
															<div style="display:inline;margin-top:1%" class="fa-item col-lg-12 col-xl-12 col-md-12 col-sm-12 col-xs-12">
																<i class="fa fa-medkit"></i> 	<p style="font-size:15px;font-weight:bold;display:inline">Experience</p>
																<?php $x=0;?>	<?php if($experience != false) foreach($experience as $details):?>	<a href="#" class="experience" id="experience<?php echo $x;?>" data-type="textarea" data-pk="<?=$details['exp_id']?>" data-url="/docdirect/Doctor/update_doc_info" data-title="Enter Experience" data-name="exp_name"><p style="margin-left:5%;margin-top:3%"> <?=$details['exp_start_year']?> - <?=$details['exp_end_year']?> </p><p style="margin-left:5%;margin-top:3%"> <?=$details['exp_position']?> </p><p style="margin-left:5%;margin-top:3%"> <?=$details['exp_office_name']?> <i class="fa fa-pencil editIndicator" style="color:green;display:none"></i> </p><br></a> <?php $x = $x + 1?><?php endforeach;?>	
<!-- 															<div class="row">
																<div class="col-lg-8 col-xl-8 col-md-8 col-sm-8 col-xs-8">	
																	<div class="row">
																		<div class="col-lg-2 col-xl-2 col-md-2 col-sm-2 col-xs-2"></div>
																		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10">	
																			<p>2005 - Present</p>
																			<p>General Physician for Chong Hua</p>
																			<p>Medical Arts Center</p>
																			<br>
																			<p>2011 - Present</p>
																			<p>General Physician for Cebu</p>
																			<p>Doctors' University Hospital MAB2</p>
																		</div>
																	</div>															
																</div>
															</div> -->
														</div>																																											
													</div>
												</div>
											</div>
											<!-- END OF PROFILE -->

											<div class="tab-pane fade" id="tab_1_2">
												<div>
													<!-- TIMELINE ITEM -->
													<?php foreach ($reviews as $review):?>
														<div>
															
														<!-- 	<div class="timeline-badge">
																<img class="timeline-badge-userpic" src="<?= base_url() ?>assets/admin/pages/media/users/avatar80_2.jpg">
															</div -->
															<div class="timeline-body-new" style="position:left">
<!-- 																<div class="timeline-body-arrow">
</div> -->
<div class="timeline-body-head">
	<div class="timeline-body-head-caption">
		<span class="stars"style='margin-bottom:2%'><?= $review['rev_rating'] ?></span>
		<a href="javascript:;" class="timeline-body-title font-blue-madison"><?=$review['gu_firstname']?> <?= $review['gu_lastname'] ?></a>
		<span class="timeline-body-time font-grey-cascade"><!-- Posted at December 4, 2015 7:45 PM -->Posted at <?=$review['rev_date_added']?></span>
	</div>
</div>
<br>
<div class="timeline-body-content">
	<span class="font-grey-cascade">
		<!-- Nindot kaayo ni sya nga doctor. --><?=$review['rev_review']?> </span>
	</div>
</div>
</div>
<?php endforeach;?>
</div>




<div class="row" style="margin-top:2%">
	<div class="col-md-12 col-md-offset-9">
		<button type ="button" id="postReview" class="btn main-btn btn-info">Write a review</button>
	</div>
</div>





														<!-- <div class="timeline-item">
															<img style="display:inline;margin-left:3%" src="http://localhost/thesis/assets/stars.png" class="img-responsive" alt="">
															<img style="display:inline" src="http://localhost/thesis/assets/stars.png" class="img-responsive" alt="">
															<img style="display:inline" src="http://localhost/thesis/assets/stars.png" class="img-responsive" alt="">
															<img style="display:inline" src="http://localhost/thesis/assets/stars.png" class="img-responsive" alt="">
															<img style="display:inline" src="http://localhost/thesis/assets/stars.png" class="img-responsive" alt="">
															<div class="timeline-badge">
																<img class="timeline-badge-userpic" src="<?= base_url() ?>assets/admin/pages/media/users/avatar80_3.jpg">
															</div>
															<div class="timeline-body">
																<div class="timeline-body-arrow">
																</div>
																<div class="timeline-body-head">
																	<div class="timeline-body-head-caption">
																		<a href="javascript:;" class="timeline-body-title font-blue-madison">Kuya Koys</a>
																		<span class="timeline-body-time font-grey-cascade">Posted at November 4, 2015 5:10 PM</span>
																	</div>
																	<div class="timeline-body-head-actions">
																	</div>
																</div>
																<div class="timeline-body-content">
																	<span class="font-grey-cascade">
																		I'm so gwapo.
																	</span>
																</div>
															</div>
														</div>
													</div> -->
												</div>

												<div class="clearfix margin-bottom-20">
												</div>

											</div>

											<!-- END PORTLET MAIN -->
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
		</div>
	</div>
</div>
</div>
<!-- END PAGE CONTAINER -->


<script>
// $(document).ready(function(){
	//$(selector).listener(function(){});
	
</script>
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
	<div class="container">

		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-24 footer-block">
				<a href="about.html"><h2>About</h2></a>
				<p>
					DocorLandia is an online directory for Doctors in Cebu with a booking option for selected doctors. 
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
					Email: <a href="mailto:info@metronic.com">doctorlandia@gmail.com</a>
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
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url() ?>assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?= base_url() ?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!--BOOTSTRAP EDITABLE-->
<link href="<?= base_url() ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
<script src="<?= base_url() ?>assets/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.js"></script>
<!-- BOOSTRAP EDITABLE END-->
<script>
	var flag = 0;
	$(document).ready(function(){
		$("#editButton").click(function(){
			$('.editIndicator').toggle();
			if(flag == 0)
			{
				$('.office-name').editable('option', 'disabled', false);
				$('.office-number').editable('option', 'disabled', false);
				$('.education').editable('option', 'disabled', false);
				$('.specialization').editable('option', 'disabled', false);
				$('.certification').editable('option', 'disabled', false);
				$('.organization').editable('option', 'disabled', false);
				$('.office-ad').editable('option', 'disabled', false);
				$('.experience').editable('option', 'disabled', false);
				$("#editButton").text("Done");
				flag = 1;
			}
			else
			{
				$('.office-name').editable('option', 'disabled', true);
				$('.office-number').editable('option', 'disabled', true);
				$('.education').editable('option', 'disabled', true);
				$('.specialization').editable('option', 'disabled', true);
				$('.certification').editable('option', 'disabled', true);
				$('.organization').editable('option', 'disabled', true);
				$('.office-ad').editable('option', 'disabled', true);
				$('.experience').editable('option', 'disabled', true);
				$("#editButton").text("Edit Profile");
				flag = 0;
			}
		});

		$("#postReview").click(function(){
			$("#reviewModal").modal("toggle");
		});
	});
</script>
<script>
	$(function() {
		$('span.stars').stars();
	});
</script>
<script type="text/javascript">
	$.fn.stars = function() {
		return $(this).each(function() {
        // Get the value
        var val = parseFloat($(this).html());
        // Make sure that the value is in 0 - 5 range, multiply to get width
        var size = Math.max(0, (Math.min(5, val))) * 16;
        // Create stars holder
        var $span = $('<span />').width(size);
        // Replace the numerical value with stars
        $(this).html($span);
      });
	}

	function postReview(){

		$.post("<?php echo base_url('doctor/addReview1'); ?>",{
			rev_review:$("#review").val(),
			rev_rating:$("#rev_rating").val()
		},function(data){
            // x=JSON.parse(data);
            window.location.reload();
			// window.location="<?php echo base_url('homepagefoodhead/')?>";
		});
	}
</script>
<style type="text/css">
	span.stars, span.stars span {
		display: block;
		background: url(http://localhost/docdirect/assets/global/img/stars.png) 0 -16px repeat-x;
		width: 80px;
		height: 16px;
	}

	span.stars span {
		background-position: 0 0;
	}
</style>
<script>
	jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   QuickSidebar.init(); // init quick sidebar
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
 });
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
<div class="modal fade" id="reviewModal" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">User Review</h4>
			</div>
			<div class="modal-body">
				<form role="form" id="contact-form" method="POST" class="contact-form">
					<div class="form-group">
						<textarea class="form-control textarea" rows="2" name="review" id="review" placeholder="Write review"></textarea>
					</div>
					<div class="form-group">
						<select style="width:30%" class="form-control" id="rev_rating" name="rev_rating">
							<option selected value="">Rate from 1-5</option>
							<option value="1">1 Star</option>
							<option value="2">2 Stars</option>
							<option value="3">3 Stars</option>
							<option value="4">4 Stars</option>
							<option value="5">5 Stars</option>
						</select>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn default" data-dismiss="modal">Cancel</button>
				<button type="button" onclick="postReview()" class="btn blue">Post</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

</html>