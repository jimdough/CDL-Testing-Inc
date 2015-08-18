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
					<h1  class="animated flipInX"><i class=" icon-user"></i> Who We Are</h1>
				</div>
				<div class="small-12 large-6 column">
					<ul class="breadcrumbs right">
					  <li><a href="index.php">Home</a></li> 
					  <li class="current"><a href="#">About Us</a></li>
					</ul>
				</div>
			</div>
		</div>
		 
		  <!-- Start: About Us -->
		 <div class="row">
		 	<section class="small-12 column">
		 		 <div id="about">
						<div class="title"><h3>About Us</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer a , sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
						</p> 
				 </div>
				 <hr />
				 <div id="history">
						<div class="title"><h3>History</h3></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed disectetuer adipiscing elit am nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
						</p> 
				 </div>
		 	</section>
		 		 </div>
		 <!-- End: About Us -->

 		 
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
		 /*For Video */
			$(document).ready(function() { 
				$(".flex-video iframe").attr({"frameborder":"0", "webkitallowfullscreen":" ","mozallowfullscreen":" ","allowfullscreen":" "})
				 
			});
  </script> 
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
