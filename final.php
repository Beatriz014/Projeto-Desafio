<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ./Visual/login.php");
  }else{
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Projeto</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./Visual/css/m.css" />
		<link rel="icon" sizes="192x192" href="./Visual/imgs/favicon.png"/>
		<link rel="shortcut icon" href="images/favicon.png"/>
		<noscript><link rel="stylesheet" href="./Visual/css/noscript.css" /></noscript>
	</head>
	<script type="text/javascript">
		function recomeçar() {
        confirma = window.confirm("Tem certeza?");
        if (confirma) {
          window.location.href = "./Visual/desafio1.php";
        }
        else {
          return false;
        }
      }
	</script>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
					<div class="teste">
						<div class="content text-center">
							<div class="inner" align="center">

								<img src="./Visual/imgs/game.svg">
						
								<h1>Parabéns por ter chegado ao final!</h1>
								<p><strong>Sua determinação e coragem o trouxe até aqui. Parabéns cavaleiro(a), por ter concluído todos os nossos desafios, mas ,infelizmente, sua jornada termina aqui.</strong></p>
							</div>
						</div>
						</div>
						<nav>
							<ul>
								<li><a href="#recompensas">Recompensas</a></li>
								<li><a onclick="recomeçar()">Recomeçar</a></li>
								<li><a href="./Controle/sair.php">Sair</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<!-- Recompensas -->
							<article id="recompensas">
								<h2 class="major">Recompensas</h2>
								<nav>
							<ul>
								<li><a href="./Visual/videos/r1.php">Vídeo 1</a></li>
								<li><a href="./Visual/videos/r2.php">Vídeo 2</a></li>
								<li><a href="./Visual/videos/r3.php">Vídeo 3</a></li>
								<li><a href="./Visual/videos/r4.php">Vídeo 4</a></li>
								<li><a href="./Visual/videos/r5.php">Vídeo 5</a></li>
							</ul>
						</nav>
							</article>

							
					</div>

				
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="./Visual/js/jquery.min.js"></script>
			<script src="./Visual/js/browser.min.js"></script>
			<script src="./Visual/js/breakpoints.min.js"></script>
			<script src="./Visual/js/util.js"></script>
			<script src="./Visual/js/main.js"></script>

	</body>
</html>

<?php
  }
?>