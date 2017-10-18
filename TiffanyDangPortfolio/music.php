<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/scripts.php"); ?>
<title>About - Tiffany Dang Portfolio</title>
<script type="text/javascript">
$(document).ready(function(){
	$("li#musictab").addClass("selectedlink");
});
</script>
</head>
<body class="music">
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/banners.php"); ?>
<header class="alternate"><div id="headercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/navbar.php"); ?>
</div></header>
<div id="bodycontentcontainer" style="padding:0;">

	<div class="hero">
		<table cellspacing=0 cellpadding=0 class="center"><tr><td align="center" valign="middle">
			<div class="bodymargin">
				<div class="title">Our<span class="textBlue">Music</span></div>
				<div id="button"><a href="www.triplettrio.com">Created With Passion.</a></div>
			</div>
		</td></tr></table>
		<div class="overlay"></div>
		<div class="bigTriangleShadowPositioner">
			<div class="bigTriangleShadowContainer">
				<svg class="bigTriangleShadow" width="100%" height="75" preserveAspectRatio="xMaxYMax meet" viewBox="0 0 1920 75">
					<polygon fill="#FFFFFF" points="960,75 0,75 0,0 "/>
					<polygon fill="#FFFFFF" points="1920,75 960,75 1920,0 "/>
				</svg>
			</div>
		</div>
	</div>


</div>
<footer><div id="footercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/footer.php"); ?>
</div></footer>
</body>
</html>
