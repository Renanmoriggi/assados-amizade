<?php require("topo.php"); ?>
<style>
.cadastro{ width: 20%; background-color:#D4D2D2;
         text-align: center;
         position: absolute;
         top: 30%; /**50 aqui*/
         left: 50%; /**50 aqui tbm para o transform dar certo*/
         transform: translate(-50%, 0); /**50 aqui*/
         border: 1px solid;
         border-radius: 5%;
         z-index: 0; }
input{ max-width: 100%; }
</style>

<div class="cadastro">                                  
    <h3>Formulário de cadastro</h3><br>  <!--Form para cadastro ao banco de dados -->
     <form action="ope-inserir.php" method="post"> <!--Inserir dados pelo form no banco de dados -->
       Nome: <input type=text name=nome><br>
       [M]ou[F]: <input type=text name=sexo><br>
        Nascimento: <input type=date name=nasc> <br>
         <input type=submit value="OK"> <!--Botao para enviar os dados do form-->
     </form> 
    </div>