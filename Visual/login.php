<?php
echo"<!DOCTYPE html>
<html lang='pt-br'>
<head>
   <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' type='text/css' href='./css/logar.css'>
    <link rel='stylesheet' type='text/css' href='../bootstrap/css/bootstrap.css'>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js' > </script > 
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title> Login </title><link  rel='shortcut icon'  href='./imgs/login.svg'  type='image/x-icon' >
    <script type='text/javascript'>
      function validar(){
        var user = login.user.value;
        var senha = login.senha.value;
        if(user == ''){
        swal({
          title: 'Error',
          text: 'Campo usuário em branco!',
          icon: 'error',
          button: 'Ok',
        });
          login.user.focus();
          return false;
        }else{
          if(senha == ''){
          swal({
            title: 'Error',
            text: 'Campo senha em branco!',
            icon: 'error',
            button: 'Ok',
        });
            login.senha.focus();
            return false;
          }
        }
      }
    </script> 
</head>
<body style='background-image: url(../imagens/12.jpeg); background-repeat: no-repeat;' class='col-lg-8 col-sm-8 col-md-8 col-xs-8 '>

  <div class='container'>
    <div class='row'>
      <div class='col-sm-12 col-md-12 col-lg-12'>
        <nav class='navbar navbar-teste navbar-static-top'>
  
    <div class='col-sm-12' id='menu' >
      <div class='col-sm'>
     
         <h1 id='texto'> Login</h1>

  </div>
</div>
</nav>
</div>
  <div class='loginbox'>

      <form class='Login' name='login' action='../Controle/loga.php' method='post'>
        <p> Usuário</p>
     <input type='text' name='user' id='user_login' placeholder='Entre no seu usuário' >
      
        <p>Senha</p>
  
        <input type='Password' name='senha' id='senha_login' placeholder='Insira sua senha'>
       
        <p id='btnenvia'>
         <input type='submit' name='login' onclick='return validar()'  value='Fazer login'>
         </p><br>
  </form>
    <a href='Cadastro.php' id='to'><button>Não tem uma conta? </button></a>
    <a href='../Index.html' id='to'><button>Voltar ao Início </button></a>
  </div>






</div>
</div>



</body>

</html>"
?>
