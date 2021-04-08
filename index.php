<?php require("conexaobd.php");//--chamando conexao com BD ?>

<html>
   <head> <!--dentro do head vai codigo css, titulo da pagina etc... -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Site da fran - Casa dos Assados </title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
     <style>/*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     @font-face {	font-family: 'Conv_Roboto-Regular';
	src: url('fonte/fonts/Roboto-Regular.eot'); src: local('☺'), url('fonte/fonts/Roboto-Regular.woff') 
format('woff'), url('fonte/fonts/Roboto-Regular.ttf') format('truetype'), url('fonte/fonts/Roboto-Regular.svg') format('svg');
} 
     /**cabeçalho começa*/
     .cabecalho{ background-color:#FFA500	;
      width: 100%; 
      max-height:90px;
      padding: 20px 25px;
      font-family: 'Lemonada', cursive;
      display: flex; }   
     .esquerda{ width: 50%; 
      display: inline-block;
      }
     .esquerda h3{ text-align: left; margin:0 ; 
      font-size: 1.7em; /**colocando escrita na esquerda da div*/
      text-shadow: 2px 2px 2px white;
      text-overflow: hidden;
      position: relative; }
     .direita{ width: 50%; 
      display: inline-block; 
      float: right;
      position: relative; 
       }
     .direita h3{ font-size: 1em; margin: 0;
      text-shadow: 2px 2px 2px white;
      margin-top: 9px;
      text-align: right; /**colocando escrita na direita da div*/ 
      }
 @media only screen and (max-width: 850px) {
   .direita{ display: none; } 
   .esquerda{ margin-left: 30px;  width: 100%; }  }
 @media only screen and (max-width: 620px) {
   .esquerda{ margin: 0px; width: 100%; } 
   .esquerda h3{ font-size: 1.2em;}
}
@media only screen and (max-width: 420px) { 
  .esquerda{ width: 85%; margin-left:-15px;}
  .esquerda h3{ font-size: 1em; margin: -5px 0 0 0;
  line-height: 1.3em; text-align:center;}
} 
      /**cabeçalho termina*/
     /**menu links começa*/
     .menulink{ position: relative;/*aqui faz menu fixo*/
      display: flex; 
      align-items: center;
      justify-content: center;
      background-color: rgba(0,0,0,0.75);
      width: 100%; z-index: 100; }
     ul{ list-style-type: none;
      margin:0;
      padding:0; 
      overflow: hidden; }
     li{ float: left;
      width: auto; }
     li a{ display:inline-block;
      color: white;
      font-family: 'Roboto', sans-serif;
      font-size: 1.2em;
      padding: 10px 25px;
      text-decoration: none; }
     li a:hover{ border-radius: 10px; background-color:#000000; 
      color:#ffa938;
      transition: color .40s ease-in; }
     li#dropdown{ display: inline-block; }
     .menu-cliente{ display:none;
      position: absolute;
      background-color: #F5F4F4;
      min-width: 17%;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
      z-index: 1; }
     .menu-cliente a{ color: black;
      text-decoration: none;
      text-align: center; 
      display: block; }
     .menu-cliente a:hover {background-color:#D4D2D2; color: black; 
      border-radius: 0;}
     #dropdown:hover .menu-cliente {  display: block; } 
 @media only screen and (max-width: 850px) {
   .menulink{ display: none; }
   .menuIcon{ cursor: pointer; 
    position: absolute; z-index: 2;
    top: 18px; right:40px; }
    .menuclose { cursor: pointer; display:none; 
    position: fixed; z-index: 3;
    top: 18px; right:40px; }
    .menuIcon div, .menuclose div{ width: 35px; border-radius: 20px;
    height: 6px; border: 1px solid rgba(255,255,240,0.9);
    background-color: black;
    margin: 4px 0; } 
 }
 @media only screen and (max-width: 620px) { 
  .menuIcon{top: 19px; right:30px; } 
  .menuIcon div{ width: 30px; height: 5px; margin: 2px 0; } 
 }
 @media only screen and (max-width: 420px) {
  .menuIcon{top: 16px; right:10px; }
  .menuIcon div{ width: 30px; height: 5px; margin: 1px 0; }  
}    
     /**Mobile*/
     .menumobile{  position: fixed; 
    right: 0px; top:0px;
    height: 100%; z-index:2;
    transition: all 0.5s;
    padding-top: 80px;
    width: 250px;
    box-shadow: 0px 0px 4px 1px rgba(255,255,240,0.9);
    border-radius: 15px 0px 0px 15px;
    background-color: rgba(0,0,0,1); }
   .menumobile .menu-cliente{ position: relative; border-radius:20px;
    margin-left: 15px;}
   .menumobile .menu-cliente a {background-color:rgba(0,0,0,0.95); color: white; 
      border-radius: 0; font-size: 1.1em; text-align: left; }
   .menumobile .menu-cliente a:hover {color:#ffa938; 
    transition: color .40s ease-in} 
  body.transparente >:not(#menu){
   opacity: 0.6; }
