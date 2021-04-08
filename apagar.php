<?php require("conexaobd.php");
$id = $_GET['id']; ?>
 
<?php if(!isset($_POST["enviar"])) {?>
 <form action= "#" method="POST">
   <h2>DESEJA EXCLUIR?</h2>
    <input type=hidden name=id value = <?php $id ?>/>
    SIM: <input type="radio" name="sim" />
    <input type="submit" name="enviar" value="enviar"/> <br><br>
    OU <a href="exibi_id.php"> VOLTE PARA PAGINA ANTERIOR</a>
 </form>
<?php } 
else {
   $delete = "DELETE FROM pessoa WHERE id = $id";
     $del = mysqli_query($conexao,$delete);
     
     if(mysqli_affected_rows($conexao)){
        echo "<p style='color:green;'>Usuário excluido com sucesso</p>";
        echo "<a href='admin.php'><br>Voltar para pagina inicial</a>";
     }else{
         die("Erro ao conectar..."); }
 }?>
