<!-- Criando tabela e exibindo dados do BD-->
<table border='1'>
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>SEXO</th>
        <th>NASCIMENTO</th>
        <th>APAGAR</th>
        <th>EDITAR</th>
     </tr>
       <?php require("conexaobd.php");
       $id = $_GET['id'];//pegando id que esta vindo pela url do link
       
       $con=" SELECT * FROM pessoa WHERE id =$id";
        $consulta= mysqli_query($conexao,$con) ;
        //while so vai exibir o id selecionado do link
          while ($registro= mysqli_fetch_array($consulta))
          { 
          $id = $registro['id'];
          $nome = $registro['nome'];
          $sexo = $registro['sexo'];
          $nasc = $registro['nascimento'];
          $nasc = implode("/",array_reverse(explode("-",$nasc)));
           echo "<tr>";
           echo "<td>".$id."</td>";
           echo "<td>".$nome."</td>";
           echo "<td>".$sexo."</td>";
           echo "<td>".$nasc."</td>";
           echo "<td>'<a href='apagar.php?id=$id'>Apagar</a>'</td>";
           echo "<td>'<a href='edit_usuario.php?id=$id'>Editar</a>'</td>";
           echo "</tr>";
          }
            mysqli_close($conexao);
       echo "</table>";
       ?>