<?php require("conexaobd.php");
/*verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e 
digitar no endereço do seu navegador o caminho para essa pagina, burlando assim a obrigação de 
fazer um login, se ele não fazer o login não será criado a session,e redireciona o mesmo para a index.php.*/
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{ unset($_SESSION['login']);//unset fecha a sessão
  unset($_SESSION['senha']);
  header('location:login.php');
}
 $logado = $_SESSION['login'];
?> 

<script> //Cancela o reenvio do formulario ao atualizar a pagina 
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
} 
</script>

<html>
  <head> <!--dentro do head vai codigo css, titulo da pagina etc... -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site da fran - Casa dos Assados </title>
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
      <style> *{box-sizing: border-box; margin:0; }
      @font-face {	font-family: 'Conv_Roboto-Regular';
	    src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') 
      format('woff'), url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg');
      } 
        /*cabeçalho*/
        .login{ position: relative; top: 0px; left: 0px;
        border: 2px solid ;
        padding: 20px;
        width: 100%;
        background-color: #e8e01c;
         }
        .login img{ position: absolute;
         top: -30px;
         left:50px;
         height: 130px;}
 /*container*/     
 .container{ margin:0;  width:100%;
   display: block;
    flex-direction: row;
  }
#container1_2{ width:49%; border:2px solid; 
  margin-top:4px;
   display: inline-block;
    flex-direction: column; } 
  /*container1 salvar img evento*/     
  .container1{ padding:6px; 
  width:100%;
  overflow:hidden;
  display: block;
  background-color: #d2d3d4;
  }
  /*container2 exibe img e deleta*/
  .container2{ flex-direction: row;
    text-align:center;
    margin-top:4px; padding:7px;
    width: 100%;
    background-color:#d2d3d4 ;
  } 
#container3_4{ width:49%; border:2px solid;
   margin-top:4px;
   display: inline-block;
   float:right;
   flex-direction: column; } 
  .container3{ padding:6px; 
  width:100%;
  overflow:hidden;
  display: block;
  background-color: #d2d3d4;
  }
  /*container4 exibe img e deleta*/
  .container4{ display: block;
    flex-direction: row;
    text-align:center;
    margin-top:4px; padding:7px;
    width: 100%;
    background-color:#d2d3d4 ;
  } 
@media only screen and (max-width: 600px) {
#container1_2{ width: 100%; } 
#container3_4{ width: 100%; float:left; } }            
         /*imagem del*/
        .imagem{ display: inline;
          margin-right:-35px;
          } 
        .imagem #img-grande{ 
          width: 30.3%;
          height: 130px;
          }
        #del{ position:relative; left: -35px; 
         }
        /*inserir exibir cliente*/
        .cliente{ width: 100%; background-color: black;
         display: flex;
         }
        .cliente .item a{ text-decoration:none; color: white;
         font-size: 1.3em;
         padding: 10px;
          }
        .cliente .item{ width: 50%;
         text-align: center; 
         display: inline-block;
         padding: 12px;
         z-index: 2; }
        .cliente .item a:hover{ background-color: #0f8494;
         color: black;
         border-radius: 12px; }       
      </style>
   </head>

<body style="font-family:'Conv_Roboto-Regular'; " >    
  <?php 
//SALVANDO FOTO PARA EVENTO
   $msg = false;
   //if existir um arquiv0
    if(isset($_FILES['arquivo']))
    //$extensao pega o tipo do arquivo enviado,ex: .jpg
   { $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
     //novonome define nome do arq e que nunca tenha arquivos iguais
     $novonome = md5(time()) . $extensao;
     //diretorio pra onde vai o arquivo
     $diretorio = "upload/";
     $desc = $_POST['desc']; 
    
     //efetua o upload
     move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novonome);
     //guardando nome do arq no bd,NOW() pega a data/horario atual
     $inserir_arq = "INSERT INTO arquivo values(null,'$novonome','$desc',NOW())";
      if(mysqli_query($conexao, $inserir_arq))
      $msg = "Arquivo enviado com sucesso!";
       else
       $msg = "Falha ao enviar arquivo!";
   }

