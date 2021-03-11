# Projeto-Desafio

* Critérios necessários para rodar a aplicação:

1. Ter MySQL instalado no seu dispositivo(ou outro banco de dados)

2. Ter um navegador com suporte a HTML, php e js.

* Como rodar a aplicação

1. Baixar o código.

2. Colocar o diretório raiz (Projeto-Desafio-main) no localhost.

-> No caso de Linux: ~/var/www/html/

-> No caso de Windows: C:/xampp/htdocs/

3. Fazer as configurações necessárias no arquivo do banco (Controle/Conect.php), ou seja, configurar as informações de acordo com as configurações do seu localhost (tipo de banco, usuário, senha,etc). 

Obs: Em caso de outro banco de dados estar sendo utilizado, fazer as configurações necessárias para esse outro banco.

4. Criar o banco de dados no MySQL. O banco está localizado no diretório raiz como 'projeto.sql' e para criá-lo de forma direta no MySQL siga os seguintes passos: 
-> Abra o shell e digite o comando: $ mysql -u root -p(se tiver senha) < diretório do arquivo/arquivo.sql
Ex: mysql -u root < C:/xampp/htdocs/Projeto-Desafio-main/Controle/Banco/projeto.sql

5. Agora que o banco já está criado, a aplicação já está no localhost e o banco já está configurado, agora é só simplesmente abrir a aplicação no localhost 

* Como a aplicação funciona 

A aplicação possui 5(cinco) desafios distintos com niveis de dificuldades diferentes.
Ao rodar a mesma o usuário irá se deparar com a tela inical onde ele pode tanto fazer seu cadastro como seu login.
Em seguida, ao ter finalizado o processo anterior, o mesmo iniciará os desafios onde ao término de cada um será disponibilizado um vídeo coo recompensa.
Ao final de todos os desafios, o usuário terá a opção de visualizar todos os vídeos, recomeçar os desafios do início ou se for o caso, apenas sair.
