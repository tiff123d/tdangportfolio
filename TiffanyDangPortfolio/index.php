<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/scripts.php"); ?>
<title>Home - Tiffany Dang Portfolio</title>
<script type="text/javascript">
$(document).ready(function(){
	$("li#hometab").addClass("selectedlink");

	$(window).on("scroll resize", function(){
		var scrollTop = $(window).scrollTop();
		var heroHeight = $(".hero").outerHeight();
		var headerHeight = $("header").outerHeight();
		var opacityMath = 1-((scrollTop/(heroHeight-headerHeight))*1.3);
		$(".hero .bodymargin").css({
			"opacity": Math.min(Math.max(opacityMath, 0), 1),
			"transform": "translateY("+(scrollTop/2)+"px)"
		});

		$(".hero").css({
			"background-position-y": ((scrollTop/4)*-1)
		});

		if ($(window).scrollTop() >= ($(".hero").outerHeight()-$("header").outerHeight()-40)) {
			$("header").addClass("solid");
		} else {
			$("header").removeClass("solid");
		}
	});

	$(".hero").click(function(){
		$("html,body").animate({"scrollTop": $(".hero").next("*").offset().top-$("header").outerHeight()}, 1000, "easeOutExpo");
	});
});
</script>
</head>
<body class="index">
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/banners.php"); ?>
<header class="alternate"><div id="headercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/navbar.php"); ?>
</div></header>
<div id="bodycontentcontainer" style="padding:0;">

	<div class="hero">
		<table cellspacing=0 cellpadding=0 class="center"><tr><td align="center" valign="middle">
			<div class="bodymargin">
				<div class="title"><span class="textBlue">Tiffany</span>Dang</div>
				<div class="subtitle">Graphic Designer. Web Developer. Musician. <br> <br> <br> <br> <br> Apologies, but this website is still currently under development!<br>Final website coming soon!</div>
			</div>
		</td></tr></table>
		<div class="overlay"></div>
		<div class="bigTriangleShadowPositioner">
			<div class="bigTriangleShadowContainer">
				<svg class="bigTriangleShadow" width="100%" height="75" preserveAspectRatio="none" viewBox="0 0 1920 75">
					<polygon fill="#FFFFFF" points="960,75 0,75 0,0 "/>
					<polygon fill="#FFFFFF" points="1920,75 960,75 1920,0 "/>
				</svg>
			</div>
		</div>
	</div>

	<div class="bodymargin"><div class="cushion">
		<h2>Imagine. Innovate. Inspire.</h2>
		<div class="cssTable aboutSteps"><div class="cssTableRow">
			<div class="cssTableCell">
				<p>My passion is inventing creative ways to innovate the visual and user experience through graphic design, web development, and personal draw. </p>

				<p>Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. </p>
			</div>
			<div class="cssTableCell steps">
				<div class="step">
					<div class="title">
						<h3>
							<div class="stepNumber">1</div>
							Always Created With Passion.
						</h3>
					</div>
					<p>Design is my major, my hobby, and has become a part of my daily life.</p>
				</div>
			</div>
		</div></div>



</div>
<footer><div id="footercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/footer.php"); ?>
</div></footer>
</body>
</html>
