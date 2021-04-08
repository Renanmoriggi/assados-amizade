

<?php require("conexaobd.php");
  if(isset($_POST["Editar"]))//verifica se a variavel nome method post existe
  { //iseet ve se a var existe,dps do ? True, dps do : False
   $id=(isset($_POST['idpessoa'])? $_POST['idpessoa']: "erro");
   $nome=(isset($_POST['nomepessoa'])? $_POST['nomepessoa']: "erroo");
   $sexo=(isset($_POST['sexopessoa'])? $_POST['sexopessoa']: "erro");
   $nasc=(isset($_POST['nascpessoa'])? $_POST['nascpessoa']: "erro"); 
  }
    $id= $_GET['id'];
    $edita=" SELECT * FROM pessoa WHERE id =$id";//ler tudo do id que vier pela url
    $edit_usuario= mysqli_query($conexao,$edita) ;
    $row_usuario= mysqli_fetch_assoc($edit_usuario);//variavel row_usuairo vai fazer a leitura da linha;
?>
<!--entra na condição Se o valor que vier no post for != de editar-->
<?php if(!isset($_POST["Editar"])) {?>
<html>
 <form action= "#" method="POST">
 <h2>Alterar dados...</h2>
 <label>Nome:</label>
   <input type=hidden name=idpessoa value= <?php $id ?> > 
   <input type=text name=nomepessoa value= "<?php echo $row_usuario['nome']; ?>" > <br>
 <label>Sexo [M]ou[F]:</label>
   <input type=text name=sexopessoa value= "<?php echo  $row_usuario['sexo']; ?>"><br>
 <label>Nascimento:</label> 
   <input type=date name=nascpessoa value= "<?php echo  $row_usuario['nascimento']; ?>"> <br>
   <input type="submit" name="Editar" value="Editar">
</form>
</html>
<?php }?>

<?php //Se a var nome existir entra na condição
 if(isset($nome)) 
 { $editando= "UPDATE pessoa SET nome='$nome', sexo='$sexo',nascimento='$nasc' WHERE id = '$id' ";
   $editado=mysqli_query($conexao,$editando); }
   if(isset($editado))
    { echo "<br>Cliente alterado";
      echo '<a href="admin.php"><br>Voltar para pagina inicial</a>'; }
?>