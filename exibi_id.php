<?php require("topo.php"); ?>
<style> 
 table{ position: relative;
  top: 30%; /**50 aqui*/
  left: 50%; /**50 aqui tbm para o transform dar certo*/
  transform: translate(-50%, 0); /**50 aqui*/}
</style>
<!-- Criando tabela -->
<table border="1" style='width:50%'>
      <tr> <!--tr linha -->
        <th>ID</th>  <!--th coluna -->   
        <th>NOME</th>
     </tr>
       <?php require("conexaobd.php"); 
       $con="SELECT id, nome FROM pessoa";
        $consulta= mysqli_query($conexao,$con) ;
        //while enquanto tiver registro na matriz pessoa vai ler e exibir, $registro guarda e exibe
          while ($registro= mysqli_fetch_array($consulta))
          { 
          $id = $registro['id'];
          $nome = $registro['nome'];                            
           echo "<tr>";
           //criando link com id do bd,no href dps do ? vem o nome e o valor que ele recebe
           echo "<td>'<a href='exibirtudo.php?id=$id'>Clique aqui</a>'</td>";
           echo "<td>$nome</td>";
           echo "</tr>";
          }
            mysqli_close($conexao);
       echo "</table>";//fechando a tabela
       ?>
       