<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
  }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Desafio 3</title>
	<meta charset="utf-8">
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/d3.css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
	var cliques = 0;
	var i = 30;
	var final = 170;
	
	function cuenta(){
		if(cliques == 0){
			document.forms[0].tempo.value= '30 segundos';
			
			loop = setInterval("contagemRegressiva()", 1000);
			
		}
		if(i > 0){
			cliques++;

			document.forms[0].cliques.value=cliques;
			document.forms[0].clique.value=cliques;
			if (cliques == final) {
				window.location.href = "./videos/video3.php"
				alert("Parabens, voce conseguiu!!!");
			}
		}
	}
	function contagemRegressiva(){
	    i--;
	    if(i <= 0){
			clearInterval(loop);
			document.forms[0].tempo.value= 'Tempo esgotado!';
			alert("Seu tempo acabou e você não conseguiu. Tente novamente.");
			window.location.href= "desafio3.php";
		}else{
			document.forms[0].tempo.value= i + ' segundos';
		}
	}
</script>

</head>
<body class="text-center">
<div class="container">
	<div class="frame">
		<div class="form">
		<h1> Desafio 3 <br> Clique no botão 170 vezes em 30 segundos</h1>
		<br>
		<form method="post" name="formulario1"><input name="cliques" type="hidden" value="0" />
			<a id="verm" onclick="cuenta()" style="cursor: pointer;" > Clique aqui </a>
				<br/><br/>

				<label><strong> Quantidade de cliques: </strong></label> 
				<input name="clique" type="text" value="0"/>
				<br/>
				<label> <strong> Tempo: </strong></label> 
				<input name="tempo" type="text" value="0"/>
			</form>
		</div>


</div>
</div>

<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
<?php
  }
?>