@media only screen and (max-width: 500px) { 
  .menumobile , .menumobile li{ width: 100%; border-radius:0px;}
  .over body{ overflow: hidden;}
}
     /**menu links acaba*/
     /*carrossel*/
    #carouselsite img{ max-height: 530px;
    min-height:300px;
   margin: 0px; padding: 0px;}
   #carouselsite{margin-top: -42px; z-index: 0; }
@media only screen and (max-width: 850px) {
  #carouselsite{margin-top: -8px;
   border-top: 2px solid rgba(0,0,0,0.85);}
    }
@media only screen and (max-width: 800px) {
  #carouselsite img{height: 400px; }
    }
@media only screen and (max-width: 600px) {
  #carouselsite img{max-height: 300px; }
    }
  .carousel-caption h1{  
    padding: 20px; background-color:rgba(0,0,0,0.9); margin:0 -210px 0 300px;
    text-align:left;  
   }
   .carousel-caption h1::after{ content:"";
    border-bottom: 1px solid red;
    margin-top: 10px;
	background: #FFA500;
	height: 3px;
	width: 100px;
	display: block; }
    /*bem vindo começa*/
    .bemvindo{background-color:rgba(182,15,15); max-width: 330px; padding: 10px;
     margin: 50px auto 35px auto; border-radius: 0px 35px;}
    .bemvindo h1{ background-color:rgba(0,0,0,0.9);
      color:white; 
      padding: 20px 20px; margin: 0 auto;
       border-radius: 0px 35px;}
  @media only screen and (max-width: 450px) {
    .bemvindo h1{ font-size: 1.6em; padding: 10px 10px; } 
    .bemvindo{ padding: 10px;} }
    /*animais*/
     .animal{margin: 0 auto; width: 100%; text-align:center; 
      display:flex; flex-direction:row; justify-content:center;}
     .animal img{ width: 110px; height:auto; margin: 5px 18px;  }
     .animal img:hover{border-radius:45px;
      background-color:rgba(226,8,8); border:2px solid black; }
  @media only screen and (max-width: 450px) {
    .animal img{ width: 75px;  margin: 5px 10px;}  }
    /*cardapio site*/
    .cardapio{ background-image:url("imagens/costela.png");
     width:100%; height: 600px;
     position:relative; margin-top:40px;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover; }
    .cardapio .menu{position:absolute; color:white;
     top:7%; left:3%; text-align:center; }
    .cardapio .menu div{padding: 0 10px; border:2px solid rgba(0,0,0,0.3);
    background-color:rgba(0,0,0,0.6);
    border-radius: 25px 25px 60px 60px;
    text-align:center; color:white; }
    .cardapio .menu div a{text-decoration:none; font-size:1.1em;
     color:white; padding:10px 15px;
     margin-top:5px;
     border:2px solid white;}
    .cardapio .menu div a:hover{border:2px solid #F5EF46;}
 @media only screen and (max-width: 650px) {
  .cardapio .menu{ top:3%; left:0;} 
  .cardapio .menu div{padding: 0 2px;}  }  
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
<body style="margin:0; font-family: 'Open Sans', sans-serif; " > <!--body vai codigo html -->
   <div class="cabecalho"> 
    <div class="esquerda"><h3>CASA DOS ASSADOS AMIZADE</h3></div>
    <div class="direita"><h3>AS MELHORES CARNES NA MESA DA SUA CASA</h3></div> 
   </div>
<div class="menuIcon">
 <div> </div><div> </div><div> </div>
</div>

<div class="menulink" id="menu">
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="sobrenos.php">QUEM SOMOS</a></li>
  <li id="dropdown">
    <a href="#" class="menu">SERVIÇOS &nbsp; &#9662;  </a>
     <div class="menu-cliente">
      <a href="entrega-domicilio.php">Entrega a Domicílio</a> 
      <a href="eventos.php">Festas e Eventos</a> 
     </div>
  </li>
  <li><a href="cardapio.php">CARDÁPIO</a></li>
  <li><a href="contato.php">ENTRE EM CONTATO</a></li> 
</ul>
   <div class="menuclose">
       <div> </div><div> </div><div> </div>
   </div>
</div> 

<!-- Carrossel Bootstrap -->
<div id="carouselsite" class="carousel slide" data-ride="carousel" data-interval="5000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagens/costelabafo.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
       <h1>O MELHOR PARA TODAS FAMÍLIAS</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/costela1.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
       <h1>O MELHOR SABOR</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="imagens/costela2.png" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
       <h1>AS MELHORES CARNES</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselsite" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselsite" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="width:100%; background-color:#FFA500; border: 5px double black; text-align:center;">
<p style="margin:0; font-size:12px; padding-top:1px; word-spacing: 25px; font-family: 'Lemonada', cursive; font-weight:bold;">FOCO FORÇA E FÉ</p>
</div>

<hr style="width:85%; margin: 0 auto;">
<div class="bemvindo">
 <h1 style="text-align:center;">SEJA BEM VINDO</h1>
 </div>
  <P style="width:75%; text-align:center; margin:0 auto; font-size:1.3em; 
  word-spacing:2px; letter-spacing:1.5px; line-height:1.25em;"> 
   A Casa Dos Assados Amizade vem ganhando fama cada vez mais na cidade
   de Americana-SP, seus sabores incomparáveis chamam a atenção de
   todos. Nos baseamos em simplicidade e muito amor nos nossos produtos.
   Oferecemos aos nossos clientes carnes de frango, suína, e bovina da melhor
   qualidade e procedência possível.</P>
   <p style="text-align:center; font-size:1.4em;">
    <b> <a href="sobrenos.php" style="text-decoration:none; color:black;">
     SAIBA MAIS</a> </b>
   </p>

<div class="animal"> 
  <div class="item"> <img src="imagens/boi.png"> <p style="display:none;">BOI</p> </div>
  <div class="item"> <img src="imagens/galinha.png"> <p style="display:none;">FRANGO</p> </div>
  <div class="item"> <img src="imagens/porco.png"> <p style="display:none;">PORCO</p> </div>
</div>

<div class="cardapio">
 <div class="menu">
  <h1>CARDÁPIO</h1>
   <div>
    <h2>Menu</h2>
    <p style="line-height:1.5em; font-size:1.05em;">
     Carnes bovinas, suínas, aves e acompanhamentos<br> especiais. 
      Variedades de sabores que<br> agradam a todos os paladares.
    </p> <br><br>
    <a href="cardapio.php">Confira</a> <br><br><br>
   </div>
 </div>
</div>

  <!--Aqui tem o icone whats que direciona pra cada um-->
  <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5519991548029" target=_blank><img src="https://i.imgur.com/ryESuZ5.png" 
  style="height:50px; position:fixed; bottom: 25px; right: 25px; z-index:44;" data-selector="img"></a>

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
     <a id="subir" style="text-decoration:none; cursor:hand;">
      <h1 style="background-color:#F18212; color:#232323; padding:10px 10px; border-radius:7px;">
       VOLTAR AO TOPO ⥣</h1>
     </a>
    </div>
 </div>
</div>

<script src="jquery.js"></script>
<script src="index.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>