<html>
   <head> <!--dentro do head vai codigo css, titulo da pagina etc... -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
    <title> Site da fran - Casa dos Assados </title>
     <style>
     /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
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
        </style>
   </head>
<body style="margin:0; "> <!--body vai codigo html -->
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
 
</body>
</html> 
