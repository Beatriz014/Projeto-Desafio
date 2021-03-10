<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ../login.php");
  }else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Recompensa 5</title>
	<link rel="stylesheet" type="text/css" href="../css/video.css">

</head>
<body>
	<header>
	<div class="row" align="center">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" id="container" style="opacity: 0.9;">

	<div class="col-xl-12 col-sm-4 col-md-8 col-lg-12" id="divVideo" align="center">
		<h1>Parabéns!</h1>
		<div class="embed-responsive embed-responsive-21by9" align="center" id='idVideo'>
		  <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/G3e-8EWdv8c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

		  <a href="../../final.php"><button align="center"> Fim </button></a>
		</div>
	</div>
</div>
	</div>
	</header>


</body>
</html>
<?php
}
?>