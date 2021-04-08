<?php include("topo.php"); 
   require("conexaobd.php"); ?>

<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!--fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">    
    <style> /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     body{ background-image: url("imagens/planoFundo.jpg");
    background-size: 100% 100%;  
    position: relative; 
    font-family: 'Barlow', sans-serif; }
  /*evento*/
  #principal { display: flex;
    flex-wrap: wrap;
    justify-content: center; }
     .conteinerfoto img{ width:100%; height:200px;
      box-shadow: 0 0 10px 0.15rem rgba(0,0,0, 0.7);
     }
     .conteinerfoto { width:33%; height:auto;
      padding:10px; margin-top: 60px;
      overflow: hidden;
      text-align:center; 
      }
      .conteinerfoto p{ color: black ;
       margin: 2px 0px;
       padding: 8px 0px;
       border-radius: 20px; 
       border-bottom: 3px solid #d5c06b;
       box-shadow: 0 0 10px 0.25rem rgba(0,0,0, 0.7); }
   @media only screen and (max-width: 800px) {
     .conteinerfoto { width: 50%; }  }
   @media only screen and (max-width: 500px) {
     .conteinerfoto { width: 100%; } }
  .title{ width: 50%; display:none; border: 2px solid #d5c06b;
  border-left:none; border-radius: 0 0 15px 0;
 background-color:rgba(0,0,0,0.8);
 padding:10px 20px; text-align:right;
 margin-top: 80px;  }
  .title h2{ font-size: 2.3em; word-spacing: 5px; 
 color:#d5c06b; margin: 0; padding-bottom: 10px; } 
 @media only screen and (max-width: 850px) {
  .title{ width: 55%; } 
  .title h2{font-size: 2em; } }
@media only screen and (max-width: 500px) {
  .title{ width: 90%; } 
  .title h2{font-size: 1.4em; }
  .title i { display:none; } }

     /*evento acaba*/
   </style>
</head> <!--dentro do head vai codigo css, titulo da pagina etc... -->

<body>

<div class="title">
<h2>Nossos Eventos</h2>
<i style="color:#807979;">Feitos com carinho ☺</i>
</div>

<div id="principal">
 <?php
$consulta = mysqli_query($conexao, "SELECT * FROM arquivo");
  while($arq_evento = mysqli_fetch_array($consulta))
       { //pegando imagem na pasta upload atraves do nome
        $img = "upload/" . $arq_evento['arquivo'];
        $desc = $arq_evento['Desc'];
echo "<div class='conteinerfoto'>
        <a href=".$img." target='_blank'>
        <img src=".$img." border='0' alt=''/> </a><br/>
        <p> <b>$desc</b> </p> 
      </div>"; }
 ?>
</div> 

<?php include("rodape.php"); ?>

</body>
</html>