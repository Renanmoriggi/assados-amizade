<html>
<head>
<style>
*{box-sizing: border-box; }
body{ margin: 0; padding: 0;
overflow-x:hidden;}
p,h1,h2,h3{ margin:0;}
.content{ max-width: 1250px; 
margin: 0 auto; }
.caixa{width: 100%;
 height: 70px;
 border-bottom: 1px solid #A8A3A3;
 position: relative;}
 .logo{position: absolute;
 left: 5px; top:3px;
 width: 50px;
 height: 50px;}
 .menu{position: absolute;
 right: 10px;
 bottom:0px;
 height: 40px; }
 .menu li,a{text-decoration:none;
    display: inline-block;
    color: black;
    padding: 1.5px 3px;
    font-size: 1.1em; 
    }
 .menu li a:hover{ border-bottom:2px solid black; }
 .menu-icon div, .menu-close div{ width: 35px; border-radius: 20px;
  height: 5px;
  background-color: black;
  margin: 6px 0;
}
.menu-icon{ display: none; cursor: pointer;
  position: absolute; z-index: 1;
  top: 15px; right: 50px; }
.menu-close{ display: none; cursor: pointer;
  position: fixed; z-index: 2;
  top: 15px; right: 50px; }
@media only screen and (max-width: 700px) {
   .menu{ display:none; }  
   .menu-icon{ display: block; }
   .menumobile{  position: fixed; display:block;
 right: 0px; top:0px;
 height: 100%; z-index:2;
 width: 35%;
 background-color: red; 
 -webkit-transform: translateX(250px);
-moz-transform: translateX(250px);
-ms-transform: translateX(250px);
transform: translateX(250px);
-webkit-transition: .4s ease-out;
-moz-transition: .4s ease-out;
-ms-transition: .4s ease-out;
transition: .4s ease-out;
 }
 .active .menumobile {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    transform: translateX(0);
}
 .menumobile #a1{ margin-top: 80px; }
.menumobile li,a{ display: block; text-align: center;
 padding: 3px 0;}
}
 .conteudo { min-height: 625px; }
 .rodape {display: flex;
 display: -webkit-flex; /* Safari */
 flex-wrap: wrap;
 flex-direction: row;
 align-items:center;
 width:100%;  }
.container{ width: 100%;
height: 165px;
background-color:#BFBABA;}
.rodape .divLeft{ width: 30%;}
.rodape .divRight{width: 70%; }
.divLeft img{ margin-left: 110px;}
.divRight p{ margin-left: 8px; text-align:center;
font-size:18px; }
.divRight h2 {margin-left: 8px; text-align:center;
padding: 7px; }
</style>
</head>
<body>
<div class="content">
<!-- menu -->
<div class="caixa">
   <div class="logo">
    <img width="60" height="58" src="imagens/porco.png">
   </div>
   <div class="menu menumobile" id="menu">
   <li id="a1"> <a href="aa.php">MENU</a> </li>
   <li> <a href="aa.php">CONTATO</a> </li>
   <li> <a href="aa.php">COMIDA</a> </li>
   </div>
</div>

<div class="menu-icon">
<div> </div>
<div> </div>
<div> </div>
</div>
<div class="menu-close">
<div> </div>
<div> </div>
<div> </div>
</div>
<!-- conteudo -->
<div class="conteudo">
</div>
</div>

<!-- rodape -->
<div class="container">
 <div class="content"> 
  <div class="rodape">
      <div class="divLeft">
        <img  width="110" height="110" src="imagens/porco.png">
      </div>
      <div class="divRight">
       <h2>VENHA FAZER PARTE VOCÊ TAMBÉM!</h2>
       <p>Esta ferramenta facilita a criação, ajuste e experimentação com cores personalizadas<br> 
       para uso na web. Ela também facilita a conversão entre vários formatos de cores suportados<br> 
       por CSS, incluindo cores HEXA, RGB (vermelho, verde, azul) e HSL (tonalidade, saturação,<br> 
       luminosidade). Controle sobre o canal alfa também é suportado nos formatos RGB (rgba) e<br>
       Enquanto você ajusta os parâmetros.
      </div>
  </div>
 </div>
</div>
<script src="jquery.js"></script>

<script>
$(document).ready(function(){
   $('.menu-icon').click( function() {
      $('#menu').removeClass('menu')
      $('html').addClass('active')   
      $('.menu-close').css("display","block")
      document.body.style.backgroundColor = "rgba(0,0,0,0.1)";
});
$('.menu-close').click( function() {
   $('html').removeClass('active')
      $('.menu-close').css("display","none")
      $('#menu').addClass('menu')
      document.body.style.backgroundColor = "white";
});
$(window).on('resize', function(){
      var win = $(this); //this = window
      if (win.width() >= 680) {
      $('#menu').addClass('menu')
      $('html').removeClass('active')
      $('#menu').removeClass('menumobile')  
      $('.menu-close').css("display","none")
      document.body.style.backgroundColor = "white";
    } else {
      $('#menu').removeClass('menu')
      $('#menu').addClass('menumobile')
    }
});
});
</script>

</body>
</html> 