         <?php //conexao em PHP com BD
            $host= "localhost";
              $usuario = "root";
              $senha = "";
            $bd = "meubanco";
         $conexao = MySqli_connect ($host, $usuario, $senha, $bd);
            if($conexao)
              { $achou=0; }
            else
             {  $achou=1;
                echo "não conectado ao banco"; }
         ?>