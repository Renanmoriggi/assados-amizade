<?php require("conexaobd.php");
//passando valor do form para as variaveis 
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $nascimento = $_POST['nasc'];
  //mascara para transformar data em formato que o bd salva 0000-00-00
  $nascimento = implode("-",array_reverse(explode("/",$nascimento)));
   //inserindo os dados no banco
  $inserir="INSERT INTO pessoa VALUES(null,'$nome','$sexo','$nascimento')";
   mysqli_query($conexao, $inserir) or die("<br>Erro ao cadastrar");
  echo "<br>Cliente cadastrado com sucesso!";
  echo '<a href="admin.php"><br>Voltar para pagina inicial</a>';
  ?>