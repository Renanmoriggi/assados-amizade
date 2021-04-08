<?php include("topo.php"); 
   require("conexaobd.php"); ?>

<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!--fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:wght@700&display=swap" rel="stylesheet">
    <style> /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     @font-face {	font-family: 'Conv_Roboto-Regular';
src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') format('woff'), 
url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg');
}  
body{ background-image: url("imagens/fundocardapio3.png");
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-position: center;   
     background-size: 100% 100%; 
     overflow-x: hidden;  }
   .titulo{  width: 100%;  
    text-align: center; margin-top: 70px;}
   .titulo b{color: white; display: none;
    margin: 0 15px; font-family: 'Cantarell', sans-serif;
    text-shadow: 3px 3px 3px black;
    font-size: 2em;  }
@media only screen and (max-width: 1020px) {
  .titulo b{line-height: 2em; } 
}
@media only screen and (max-width: 450px) {
  .titulo b{font-size: 1.5em;  } 
}
   .cardapio{ margin-top: 80px;
    height: auto;
    width: 100%;
    padding: 0px 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

    justify-content: center;
   }
   .cardapio img{ width: 93%; height: 300px; 
    padding: 10px;
    border-radius: 25px;
   }
   .itemCardapio{ background-color: rgba(0,0,0,0.9);
    width: 32.5%;
    margin: 15px 0px 0px 5px;
    font-family: 'Cantarell', sans-serif;
    display: inline-block;
    flex-direction: column;
    text-align: center;
    overflow:hidden;
    color: white;
    border-radius: 8px;}
    .aumentaimg { transform: scale(1.03);  -webkit-transform: scale(1.03); 
     -webkit-transition: all 0.5s;  -moz-transition: all 0.5s;
    -o-transition: all 0.5s;  transition: all 0.5s; }
@media only screen and (max-width: 800px) {
  .itemCardapio{ width: 48.5%; } }
@media only screen and (max-width: 560px) {
  .itemCardapio{ width: 100%; } }
   </style>
</head> <!--dentro do head vai codigo css, titulo da pagina etc... -->

<body style=" font-family:'Conv_Roboto-Regular'; ">
  
<div class="titulo">
 <b>BOVINOS</b>
 <b>SUÍNOS</b>
 <b>AVES</b>
 <b>ACOMPANHAMENTOS</b>
</div>

<h1 style="color:#ffffff; text-align:center; background-color: rgba(0,0,0,0.60); margin-top:70px; 
 padding:10px 0 1px 0; text-shadow: 1px 1px 3px #ffa938; font-family: 'Cantarell', sans-serif;">
 O MELHOR SABOR<br><p style="font-size:0.7em; ">PENSANDO EM VOCÊ!</p></h1>
 
<div class="cardapio">
 <?php
 $consulta = mysqli_query($conexao, "SELECT arquivo, nomecarne FROM arq_cardapio");
   while($arq = mysqli_fetch_array($consulta))
       { //pegando imagem na pasta upload atraves do nome
        $img = "upload/" . $arq['arquivo'];
        $nomecarne = $arq['nomecarne'];
 echo "<div class='itemCardapio'> 
        <h2>$nomecarne</h2>
        <a href=".$img." target='_blank'>
        <img src=".$img." border='0' alt=''/> </a><br />
      </div>"; }
 ?>   
</div>

<?php include("rodape.php"); ?>

<script src="jquery.js"></script>
</body>
</html>