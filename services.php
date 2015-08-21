<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Foundation 4</title>
  
  <link rel="stylesheet" href="css/foundation.css" media="all" />
  <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
  <!--[if IE 7]>
		  <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
  <![endif]-->
  <link rel="stylesheet" href="css/animate-custom.css" media="screen"/>
  <link rel="stylesheet" href="css/style.css" media="all"/>
  <link rel="stylesheet" href="css/prettyPhoto.css"> 
  <script src="js/vendor/custom.modernizr.js"></script>
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
           <link rel="stylesheet" href="css/ie8-hack.css"> 
  <![endif]-->
</head>
<body>
	<!-- Start: Wrapper -->
	<div class="wrapper">
		<!-- Start: Header -->
		 <header id="header">
		 		<div class="row">
		 			<?php include("inc/nav.inc"); ?>
		 		</div>
		 </header>
		 <!-- End: Header -->
		 
		<div class="page-title">
			<div class="row">
				<div class="small-12 large-6 column">
					<h1  class="animated flipInX"><i class="icon-briefcase"></i> Services</h1>
				</div>
				<div class="small-12 large-6 column">
					<ul class="breadcrumbs right">
					  <li><a href="index.php">Home</a></li> 
					  <li class="current"><a href="#">Services</a></li>
					</ul>
				</div>
			</div>
		</div> 
		
		
		
		 <div class="row">
		 		 <!-- Start: Services -->
		 	 	 <section class="small-12 large-8 column">
		 	 	 		<div id="services">
						<div class="title"><h3>Our Services</h3></div>
							<img src="img/CDL%20Testing%20Inc.%20Truck.jpg" alt="" />
							 <hr />
							
								<h2>CDL Test</h2> <p>CDL Testing Inc. offers tests for drivers looking to earn their Class A, Class B, or Class C licenses. If interested in testing with us, contact one of our representatives in either the Delphi or Indianapolis tabs at the top of the page.</p> 
								
								<h2>Test Preparation Class</h3> <p>In addition, the facilities host test preparation classes where students can get a little extra help before they take their exams. Interested in a prep course? See details below.</p>
			
			<h3>Preparation Class Details</h2>						
									<div style="margin-left: 5em;"><ul>
										<li>All prep classes have a minimum length of 1 day and a maximum length of 5 days. No additional prep work will be available beyond the 5 days.</li>
										<li>Tests dates will be scheduled 72 hours (3 days) in advance.</li>
										<li>All testers must have their permit for a total of 14 days before a test date can be scheduled. Test schedules can be made on the 15th day of permit issue if available.</li>
										<li>All tests fees must be paid prior to being scheduled for a test date.</li>
										<li>There will be no refund of test fees if the tester does not cancel the test before 48 hours (2 days) of the scheduled test date.</li>
										</div>
							
						
							
				 		</div>
		 	 	 </section>
		 	 	 <aside class="small-12 large-4 column ">
		 	 	 		<div  class="widget">
		 	 	 			<div class="title"><h3>Testing Locations</h3></div>
		 	 	 			<p>Currently, CDL Testing Inc. hosts tests and prep classes at two locations in Indiana:</p>
							 <ul>
					<li><a href="cdl-testing-indianapolis-indiana.php">Indianapolis</a></li>
					<li><a href="cdl-testing-delphi-indiana.php">Delphi</li>
							 	
							 </ul>
						 </div>
		 	 	 </aside>
		  </div>	 		  
 		  <?php include("inc/footer.inc"); ?>
 	</div>
	<!-- End: Wrapper -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')
		</script>
  <script src="js/foundation.min.js"></script>
  <script src="js/vendor/jquery.prettyPhoto.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript" >
		 /*For photo Gallery*/
			$(document).ready(function() { 
				$(".flex-video iframe").attr({"frameborder":"0", "webkitallowfullscreen":" ","mozallowfullscreen":" ","allowfullscreen":" "})
				 
			});
  </script> 
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
