<?php include("topo.php"); 
   require("conexaobd.php"); ?>

<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!--esse link puxa fonte do google-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
    <style> /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     @font-face {	font-family: 'Conv_Roboto-Regular';
src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') format('woff'), 
url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg'); }
  body{ background-image: url("imagens/fundo.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    font-family: 'Barlow', sans-serif; }
  .container{
      width: 100%;  
     margin-top: 70px; }
  .entrega{position: relative; 
    display: flex; margin: auto;
    padding: 20px 0px;
    align-items: center;
    justify-content: center;
    }
  .entrega2{ width: 80%;
    display: flex; margin: auto;
    padding: 80px 0px;
    align-items: center;
    justify-content: center;
    }
  .entrega2 div{ margin: 0 15px; width: 50%; text-align: justify;}
@media only screen and (max-width: 930px) { 
  .entrega2{ display: flex; flex-direction:column; text-align:center;
    width: 90%; }
  .entrega2 div{ padding-bottom: 30px; width: 100%;}
}
@media only screen and (max-width: 500px) { 
  .entrega h1{ font-size:1.5em; }
  .entrega2 h2{ font-size:1.2em; }
}
  </style>
</head> <!--dentro do head vai codigo css, titulo da pagina etc... -->

<body>

<div class="container">
 <div class="entrega">
  <h1 style="color:#F18212; font-size: 38px">ENTREGA A DOMICÍLIO</h1>
 </div> 
 <hr style="width:80%;">
 <div class="entrega2">
  <div>
    <h2 style="line-height: 1.2em; word-spacing: 3px;">Com o serviço de entrega a domicílio da Ramalho Carnes, 
    você recebe nossos produtos na comodidade da sua casa ou empresa. 
    Entre em contato conosco para fazer o seu pedido ou faça o pedido online.
    Com o serviço de entrega a domicílio da Ramalho Carnes, 
    você recebe nossos produtos na comodidade da sua casa ou empresa.
    Entre em contato conosco para fazer o seu pedido ou faça o pedido online.</h2>
  </div>
  <div>
    <img src="imagens/entrega.jpg" style="border-radius: 400px; width:100%; height: auto;">
  </div>
 </div>
 <hr style="width:80%;">
</div>

<?php include("rodape.php"); ?>

</body>
</html>