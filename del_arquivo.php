<?php require("conexaobd.php");

//DEL ARQUIVO EVENTO
if(isset($_GET['nomearq']))
{
$nome_arq = $_GET['nomearq'];
//if é um arquivo
if(is_file('upload/' . $nome_arq))
{ $deletar = unlink('upload/' . $nome_arq); }
//if deletou o arquivo, vai deletar do banco agora
if($deletar) 
  {
   $delete = " DELETE FROM arquivo WHERE arquivo = '$nome_arq' ";
     $del = mysqli_query($conexao,$delete);
     
     if($del) 
     {  echo "<p style='color:green;'>arquivo excluido com sucesso</p>";
        echo "<a href='admin.php'>Voltar</a>";
     }else{
         die("Erro ao deletar..."); }
  }
}
//DEL ARQUIVO CARDAPIO

if(isset($_GET['nomearq2']))
{
$nome_arq2 = $_GET['nomearq2'];
//if é um arquivo
if(is_file('upload/' . $nome_arq2))
{ $deletar = unlink('upload/' . $nome_arq2); }
//if deletou o arquivo, vai deletar do banco agora
if($deletar) 
  {
   $delete = " DELETE FROM arq_cardapio WHERE arquivo = '$nome_arq2' ";
     $del = mysqli_query($conexao,$delete);
     
     if($del) 
     {  echo "<p style='color:green;'>arquivo excluido com sucesso</p>";
        echo "<a href='admin.php'>Voltar</a>";
     }else{
         die("Erro ao deletar..."); }
  }
}
 ?>
