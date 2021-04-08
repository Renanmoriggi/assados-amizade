<?php require("conexaobd.php");//--chamando conexao com BD ?>

<html>
   <head> <!--dentro do head vai codigo css, titulo da pagina etc... -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site da fran - Casa dos Assados </title>
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    
     <style>/*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     @font-face {	font-family: 'Conv_Roboto-Regular';
	src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') 
format('woff'), url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg');
} 
     /*rodape*/
     .rodape1{ width: 100%; height:55px; float: left;
      margin-top:100px;
      display: flex;
      align-items: center;
      background-color: #BFBEBE;
      font-family: 'Roboto', sans-serif; }
    .rodape1 .div1 { padding-left: 70px; width: 50%; }
    .rodape1 .div1 a{ padding: 3px 10px; border-right: 2px solid #232323; }
    .rodape1 a{ color: #232323;
      font-size: 1em;
      text-decoration: none; }
    .rodape1 .div1 a:hover {color: #000000; }
    .rodape1 #div2{ text-align: right; margin-right: 35px;
      width: 50%;   }
    .rodape1 #div2 a{ margin: 0 12px; }
    .rodape2{ width: 100%; height:auto; float: left;
      display: flex;
      justify-content: center;
      background-color: #232323; 
      font-family: 'Roboto', sans-serif; }
    .rodape2div{ color:#BFBEBE; margin-right:40px;
      padding: 25px 0 30px 0;
      display: flex; flex-direction:column;}
    .rodape2 span{color:#F18212;
      margin-bottom: 5px;
      border-bottom: 2px solid #BFBEBE;
      padding: 8px 0px 8px 0px;}
  @media only screen and (max-width: 900px) {
    .rodape1 { height:auto; display: block; text-align: center;  }
    .rodape1 .div1{ width: 100%; text-align: center; padding: 0; }
    .rodape1 .div1 a{ display: block; border: none;padding: 15px 0; border-bottom: 1px solid #232323;} 
    .rodape1 #div2{ width: 100%;  text-align: center; padding: 10px 0; } 
  .rodape2{ display:flex; flex-direction:column; align-items:center;} 
  .rodape2div{ margin:0; padding: 25px 0 0px 0; width: 90%;} 
  .rodape2div h1{font-size:1.1em; width:200px;}}
        </style>
   </head>
<body style="margin:0;  font-family:'Conv_Roboto-Regular'; " > <!--body vai codigo html -->

<div class="rodape1">
 <div class="div1">
   <a href="contato.php"><b>FALE CONOSCO</b></a>
   <a href="entrega-domicilio.php"><b>DELIVERY</b></a>
 </div>
 <div id="div2">
  <a href="https://www.facebook.com/Casa-dos-assados-amizade-1622809257969588/" target=_blank><img src="imagens/face.png" 
    style="height:25px;"></a>
  <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5519991548029" target=_blank><img src="imagens/whats.png"></a>
  <a href="https://www.instagram.com/assados_amizade/" target=_blank><img src="imagens/insta.png"></a>
 </div>
</div>

<div class="rodape2">
 <div class="rodape2div">
    <span>ENDEREÇO</span>
    <div style="margin-top:5px;">Av. Amizade, 1190-Vila Dainese<br>
    Americana/SP<br>
    Fone:(19)99154-8029</div>
 </div>
 <div class="rodape2div">
   <span>HORÁRIO DE FUNCIONAMENTO</span>
   <div style="margin-top:5px;">DOMINGOS: 7hs ÁS 14hs<br>
   FERIADOS: 7hS ÁS 14hs</div>
 </div>
 <div class="rodape2div">
    <div style="margin:0 0 0 20px;">
     <a id="subir" style="text-decoration:none; cursor:pointer;">
      <h1 style="background-color:#F18212; color:#232323; padding:10px 10px; border-radius:7px;">
       VOLTAR AO TOPO ⥣</h1>
     </a>
    </div>
 </div>
</div>

<script src="jquery.js"></script>
<script src="index.js"></script>
</body>
</html> 