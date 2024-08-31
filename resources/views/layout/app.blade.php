<!-- <h1>Welcome to My Portfolio</h1>
<a href="{{ route('work.experiences') }}">Work Experiences</a>
<a href="{{ route('projects') }}">Projects</a> -->

<!DOCTYPE html><html lang="en"><head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mahadi Hasan | Developer from Bangladesh</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="MS.LOCATE" content="EN-US">
<meta name="category" content="home page">
<meta name="language" content="English">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="Classification" content="internet">
<meta name="robots" content="All, Index, Follow">
<meta name="revisit-after" content="3 Days">
<meta http-equiv="content-language" content="en">
<meta name="Distribution" content="Global">
<meta name="Rating" content="General">
<meta name="googlebot" content="index, follow">


<!-- Bootstrap -->
<link rel="stylesheet" href={{asset("assets/css/bootstrap.css")}}>
<!-- Icon Fonts -->
<link rel="stylesheet" href={{asset("assets/css/font-awesome.css")}}>
<link rel="stylesheet" href={{asset("assets/css/simple-line-icons.css")}}>
<!-- Flexslider -->
<link rel="stylesheet" href={{asset("assets/css/flexslider.css")}}>
<!-- Automatic Text Rotator -->
<link rel="stylesheet" href={{asset("assets/css/animate.css")}}>
<!-- Animations -->
<link rel="stylesheet" href={{asset("assets/css/animations.css")}}>
<!-- Venobox -->
<link rel="stylesheet" href={{asset("assets/css/venobox.css")}}>
<!-- Theme -->
<link rel="stylesheet" href={{asset("assets/css/style.css")}}>
<link rel="stylesheet" href={{asset("assets/css/slide-nav.css")}}>
<link rel="stylesheet" href={{asset("assets/css/responsive.css")}}>
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">
<link rel="shortcut icon" href={{asset("assets/images/riseofaryan-favicon.png")}}>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZBHVHT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header class="header">
	<a id="trigger-overlay" class="nav_slide_button nav-toggle" href="javascript:void(0)"><span></span></a>
	<div class="overlay-nav overlay-boxify">
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="about">About</a></li>
				<li><a href="works">Works</a></li>
				<li><a href="contact">Free Quote</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</nav>
	</div>	<!-- /.navigation -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="riseofaryan">
					<a href="/"><img src={{asset("assets/images/riseofaryan-logo-white.png")}} alt="Web Designer From Bangladesh, Web Designer Bangladesh, Bangladesh Web Designer, CSS Developer From Bangladesh, Web Design Bangladesh"></a>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 hidden-xs">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#intro" class="page-scroll ripplelink">Home</a></li>
						<li><a href="#about" class="page-scroll ripplelink">About</a></li>
						<li><a href="#expertise" class="page-scroll ripplelink">Expertise</a></li>
						<li><a href="#works" class="page-scroll ripplelink">Works</a></li>
						<li><a href="#testimonials" class="page-scroll ripplelink">Testimonials</a></li>
						<li><a href="#quote" class="page-scroll ripplelink">Quote</a></li>
						<li><a href="#getintouch" class="page-scroll ripplelink">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>	<!-- /.header -->

@yield('content')


<footer id="footer" class="footer section bg-gray center">
	<div class="container animatedParent animateOnce">
		<ul class="social-flat icon-effect-1 animated fadeInLeft slow">
			<li><a href="https://www.linkedin.com/in/mtwanju/" target="_blank" class="linkedin hi-icon"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://stackoverflow.com/users/5362270/aryan-twanju" target="_blank" class="stackoverflow hi-icon"><i class="fa fa-stack-overflow"></i></a></li>
			<li><a href="https://dribbble.com/aryan-t" target="_blank" class="dribbble hi-icon"><i class="fa fa-dribbble"></i></a></li>
			<li><a href="https://www.facebook.com/riseofaryan" target="_blank" class="facebook hi-icon"><i class="fa fa-facebook"></i></a></li>
			<li><a href="http://www.twitter.com/riseofaryan" target="_blank" class="twitter hi-icon"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://plus.google.com/+AryanTwanju" target="_blank" class="google-plus hi-icon"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="https://www.pinterest.com/aryantwanju/" target="_blank" class="pinterest hi-icon"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="http://instagram.com/aryan.t" target="_blank" class="instagram hi-icon"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://500px.com/aryanphotography" target="_blank" class="px500 hi-icon"><i class="fa fa-500px"></i></a></li>
		</ul>
		<p class="copyright animated fadeInRight slow">2024 © <a href="/">riseofaryan</a>. All Rights Reserved.</p>
	</div>
</footer>
<!-- /#footer -->


<script type="text/javascript" src={{asset("assets/js/jquery.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/js/bootstrap.min.js")}}></script>

<!-- Custom jQuery -->
<script type="text/javascript" src={{asset("assets/js/custom.js")}}></script>

<!-- jQuery for Automatic Text Rotator -->
<script type="text/javascript" src={{asset("assets/js/jquery.cycleText.js")}}></script>
<script type="text/javascript">
$(function () {
	$('.rotateme').cycleText();
});
</script>
<!-- jQuery for Scrolling Nav -->
<script type="text/javascript" src={{asset("assets/js/jquery.easing.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/js/scrolling-nav.js")}}></script>
<!-- jQuery for MixItUp -->
<script type="text/javascript" src={{asset("assets/js/jquery.mixitup.js")}}></script>
<script type="text/javascript">
$(function(){
	$('#mix-container').mixItUp();  
});
</script>
<!-- jQuery for FlexSlider -->
<script type="text/javascript" src={{asset("assets/js/jquery.flexslider.js")}}></script>
<script type="text/javascript">
$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false,
		start: function(slider){
			$('body').removeClass('loading');
		}
	});
});
</script>
<!-- jQuery for CounterUp -->
<script type="text/javascript" src={{asset("assets/js/jquery.counterup.min.js")}}></script>
<script type="text/javascript" src={{asset("assets/js/waypoints.min.js")}}></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.counter').counterUp({
			delay: 5,
			time: 2000
		});
	});
</script>
<!-- jQuery for AnimateIt -->
<script type="text/javascript" src={{asset("assets/js/css3-animate-it.js")}}></script>
<!-- jQuery for Venobox -->
<script type="text/javascript" src={{asset("assets/js/venobox.js")}}></script>
<script type="text/javascript">
$(document).ready(function(){
	/* default settings */
	$('.venobox').venobox({
		border: '10px',             // default: '0'
		bgcolor: 'rgba(255, 255, 255, 0.1)',         // default: '#fff'
		titleattr: 'data-title',    // default: 'title'
		numeratio: false,            // default: false
		infinigall: true            // default: false
	});

	/* auto-open #firstlink on page load */
	$("#firstlink").venobox().trigger('click');
});
</script>

</body>
</html>
