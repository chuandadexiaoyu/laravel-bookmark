<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bookmark your favorite site</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/flat-ui.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/grots.css" rel="stylesheet">
	<link href="css/app.css?13062803" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="images/bookmark.ico" />

	<script type="text/javascript" src="assets/js/templates.js?13062804"></script>
	<script type="text/javascript" src="assets/js/script.min.js?13062804"></script>

	<script type="text/javascript">
		@if (Auth::check())
		$(document).ready(function() { App.user = '{{ Auth::user()->id }}'; App.initialize(); });
		@else
		$(document).ready(function() {
			App.initialize();
			@if ($token)
			App.token = '{{ $token }}';
			App.router.navigate("resetpassword", true);
			@endif
		});
		@endif
	</script>
</head>
<body>

<div id="header"></div>

<div id="app"></div>

<div id="footer">
	<a href="http://twitter.com/river">
	<span class="icon-stack icon-3x">
  	<i class="icon-circle icon-3x icon-stack-base"></i>
  	<i class="icon-twitter icon-3x icon-light"></i>
	</span></a>
	<a href="http://facebook.com/yhbyun">
	<span class="icon-stack icon-3x">
  	<i class="icon-circle icon-3x icon-stack-base"></i>
  	<i class="icon-facebook icon-3x icon-light"></i>
	</span></a>
</div>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-42064646-1', 'rivario.com');
	ga('send', 'pageview');

</script>
</body>
</html>