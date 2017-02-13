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
@media(max-width:600px){.progressbar-text{font-size:30px}.text{padding-top: 10px !important}	.example-container{width: 50vw} .light{width:20vw !important;height:20vw !important;line-height: 20vw !important;font-size:40px !important}}
@media(max-width:400px){.example-container{width: 60vw} .light{width:30vw !important;height:30vw !important;line-height: 30vw !important;font-size:40px !important}}
#year{color:rgba(255,255,255,0.6)}
.panel{padding-bottom: 30px;background:transparent}
.light{margin:0px auto;color:rgba(255,255,255,0.4);font-size:60px;text-align:center;border:2px solid rgba(255,255,255,0.4);border-radius:25px;width:10vw;height:10vw;line-height: 10vw;
transition:1s all ease-in;-moz-transition:1s all ease-in;-o-transition:1s all ease-in;-ms-transition:1s all ease-in;-webkit-transition:1s all ease-in;}
.light>i{transition:1s all ease-in;-moz-transition:1s all ease-in;-o-transition:1s all ease-in;-ms-transition:1s all ease-in;-webkit-transition:1s all ease-in;}
.light:hover{cursor:pointer;}
.text{text-align: center;padding-top: 20px;font-size:20px;font-weight:100;color:#fff}
.light.active{
}
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
				<div class="row">
					<div class="col-md-2 col-sm-3 col-xs-6 panel"><div class="light ac-control" id="pon"><i class="fa fa-power-off"></i></div> <div class="text">On/Off</div></div>
					<div class="col-md-2 col-sm-3 col-xs-6 panel"><div class="light" id="search"><i class="lnr lnr-magnifier"></i></div> <div class="text">Source</div></div>
					
				</div>
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
$(document).ready(function(){
	var on=0,s=0; 
	$(".custom-nav>li").removeClass("active");
	$(".custom-nav>li").eq(3).addClass("active");
		$(".light").click(function(){
		var id=$(this).attr('id');
		$.ajax
			({
				type: "GET",
				url: "ac.php?temp="+id,
				cache: true,
				success: function(html)
				{		
					if(id=="pon"){
						if(on==0){
							$("#"+id).css('border-Color','#ffc107');
							$("#"+id+">i").css('color','#ffc107');
							on=1;
						}
						else{
							$("#"+id).css('border-Color','rgba(255,255,255,0.4)');
							$("#"+id+">i").css('color','rgba(255,255,255,0.4)');
							on=0;
						}
					}
					if(id=="search"){
							$("#"+id).css('border-Color','#ffc107');
							$("#"+id+">i").css('color','#ffc107');
							setTimeout(
								  function() 
								  {
								    $("#"+id).css('border-Color','rgba(255,255,255,0.4)');
									$("#"+id+">i").css('color','rgba(255,255,255,0.4)');
								  }, 2000);
							
						
					}

													
				} 
			});
	});
})
 </script>
</body>
</html>