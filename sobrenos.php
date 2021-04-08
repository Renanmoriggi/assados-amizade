<?php include("topo.php"); 
   require("conexaobd.php"); ?>

<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!--esse link puxa fonte do google-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
   <style> /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     @font-face {	font-family: 'Conv_Roboto-Regular';
src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') format('woff'), 
url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg'); }
   body{ background-image: url("imagens/fundo2.jpg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative; margin: 0; padding:0;
  font-family: 'Montserrat', sans-serif; }
   .container1{ width: 100%;
     margin-top: 100px; 
     display: flex; 
     justify-content: center; }
   .container1 div{ width:45%; margin: 0px 20px 0px 20px; 
   position: relative; 
    line-height: 1.7em; }
   .borda{ 
     border: 2px dashed #363636; width: 90%; margin: 40 auto; 
    padding: 0.5px 0; display:none; }
 @media only screen and (max-width: 800px) {
  .container1{ flex-direction: column; }
  .container1 div{ width:100%; margin: 10px 0px 35px 0px; 
  padding: 10px; }
  .foto{ position: absolute; top:0; margin: -80px 0px 0px 0px; }
  .borda{ display:block; }
  }
    .foto{
      animation-name: animacao;
      opacity: 0;
    animation-duration: 14s;
    animation-iteration-count: infinite; }
    .foto:nth-child(1){  }
    .foto:nth-child(2){ animation-delay: 7s; }
@keyframes animacao{ 5%, 49%{
  opacity: 1;
  }
  51%{ opacity: 0; }  }
   </style>
</head> <!--dentro do head vai codigo css, titulo da pagina etc... -->

<body>
 
<h1 style="color:#3a4149; text-align:center; padding: 65px 0px 3px 0px; margin:0 auto; border-bottom: 4px solid #3a4149; width:280px;
font-size: 2.7em;">SOBRE NÓS</H1>

<section class="container1">
 <div>
  <h1 style="color:#F18212;">CONHEÇA NOSSA HISTÓRIA</H1>
  <p style="text-align: justify;">Somos a FRANBOI, empresa modelo que vem crescendo no mercado e sendo exemplo de desenvolvimento, 
  organização e criatividade, tendo como principal objetivo atender da melhor forma possível nossos
  clientes e fornecedores, marcando tradição pela excelência de seus produtos e qualidade no 
  atendimento, investindo sempre para que possamos garantir um atendimento rápido, personalizado 
  e com a modernização que os nossos clientes merecem. Somos sem dúvida uma das casas de carnes mais
  completa da cidade, com ampla área de venda, deixando clara a preocupação com o conforto e a qualidade
  no atendimento ao cliente. Contamos com profissionais qualificados e especializados, trabalhamos com 
  carnes bovinas, carnes suínas e carnes de aves em Santa Bárbara d’Oeste. Aceitamos encomendas de carnes
  para buffets, festas, eventos e/ou churrascos. Sempre primamos pela qualidade dos produtos e a satisfação
  de todos os nossos clientes.</p>
 </div>
 
 <div>
 <b>TEL: </b>(19) 99154-8029 <br>
 <b>END: </b>Av. da Amizade, 1190 - Jardim Adelia, Santa Bárbara d'Oeste - SP<br><br>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d919.9706152435737!2d-47.35927790038474!3d-22.732609745551468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89b905342ad63%3A0x6c93f244cca6395!2sAv.%20da%20Amizade%2C%201190%20-%20Jardim%20Adelia%2C%20Santa%20B%C3%A1rbara%20d&#39;Oeste%20-%20SP%2C%2013458-588!5e0!3m2!1spt-BR!2sbr!4v1588012689229!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</section>

<div class="borda">
</div>

<section class="container1">
 <div style="padding-top: 120px;">  
 <img class="foto" src="imagens/casa_assado.jpg" style="position:absolute; width:95%; height:320; ">
 <img class="foto" src="imagens/frango-assado.jpg" style="width:95%; height:320; ">
</div>
 
 <div style="padding-top: 120px;">
  <b style="color:#F18212; font-size:2.1em; line-height: 1.1em;">MISSÃO E PRINCÍPIO</b> <br><br>
  <b style="color:#F08C28; font-size:1.3em;">TRABALHAMOS EM FAMÍLIA</b> <br>
  <p style="text-align: justify;"><b>MISSÃO: </B> Atender as necessidades dos clientes e fornecedores com máxima 
  eficiência, rapidez, qualidade e educação, para ter uma boa relação com aqueles que nos ajudam a cada
  dia, respeito e responsabilidade é o nosso lema.    </p> 
  <p style="text-align: justify;"><b>PRINCÍPIO: </B> Focar na boa relação com o cliente,
  respeitar todos, entregar produtos de qualidade máxima, ser educado sobre qualquer
  circunstância e não falhar com nossas encomendas.  </p>
 </div>
</section>

<?php include("rodape.php"); ?>
</body>
</html>