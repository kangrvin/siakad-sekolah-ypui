<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SMKS YPUI JAKARTA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholarly web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/bootstrap.css"> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />  
<link rel="stylesheet" href="css/font-awesome.css"> 
<link rel="stylesheet" href="css/swipebox.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">

<style>
.container5 {
	max-width : 1200px;
	margin : auto ;
	background : #fff;
	overflow : auto;
}
.gallery {
margin : 5px;
margin-top : 30px;
margin-bottom : 30px;
border : 1px solid #ccc;
float : left;
width : 390px;
}
.gallery img {
width : 100%;
height : 200px;
}

.desc h3 {
padding : 15px;
text-align : center ;
}

.judul h2 {
margin-top : 20px;
}
.warna-teks {
margin-left:5px;
color : #000000;
}

</style>
</head>
<body>

<?php include ('napigasi.php'); ?> 

<div class = "container5">
<div class ="judul">
<center><h2>FASILITAS</h2></center>
</div>
	<div class="gallery">
		<img src="images/dashboard/lab.jpg"  >
		<div class ="desc">
				<h3>Lab Komputer</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/dashboard/ruangpodcast.jpg" >
		<div class ="desc">
				<h3>Ruang Podcast</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/ruang perpustakaan.jpg">
		<div class ="desc">
				<h3>Perpustakaan</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/dashboard/ruangkelas.jpg" >
		<div class ="desc">
				<h3>Ruang Kelas</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/dashboard/musholla.jpg" >
		<div class ="desc">
				<h3>Musholla</h3>
			</div>
		</div>
		<div class="gallery">
		<img src="images/uks.jpg">
		<div class ="desc">
				<h3>Ruang UKS</h3>
			</div>
		</div>
		
</div>





<div class="w3layouts_copy_right">
	<div class="container">
		<p>SMKS YPUI JAKARTA </p>
	</div>
</div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>  




<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>

	<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>

<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>

</body>
</html>
