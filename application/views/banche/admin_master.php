<!DOCTYPE html>
<html lang="en">
	<head>
		
		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>Summerfield Admin Panel</title>
		<meta name="description" content="Bootstrap Metro Dashboard">
		<meta name="author" content="Dennis Ji">
		<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<!-- end: Meta -->
		
		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- end: Mobile Specific -->
		
		<!-- start: CSS -->
		<link id="bootstrap-style" href="<?php echo base_url()?>assets/admin_assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link id="base-style" href="<?php echo base_url()?>assets/admin_assets/css/style.css" rel="stylesheet">
		<link id="base-style-responsive" href="<?php echo base_url()?>assets/admin_assets/css/style-responsive.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		<!-- end: CSS -->
		
		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo base_url()?>assets/admin_assets/css/ie.css" rel="stylesheet">
		<![endif]-->
		
		<!--[if IE 9]>
		<link id="ie9style" href="<?php echo base_url()?>assets/admin_assets/css/ie9.css" rel="stylesheet">
		<![endif]-->
		
		<!-- start: Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/admin_assets/img/favicon.ico">
		<!-- end: Favicon -->
		
		
		
		
	</head>
	<body>
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" target="_blank" href="<?php echo base_url()?>"><span> Summerfield International School</span></a>
					
					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<!-- start: User Dropdown -->
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="halflings-icon white user"></i>
									<?php echo $this->session->username;?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url('admin-logout')?>"><i class="halflings-icon off"></i> Logout</a></li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->
					
				</div>
			</div>
		</div>
		<!-- start: Header -->
		
		<div class="container-fluid-full">
			<div class="row-fluid">
				
				<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<div class="nav-collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu">
							<li><a href="<?php echo base_url()?>admin-dashboard"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
							
							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Website Logo</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/add_logo_form"><i class="icon-picture"></i><span class="hidden-tablet">Add logo</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_logo"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage logo </span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Image Slider</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/show_slider_form"><i class="icon-picture"></i><span class="hidden-tablet"> Add Main Slider Image</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_slider_image"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Main Slider Image</span></a></li>
									<li><a href="<?php echo base_url()?>admin/show_timeline_slider_form"><i class="icon-picture"></i><span class="hidden-tablet"> Add Timeline Slider Image</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_timeline_slider_image"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Timeline Slider Image</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> About Us </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/show_glance_form"><i class="icon-picture"></i><span class="hidden-tablet">At a glance</span></a></li>
									<li><a href="<?php echo base_url()?>admin/show_history_form"><i class="icon-picture"></i><span class="hidden-tablet">Our history</span></a></li>
									<li><a href="<?php echo base_url()?>admin/show_message_form"><i class="icon-picture"></i><span class="hidden-tablet">Principal's Message</span></a></li>
								</ul>
							</li>

								<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Academics </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>academics/show_curriculam_form"><i class="icon-picture"></i><span class="hidden-tablet">Our Curriculam</span></a></li>
									<li><a href="<?php echo base_url()?>academics/show_cambridge_form"><i class="icon-picture"></i><span class="hidden-tablet">Cambridge & Edexcel</span></a></li>
									<li><a href="<?php echo base_url()?>academics/show_facilities_form"><i class="icon-picture"></i><span class="hidden-tablet">Facilities</span></a></li>
									<li><a href="<?php echo base_url()?>academics/show_faculty_form"><i class="icon-picture"></i><span class="hidden-tablet">Faculty</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Admission </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admission/show_admission_information_form"><i class="icon-picture"></i><span class="hidden-tablet">Admission Information</span></a></li>
									<li><a href="<?php echo base_url()?>admission/manage_admission_information"><i class="icon-picture"></i><span class="hidden-tablet">Manage Admission Information</span></a></li>
									<li><a href="<?php echo base_url()?>admission/add_admission_process_form"><i class="icon-picture"></i><span class="hidden-tablet">Admission Process</span></a></li>
									<li><a href="<?php echo base_url()?>admission/manage_admission_process"><i class="icon-picture"></i><span class="hidden-tablet">Manage Admission Process</span></a></li>
									<li><a href="<?php echo base_url()?>admission/add_school_brochure_form"><i class="icon-picture"></i><span class="hidden-tablet">School Brochure</span></a></li>
									<li><a href="<?php echo base_url()?>admission/manage_school_brochure"><i class="icon-picture"></i><span class="hidden-tablet">Manage School Brochure</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Result </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>result/add_result_form"><i class="icon-picture"></i><span class="hidden-tablet">Publish New Result</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>result/manage_result"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage All Published Result</span></a></li>
								</ul>
							</li>



								<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Announcement </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/show_announcement_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Announcement</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_announcement"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Announcement</span></a></li>
								</ul>
							</li>

								<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Collaboration </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/show_collaboration_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Collaboration</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>admin/manage_collaboration_image"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Collaboration</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Academic Calender </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>calender/add_calender_form"><i class="icon-picture"></i><span class="hidden-tablet">Add New Calender</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>calender/manage_calender"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage All Calender</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Newsletter </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>newsletter/add_newsletter_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Newsletter</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>newsletter/manage_newsletter"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Newsletter</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Photo Gallery </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>gallery/add_gallery_form"><i class="icon-picture"></i><span class="hidden-tablet">Add New Gallery</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>gallery/manage_gallery"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage All Gallery</span></a></li>
								</ul>
							</li>

							<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Career </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>career/add_apply_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Apply Page Info</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>career/manage_apply"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Apply Page</span></a></li>
									<li><a href="<?php echo base_url()?>career/add_vacancies_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Vacancies</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>career/manage_vacancies"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Vacancies</span></a></li>
								</ul>
							</li>

								<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Exam Venue </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>exam_venue/add_exam_venue_form"><i class="icon-picture"></i><span class="hidden-tablet">Add New Exam venue</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>exam_venue/manage_exam_venue"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Exam venue</span></a></li>
								</ul>
							</li>



								<li>
								<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Contact Us </span></a>
								<ul>
									<li><a href="<?php echo base_url()?>contact/show_social_network_form"><i class="icon-picture"></i><span class="hidden-tablet">Add Social network</span></a></li>
									<li><a href="<?php echo base_url()?>campus/add_campus_form"><i class="icon-picture"></i><span class="hidden-tablet">Add New campus</span></a></li>
									<li><a class="submenu" href="<?php echo base_url()?>campus/manage_campus"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage All Campus</span></a></li>
								</ul>
							</li>


						</ul>
					</div>
				</div>
				<!-- end: Main Menu -->
				
				<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
				</noscript>
				
				<!-- start: Content -->
				<div id="content" class="span10">
					
					<?php echo $admin_main_content; ?>
					
					</div><!--/.fluid-container-->
					
					<!-- end: Content -->
					</div><!--/#content.span10-->
					</div><!--/fluid-row-->

					<div class="clearfix"></div>
					
					<footer style="background: #080808;">
						<p>
							<span style="text-align:left;float:left;">Powered By : <a href="http://wanitltd.com/" target="_blank"> WAN IT Ltd.</a></span>
							
						</p>
					</footer>
					
				
					
					<!-- start: JavaScript-->
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-1.9.1.min.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-migrate-1.0.0.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.ui.touch-punch.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/modernizr.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/bootstrap.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.cookie.js"></script>
					
					<script src='<?php echo base_url()?>assets/admin_assets/js/fullcalendar.min.js'></script>
					
					<script src='<?php echo base_url()?>assets/admin_assets/js/jquery.dataTables.min.js'></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/excanvas.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.pie.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.stack.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.flot.resize.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.chosen.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.uniform.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.cleditor.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.noty.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.elfinder.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.raty.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.iphone.toggle.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.uploadify-3.1.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.gritter.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.imagesloaded.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.masonry.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.knob.modified.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/jquery.sparkline.min.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/counter.js"></script>
					
					<script src="<?php echo base_url()?>assets/admin_assets/js/retina.js"></script>
					<script src="<?php echo base_url()?>assets/admin_assets/js/custom.js"></script>
					<!-- end: JavaScript-->
					
				</body>
			</html>