<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
  }else{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Desafio 2</title>
  <meta charset="utf-8">
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/desa2.css">


</head>
<body>
  <script type="text/javascript">
    function funcao() {
      alert("Parabéns!! Você encontrou o botão vermelho e desbloqueou a recompensa.");
      window.location.href = "./videos/video2.php"
    }
  </script>
  <div class="container">
    <div class="row" align="center" id='linha'>
      <div class="col-sm-12 col-lg-10 col-md-10 col-xl-6" id="divButton" align="center">
        <h1> Desafio 2 - Encontre o botão vermelho.</h1>
  <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <br>
    <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <br>
    <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <br>
    <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <br>
    <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verm" id="verm" style="color: black" onclick="funcao()"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <br>
    <br>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
    <button name="button" value="verd" class="botao"> Botão </button>
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