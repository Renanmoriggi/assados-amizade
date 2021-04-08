<?php require("conexaobd.php");
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página index
$login= $_POST['login'];
$senha= $_POST['senha']; 
// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$result ="SELECT * FROM cad_login WHERE nome='$login' AND senha='$senha' ";
$resultado = mysqli_query($conexao,$result) or die("<br>Erro ao logar...");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $resultado foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico será igual a 1 linha
encontrda, se não tiver registros identicos seu valor será 0 linha. Dependendo do 
resultado ele redirecionará para a página admin.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows($resultado) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header("location: admin.php");
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  //enviando um get de erro para mostrar a mensagem no index
  header("location: login.php?erro=loginerrado"); }
?>
