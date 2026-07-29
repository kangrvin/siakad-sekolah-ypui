<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SMKS YPUI JAKARTA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SMK TERPADU" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="../css/bootstrap.css"> 
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="../css/font-awesome.css"> 
<link rel="stylesheet" href="../css/swipebox.css">
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link rel="stylesheet" href="../css/roma.css"/>
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">

</head>
<body>

<?php include ('../napigasi2.php'); ?>
<div class="clearfix"> </div> 

<div id="Edit_Akun">
	<div class="container">
    <h3 class="w3l-title cl"> Akun Control </h3>
    <div class="container margin-atas">
    <form class="form-group" action="Proses_Input_Akun.php" method="post">
    <table class="table">
    <tr>
    	<td> Username : </td>
   		<td> <input type="text" name="Username"> </td>
    </tr>
    
    <tr>
    	<td> Password : </td>
        <td> <input type="password" name="Password"> </td>
    </tr>
    
    <tr>
    	<td>Level : </td>
        <td><select name="Level">
    			<option value="1" selected> Admin </option>
				<option value="2"> Guru </option>
				<option value="3"> Murid </option>
			</select>
      	</td>
 	</tr>
    </table>
    
    <button class="btn btn-primary"> Simpan </button>
    <a href="akun.php" class="btn btn-primary"> Batal </a>
    </form>
    
    </div>
        
    <div class="clearfix margin-bawah"></div>
    </div>
</div>

<div class="w3layouts_copy_right">
	<div class="container">
		<p>SMKS YPUI JAKARTA </p>
	</div>
</div>
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script> 

<script src="../js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="../js/numscroller-1.0.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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

<script src="../js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
jQuery(function($) {
	$(".swipebox").swipebox();
});
</script>
	<script src="../js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
<script src="../js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
</body>
</html>