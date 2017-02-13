<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title> Smart Control </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="ripple/ripple.css" rel="stylesheet" />
<link rel="stylesheet" href="icon/flaticon.css" />
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='roboto/font.css' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

<style>
body{overflow:hidden}
.progressbar-text{font-size:50px;text-align:center;font-weight:100}
.example-container{width: 40vw}
@media(max-width:600px){.progressbar-text{font-size:30px}	.example-container{width: 50vw}}
@media(max-width:400px){.example-container{width: 60vw}}
#year{color:rgba(255,255,255,0.6)}
</style>
</head> 
   
 <body class="sticky-header left-side-collapsed"  >
    <section>
    <?php include('header.php'); ?>
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<?php include('head.php') ?>
			<div id="page-wrapper">
				<div class="example-container" id="example-clock-container" style="position: relative;margin: 0px auto" ></div>	
			</div>
			 <!--body wrapper end-->
		</div>
      <!-- main content end-->
   </section> 
<script src="js/jquery.nicescroll.js"></script>
<script src="js/progress.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.backstretch.min.js"></script>
<script src="ripple/ripple.js"></script>
 <script>
$.backstretch("blur.jpg");
var element = document.getElementById('example-clock-container');

var seconds = new ProgressBar.Circle(element, {
    duration: 200,
    color: "rgba(255,255,255,0.6)",
    trailWidth: 1,
    strokeWidth: 1,
    trailColor: "rgba(255,255,255,0.2)",
    
});

setInterval(function() {
	var d=new Date();
	var n=d.getDate();
	var monthNames = ["Jan", "Feb", "March", "April", "May", "June","July", "Aug", "Sept", "Oct", "Nov", "Dec"];
	var month=monthNames[d.getMonth()];
	var year=d.getFullYear();
	var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	var day = days[ d.getDay() ];
	$("#date").text(month+" "+n+", "+year);
	$("#day").text(day);
    var minutes = new Date().getMinutes();
    var hours=new Date().getHours();
    var ampm = hours >= 12 ? 'pm' : 'am';
	  hours = hours % 12;
	  hours = hours ? hours : 12; 
	  minutes = minutes < 10 ? '0'+minutes : minutes;
    seconds.animate(minutes / 60, function() {
        seconds.setText(hours+':'+minutes+' '+ampm);
    });
}, 1000);
$.ripple(".main-content", {
    debug: false, // Turn Ripple.js logging on/off
    on: 'mousedown', // The event to trigger a ripple effect

    opacity: 0.4, // The opacity of the ripple
    color: "#fff", // Set the background color. If set to "auto", it will use the text color
    multi: false, // Allow multiple ripples per element

    duration: 1.0, // The duration of the ripple

    // Filter function for modifying the speed of the ripple
    rate: function(pxPerSecond) {
        return pxPerSecond;
    },

    easing: 'linear' // The CSS3 easing function of the ripple
});
$(document).ready(function(){
	$(".custom-nav>li").removeClass("active");
	$(".custom-nav>li").eq(0).addClass("active");
})
 </script>
</body>
</html>