//SALVANDO FOTO PARA CARDAPIO
$msg2 = false;
//if existir um arquiv0
 if(isset($_FILES['arq_cardapio']))
 //$extensao pega o tipo do arquivo enviado,ex: .jpg
{ $extensao2 = strtolower(substr($_FILES['arq_cardapio']['name'], -4));
  //novonome define nome do arq e que nunca tenha arquivos iguais
  $novonome2 = md5(time()) . $extensao2;
  //diretorio pra onde vai o arquivo
  $diretorio2 = "upload/"; 
  $nomecarne = $_POST['nomecarne'];
 
  //efetua o upload
  move_uploaded_file($_FILES['arq_cardapio']['tmp_name'], $diretorio2.$novonome2);
  //guardando nome do arq no bd, NOW() pega a data/horario atual
  $inserir_arq = "INSERT INTO arq_cardapio values(null,'$novonome2',NOW(),'$nomecarne')";
   if(mysqli_query($conexao, $inserir_arq))
   $msg2 = "Arquivo enviado com sucesso!";
    else
    $msg2 = "Falha ao enviar arquivo!";
}
?>

<div class="login">
  <img src="imagens/logo.png">
  <h3 style="text-align:center;"> BEM VINDO  <?php echo $logado ?> </h3>
</div>

<div class="cliente">
  <div class="item">
    <a href="inserir.php">Registrar Cliente</a>
  </div>
  <div class="item"> 
    <a href="exibi_id.php">Exibir Clientes</a> 
  </div>
</div>

<div class="container">

<div id="container1_2">
 <div class="container1">
  <h2 style="text-align:center; margin-bottom:7px;">Salvar Imagens Para Eventos</h2>
    <?php if($msg != false) echo "<p> $msg </p>"; ?>
     <!--formulario dessa forma para funcionar upload-->
   <form action="admin.php" method="post" enctype="multipart/form-data" style="text-align:center;">
     Descrição evento: <input type="text" required name="desc"> <br>
     Arquivo: <input type="file" required name="arquivo">
     <input type="submit" value="salvar">
   </form>
 </div>

 <div class="container2">
  <h3 style="text-align:center; margin-bottom:12px;">Imagens Eventos / Excluí-las</h3> 
  <?php //exibir imagens salvas no bd e remover
  $consulta = mysqli_query($conexao, "SELECT arquivo FROM arquivo");
   while($imagem = mysqli_fetch_array($consulta))
     { //pegando imagem na pasta upload atraves do nome
      $img = "upload/" . $imagem['arquivo'];
      
      echo " <div class='imagem'>
                <img src=".$img." alt=".$imagem['arquivo']."; id='img-grande' >
                <a id='del' href='del_arquivo.php?nomearq=".$imagem['arquivo']." '> 
                  <img src='imagens/delete.png' style='width:32px; margin:0px;' title='excluir imagem'>
                </a>
             </div>";
      
    }
  ?>
 </div>
</div>

<div id="container3_4">
 <div class="container3">
  <h2 style="text-align:center; margin-bottom:7px;">Salvar Imagens Para Cardápio</h2>
    <?php if($msg2 != false) echo "<p> $msg2 </p>"; ?>
     <!--formulario dessa forma para funcionar upload-->
   <form action="admin.php" method="post" enctype="multipart/form-data" style="text-align:center;">
     Nome da Carne: <input type="text" required name="nomecarne"> <br>
     Arquivo: <input type="file" required name="arq_cardapio">
     <input type="submit" value="salvar">
   </form>
 </div>

 <div class="container4">
  <h3 style="text-align:center; margin-bottom:12px;">Imagens Cardápio / Excluí-las</h3> 
  <?php //exibir imagens cardapio salvas no bd e remover
  $consulta2 = mysqli_query($conexao, "SELECT arquivo FROM arq_cardapio");
   while($imagem2 = mysqli_fetch_array($consulta2))
     { //pegando imagem na pasta upload atraves do nome
      $img2 = "upload/" . $imagem2['arquivo'];
      
      echo " <div class='imagem'>
                <img src=".$img2." alt=".$imagem2['arquivo']."; id='img-grande' >
                <a id='del' href='del_arquivo.php?nomearq2=".$imagem2['arquivo']." '> 
                  <img src='imagens/delete.png' style='width:31px; margin:0px;' title='excluir imagem'>
                </a>
             </div>";
      
    }
  ?>
 </div>
</div>

</div>

</body>
</html> 