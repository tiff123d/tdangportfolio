<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/scripts.php"); ?>
<title>Projects - Tiffany Dang Portfolio</title>
<script type="text/javascript">
$(document).ready(function(){
	$("li#projectstab").addClass("selectedlink");

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

		if ($(window).scrollTop() >= ($(".hero").outerHeight()-$("header").outerHeight())) {
			$("header").addClass("solid");
		} else {
			$("header").removeClass("solid");
		}
	});

	$(".hero").click(function(){
		$("html,body").animate({"scrollTop": $(".hero").next("*").offset().top-$("header").outerHeight()}, 1000, "easeOutExpo");
	});

	var tDelayIncrement = 20;
	$(window).on("updateDelays", function(){
		var tDelay = 0;
		$(".grid .panel:not('.hidden')").each(function(){
			var me = $(this);
			me.css({
				"transition-delay":tDelay+"ms"
			});
			tDelay = tDelay+tDelayIncrement;
		});
	});

	var tDelay = 0;
	$(".grid .panel").each(function(){
		var me = $(this);
		var lic = me.html();
		me.css({
			"transition":"all 0.6s cubic-bezier(0.19, 1, 0.22, 1)"
		});
	});

	$(".grid").puzzleGrid({
		margin: 20,
		columnNumber: 2,
		gridWidth: "1000px"
	});
});
</script>
</head>
<body class="design">
<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/banners.php"); ?>
<header class="alternate"><div id="headercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/navbar.php"); ?>
</div></header>
<div id="bodycontentcontainer" style="padding:0;">

	<div class="hero">
		<table cellspacing=0 cellpadding=0 class="center"><tr><td align="center" valign="middle">
			<div class="bodymargin">
				<div class="title">Our<span class="textBlue">Projects</span></div>
				<div class="subtitle">Created With Passion.</div>
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

	<div class="bodymargin"><div class="cushion">
		<div class="grid">
			<div class="panel">
				<a href="/work/cox">
					<div class="image" style="background-image:url(/images/cox.png)"></div>
				</a>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(/images/tripleTTrio.png)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(/images/youthReach.png)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(/images/southlandGuitars.png)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(/images/gtMall.png)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(/images/stord.png)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(http://placehold.it/580x150)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(http://placehold.it/580x150)"></div>
			</div>
			<div class="panel">
				<div class="image" style="background-image:url(http://placehold.it/580x150)"></div>
			</div>
		</div>
	</div></div>


</div>
<footer><div id="footercontent" class="bodymargin">
	<?php include($_SERVER["DOCUMENT_ROOT"]."/elements/footer.php"); ?>
</div></footer>
</body>
</html>
