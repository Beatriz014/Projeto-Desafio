<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
  }else{
?>
<!DOCTYPE>
<html>
  <head>
    <title> Desafio 5</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/des5.css">
    <script type="text/javascript">
      <!--

      cor = new Array();    
      cor[0] = "#FF0000";   
      cor[1] = "#8aff72";  
      cor[2] = "#0080ff";   
      cor[3] = "#ff5e7a";   
      cor[4] = "#ffa500";   
      cor[5] = "#000000";    

      nivel = 1;       // Nível padrão inicial: fácil 
      Escolher();      // Ao iniciar o jogo, o PC já deve "escolher" em uma combinação
      partidas = 1;    // Número de partida inicial

      limite = new Array(); 
      limite[1] = 10;        
      limite[2] = 12;        
      limite[3] = 14;        


      function Escolher() {
        indice = nivel * 1 + 2;      
        bloco1 = cor[Math.round(Math.random() * indice)];  // Fórmula que calcula a cor de cada bloco
        bloco2 = cor[Math.round(Math.random() * indice)];
        bloco3 = cor[Math.round(Math.random() * indice)];
        bloco4 = cor[Math.round(Math.random() * indice)];
      }

      function Jogar() {
        nivel = document.jogo.nivel.value;   // Atualiza nível: isto evita bug
        erro = 0;                           

        var primeiro = document.getElementsByTagName("select")[4 * nivel - 3].value;   
        var segundo = document.getElementsByTagName("select")[4 * nivel - 2].value;   
        var terceiro = document.getElementsByTagName("select")[4 * nivel - 1].value;  
        var quarto = document.getElementsByTagName("select")[4 * nivel].value;      


        // Validação: se o usuário não escolheu a cor, é alertado sobre o fato:
        if (primeiro == "-") {
          alert("Selecione a cor do primeiro bloco");
          document.getElementsByTagName("select")[4 * nivel - 3].focus();
          return false;
        }
        if (segundo == "-") {
          alert("Selecione a cor do segundo bloco");
          document.getElementsByTagName("select")[4 * nivel - 2].focus();
          return false;
        }
        if (terceiro == "-") {
          alert("Selecione a cor do terceiro bloco");
          document.getElementsByTagName("select")[4 * nivel - 1].focus();
          return false;
        }
        if (quarto == "-") {
          alert("Selecione a cor do quarto bloco");
          document.getElementsByTagName("select")[4 * nivel].focus();
          return false;
        }

        // Escreve sequência do usuário:
        document.getElementById("status").innerHTML += "<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + primeiro + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + segundo + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + terceiro + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + quarto + "'></button>&nbsp;&nbsp;&nbsp;&nbsp;";

        // Calcula número de erros pela comparação entre os blocos do usuário e do PC:
        if (primeiro != bloco1) {
          erro++;                 
        }
        if (segundo != bloco2) {
          erro++;
        }
        if (terceiro != bloco3) {
          erro++;
        }
        if (quarto != bloco4) {
          erro++;
        }

        chances = limite[nivel] - partidas;    // Chances que ainda restam para o fim do jogo

        // Calcular número de erros do jogador por partida:

        if (erro == 0 && partidas != 1) {
          document.getElementById("status").innerHTML += "<i>ACERTOU em " + partidas + " partidas!</i>";
          HabilitarBotoes(false);
          alert("Parabéns! Você conseguiu!")
          window.location.href = "./videos/video5.php";
        }else if (erro == 0 && partidas == 1) {          
          document.getElementById("status").innerHTML += "<i>ACERTOU em apenas 1 partida!\nIsso é pura sorte!</i>";
          HabilitarBotoes(false);
          alert("Parabéns! Continue assim!")
          window.location.href = "./videos/video5.php";
        }else if (erro == 1) {
          document.getElementById("status").innerHTML += "1 erro. Chances: " + chances + "<br /><br />";
        }else {
          document.getElementById("status").innerHTML += erro + " erros. Chances: " + chances + "<br /><br />";
        }

        Rolar();  // Mostrar o último resultado

        if (partidas == limite[nivel] && erro != 0) {   
          alert("Suas tentativas se esgotaram. Fim de jogo!");
          return SequenciaCorreta();
        }
        partidas++;
      }

      function Desistir() {
        confirma = window.confirm("Tem certeza?");
        if (confirma) {
          SequenciaCorreta();   // Escreve a combinação secreta, se o usuário confirmar a desistência
        }
        else {
          return false;
        }
      }

      function NovaPartida() {
        HabilitarBotoes(true);                              // Reabilita os botões OK e Desistir
        partidas = 0;                                       // Zera número de partidas jogadas anteriormente
        Escolher();                                           // Calcula nova combinação
        Jogar();                                            // Inicia nova partida
        document.getElementById("status").innerHTML = "";   // Apaga o campo com o jogo anterior
      }

      function ConfirmarNovaPartida() {
        confirma = window.confirm("Começar novo jogo?");
        if (confirma) {                                   
          NovaPartida(); 
        }
        else {
          return false;
        }      
      }

      function SequenciaCorreta() {      // Escreve a resposta certa em caso de desistência ou game over
        document.getElementById("status").innerHTML += "<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + bloco1 + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + bloco2 + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + bloco3 + "'></button>&nbsp;&nbsp;<button disabled='disabled' style='border: outset 4px #ABABAB; width: 20px; height: 20px; background-color: " + bloco4 + "'></button>&nbsp;&nbsp;&nbsp;&nbsp;<i>Esta era a sequência correta</i>";        
        HabilitarBotoes(false);        // Desabilita os botões OK e Desistir, pois o jogo acabou
        Rolar();
      }

      function MudarNivel() {
        nivel = document.jogo.nivel.value;     

        if (nivel == 1) {
          document.getElementById("facil").style.display = "inline"; 
          document.getElementById("medio").style.display = "none";
          document.getElementById("dificil").style.display = "none";
        }
        else if (nivel == 2) {
          document.getElementById("facil").style.display = "none";
          document.getElementById("medio").style.display = "inline";
          document.getElementById("dificil").style.display = "none";
        }
        else {
          document.getElementById("facil").style.display = "none";
          document.getElementById("medio").style.display = "none";
          document.getElementById("dificil").style.display = "inline";
        }

        n = new Array();   // Níveis de dificuldade disponíveis
        n[1] = "fácil";
        n[2] = "médio";
        n[3] = "difícil";

        alert("O nível foi alterado para " + n[nivel]);
        NovaPartida();     // Como o nível foi alterado, inicia nova partida
        partidas = 1;   
      }

      function HabilitarBotoes(r) {
        if (r) {
          document.jogo.ok.disabled = false;              // Reabilita botão OK, pois o jogo já acabou
          document.jogo.desistir.disabled = false;        // Reabilita botão Desistir, pois o jogo já acabou 
        }
        else {
          document.jogo.ok.disabled = "disabled";         // Desabilita botão OK, pois o jogo já acabou
          document.jogo.desistir.disabled = "disabled";   // Desabilita botão Desistir, pois o jogo já acabou
        }
      }

      function Rolar() {
        document.getElementById("status").scrollTop = 1000000;
      }

      //-->
    </script>
  </head>

  <body onload="document.getElementsByTagName('select')[0].value = '1'" class="text-center">
    <div class="container" align="center">
      <div class="divJogo">
    <span class="titulo">Desafio 5 - Acerte a sequência de cores</span><br>
    <p> Obs: Mesmo que você desista, só obterá a recompensa após descobrir a sequência.</p>
    <div id="mensagem">  <!-- Barra de mensagens -->
        <marquee scrollamount="3" id='idMens'>
          O objetivo deste jogo é encontrar a combinação secreta de cores. No nível fácil, escolha uma entre quatro cores para cada bloco, sendo que você tem dez chances para acertar. No nível médio, são cinco cores disponíveis e doze chances. Já no nível difícil, são seis cores e quatorze chances. Lembrando que uma mesma cor pode estar presente em mais de um bloco. A quantidade de erros por jogada é mostrada ao lado dos blocos. Boa sorte!
        </marquee>
      </div>
    

    <form name="jogo" action="#">
      <span class="vermelho" id="nivel">Nível de dificuldade:</span>
      <select name="nivel" onchange="MudarNivel()">
        <option value="1">Fácil</option>
        <option value="2">Médio</option>
        <option value="3">Difícil</option>
      </select><br /><br />
       <!-- Bloco de opções do nível Fácil -->
      <span id="facil"> 
        <select name="primeiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>        
        </select>&nbsp;

        <select name="segundo">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
        </select>&nbsp;

        <select name="terceiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
        </select>&nbsp;

        <select name="quarto">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
        </select>
      </span>
      <!-- Bloco de opções do nível Médio -->
      <span id="medio" style="display: none">  
        <select name="primeiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
        </select>&nbsp;

        <select name="segundo">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
        </select>&nbsp;

        <select name="terceiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
        </select>&nbsp;

        <select name="quarto">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
        </select>
      </span>
      <!-- Bloco de opções do nível Difícil -->
      <span id="dificil" style="display: none">  
        <select name="primeiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
          <option value="#000000" class="preto">Preto</option>
        </select>&nbsp;

        <select name="segundo">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
          <option value="#000000" class="preto">Preto</option>
        </select>&nbsp;

        <select name="terceiro">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" style="color: #ffa500">Laranja</option>
          <option value="#000000" class="preto">Preto</option>
        </select>&nbsp;

        <select name="quarto">
          <option value="-">--
          <option value="#FF0000" class="vermelho">Vermelho</option>
          <option value="#8aff72" class="verde">Verde</option>
          <option value="#0080ff" class="azul">Azul</option>
          <option value="#ff5e7a" class="rosa">Rosa</option>
          <option value="#ffa500" class="laranja">Laranja</option>
          <option value="#000000" class="preto">Preto</option>
        </select>
      </span>&nbsp;&nbsp;

      <input type="button" name="ok" value="OK" onclick="Jogar()" title="Jogar!" onmouseover="style.color = '#000000'" onmouseout="style.color = ''" />&nbsp;&nbsp;
      <input type="button" name="desistir" value="Desistir" onclick="Desistir()" title="Desistir e ver resposta certa" />&nbsp;&nbsp;
      <input type="button" value="Jogar novamente" onclick="ConfirmarNovaPartida()" title="Iniciar nova partida" />&nbsp;&nbsp;<br /><br />

      <div id="status" onmouseover="style.borderColor = '#165221'" onmouseout="style.borderColor = '#122561'"></div><br />
      
    </form>
  </div>
</div>
  </body>
</html>
<?php
  }
?>
