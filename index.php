<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?
		include ('sections/head_scripts.php');
		?>
	</head>

	<body>

        <? include('sections/facebook_login.php'); ?>

	    <header class="header content-block clearfix" >
	        <div class="wrapper">
	            <a id="show-nav" class="button icon-menu show-nav" href="#"><span>Menu</span></a>
	            <nav id="nav" class="nav" role="navigation">
	                <? include('sections/header.php'); ?>
	            </nav> <!-- end of menu -->
	        </div>
	    </header> <!-- end of menu wrapper -->

	    <main class="content clearfix" role="main">
	        <div class="content-block">
	            <div class="wrapper clearfix">
	                <div class="content-main">
						<?
						if (strlen($thisIncludeFile) > 0) {
						  include('sections/'.$thisIncludeFile.'.php');
						}
						else {
							//default homepage content
							include('sections/homepage_posts.php');
						}
						?>
	                </div><!-- end of main content -->

	                <div class="sidebar">
	                	<? include('sections/sidebar.php'); ?>
	                </div><!-- end of sidebar -->
				</div>
	        </div>
	    </main>

	    <footer class="footer content-block" role="contentinfo">
	        <div class="wrapper">
	            <? include('sections/footer.php'); ?>
	        </div>
	    </footer><!-- end of footer -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
		<script src="js/functionality.min.js"></script>

	</body>
</html>





