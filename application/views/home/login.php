<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
 	<!-- Define Charset -->
	<meta charset="utf-8">

	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Page Description and Author -->
	<meta name="description" content="Construction - Responsive HTML5 Template">
	<meta name="author" content="iThemesLab-Baotme">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $judul; ?></title>

<!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.transitions.css" type="text/css">
    
    <!-- Light Box CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightbox.css" type="text/css">
    

    <!-- Construction CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    
    <!-- Default Color -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/light-red.css">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/colors/black.css" title="black">
    
    <!-- Responsive CSS Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/responsive.css">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css">
    
    
    
    <!-- Construction JS File -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/modernizr.custom.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/lightbox.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.fitvids.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/superfish.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/supersubs.js"></script>
    <script src="<?php echo base_url()?>assets/js/styleswitcher.js"></script>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>

    <!-- css nu kudu di hapus lamun gs di pasang template anyar
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" /> -->

	<!-- Styles -->
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap-custom.css" rel="stylesheet">

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38395785-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
</head>
<body>
<!-- Navbar
    ================================================== -->

<!-- ==================================================================== -->


	<p>&nbsp;</p>					
	<?php if($this->session->flashdata('result')<>'')
		echo "<p align='center' style='color:red'>".$this->session->flashdata('result')."</p>";
	?>

	<h2 class="judul"><center>LOGIN ADMIN TMS</center></h2>
	<div class="col-md-4 col-md-offset-4 kotak-login">
		<div class="panel panel-success">
			<div class="panel-heading">
				<center>Silahkan Login</center>
			</div>
			<div class="panel-body">
				

	<form name='login' action='<?php echo base_url();?>index.php/template/ceklogin' method='post' >
			<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
					<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div>
				<br/>
		<div class="input-group">
					<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
					<input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
				</div>
				<br/>
				<input type="submit" name="submit" value="Login" class="btn btn-sm btn-primary">
			   </form>
			
	</div>
</div>
<center><a href="<?=base_url()?>" class="btn btn-primary btn-xs">Kembali ke Halaman Utama</a></center>
</div>
</div>


<!--====================================================================== -->



	</body>
</html>