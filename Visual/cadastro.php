

<?php
echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
   <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' type='text/css' href='./css/cadastro.css'>
    <link rel='stylesheet' type='text/css' href='./bootstrap/compiler/bootstrap.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title> Cadastro </title><link  rel='shortcut icon' href='./imgs/cadastro.svg'  type='image/x-icon'>


  </head>
 <body style='background-color: #096290' class='text-center'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12 col-md-12 col-lg-12'>
        <nav class='navbar navbar-teste navbar-static-top'>
  
    <div class='col-sm-12' id='menu' >
      <div class='col-sm'>
     
         <h1 id='texto'> Cadastro </h1>

  </div>
</div>
</nav>
</div>
  <div class='loginbox'>

      <form class='Login' method='post' action='../Controle/cad.php'>
        <p> Usuário</p>
        <input type='text' name='user' placeholder='Digite o seu usuário' Required>
        <p>Email:</p>
        <input type='email' name='email' placeholder='Digite o seu email:' Required>
        <p> Sexo: </p>
        <label> Feminino: </label><input type='radio' name='sexo' class='col-sm-2' value='F' Required>
        <label> Masculino: </label><input type='radio' name='sexo' class='col-sm-2' value='M' Required>
        <p>Senha</p>
        <input type='Password' name='senha' placeholder='Insira sua senha' Required>
        
        <input type='submit' name='cadastrar' value='Cadastrar'><br>
        
        
  </form>
    <a href='login.php' id='to'><button>Já tem uma conta?</button></a>
    <a href='../Index.html' id='to'><button>Voltar ao Início </button></a>
  </div>

</div>
</div>



</body>
</html>"
?>