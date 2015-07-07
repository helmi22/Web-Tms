<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $judul; ?></title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>assets/admin/janux/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/admin/janux/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>assets/admin/janux/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>assets/admin/janux/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>


<!-- TinyMCE -->
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
<!-- /TinyMCE -->

<script>
	tinymce.init({
		selector: "form_textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
		],
		external_plugins: {
			//"moxiemanager": "/moxiemanager-php/plugin.js"
		},
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",

		image_advtab: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		link_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		image_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		templates: [
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
		],

		setup: function(ed) {
			/*ed.on(
				'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
				'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
				'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
				console.log(e.type, e);
			});*/
		},

		spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});
</script>
</head>
<body>

<!--================================================-->
<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>TRAMINDO</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                               
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>Hallo Admin
								
							</a>
							
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
						<li><a href="<?php echo base_url(); ?>index.php/admin/dashboard/"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Beranda</span></a></li>	
						<li><a href="<?php echo base_url(); ?>index.php/admin/posts/"><i class="icon-envelope"></i><span class="hidden-tablet"> Posting</span></a></li>
						<li><a href="<?php echo base_url(); ?>index.php/admin/categories/"><i class="icon-tasks"></i><span class="hidden-tablet"> Katagori</span></a></li>
						<li><a href="<?php echo base_url(); ?>index.php/admin/dashboard/users"><i class="icon-eye-open"></i><span class="hidden-tablet"> User</span></a></li>
						<li><a href="<?php echo base_url(); ?>index.php/template/logout"><i class="icon-lock"></i><span class="hidden-tablet"> Logout</span></a></li>
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
			
			<?php $this->load->view($main);?>

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	</div><!--/#content.span10-->
	</div><!--/fluid-row-->
		

<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2015 <a href="#" alt="Bootstrap_Metro_Dashboard">Baotme.com</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/modernizr.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/bootstrap.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.cookie.js"></script>
	
		<script src='<?php echo base_url(); ?>assets/admin/janux/js/fullcalendar.min.js'></script>
	
		<script src='<?php echo base_url(); ?>assets/admin/janux/js/jquery.dataTables.min.js'></script>

		<script src="<?php echo base_url(); ?>assets/admin/janux/js/excanvas.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.flot.stack.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.chosen.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.uniform.min.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.cleditor.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.noty.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.elfinder.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.raty.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.gritter.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.imagesloaded.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.masonry.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.knob.modified.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/jquery.sparkline.min.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/counter.js"></script>
	
		<script src="<?php echo base_url(); ?>assets/admin/janux/js/retina.js"></script>

		<script src="<?php echo base_url(); ?>assets/admin/janux/js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
