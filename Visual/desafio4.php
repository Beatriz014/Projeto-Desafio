<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
  }else{
?>

<!DOCTYPE html>
<html>
<head>
  <title>Desafio 4</title>
  <meta charset="utf-8">
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style type="text/css">
    body{
    margin: 0;
    padding: 5;
    background-color: #096290;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 657px;

}
  </style>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body>


    <a href="#" id="meuElemento" onclick="funcao()"> </a>

    <script>
      var res = Math.floor(Math.random() * (15 + 1));
      function ir(){
        alert("Parabéns! Você desbloqueou a recompensa");
        window.location.href = "./videos/video1.php"; // Função de redirecionamento
      }
      function funcao() { //Função que fica responsável por fazer com que a mensagem apareça
        Swal.mixin({
          input: 'text',
          confirmButtonText: 'Enviar',
          progressSteps: ['4']
        }).queue([
        {
          title: 'Acerte o numero aleatorizado entre 0 e 15',
        },
        ]).then((result) => {
          if (result.value == res) { // Condição que vai definir o valor a qual o usuário tem que descobrir
            alert("Parabéns, você acertou!!!!");
            window.location.href = "./videos/video4.php";
          }else{ // Se ele não responder corretamente irá aparecer uma caixa de mensagem
           alert("Valor incorreto, a resposta era: " + res);
           window.location.href = "desafio4.php";
         }
       })
      }
      document.getElementById("meuElemento").click(); //Responsavel que o código seja executado assim que entra na tela
    </script>
        



<!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
<?php
  }
?>