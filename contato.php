<html>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!--esse link reseta o projeto para todos browser-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <!--fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
     <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">    
    <style> /*box sizing faz com que o padding nao mude o valor das divs*/
     *{box-sizing: border-box; }
     body{ background-color: #4F4F4F; 
        font-family: 'Barlow', sans-serif;
      background-color: black; 
      overflow-x: hidden;}
    .row{ align-items:center; overflow-x: hidden;}
    #erro{color:red; display:block;
     padding: 0 0 5px 0;}
    .form-control{ border: 2px solid #d5c06b; background-color: transparent; color:#d5c06b; 
      cursor: pointer;}
    .form-control:focus{ background-color: transparent; color:#d5c06b;
      box-shadow: 0 0 10px 0.15rem rgba(0, 123, 255, 0.25); border-color: #d5c06b; }
    .btn{ background-color: transparent; border: 2px solid #d5c06b; cursor: pointer;}
    .btn:hover{color: #d5c06b;  background-color: transparent; border: 2px solid #d5c06b;
      box-shadow: 0 0 10px 0.15rem rgba(0, 123, 255, 0.25);}
    .info b{ display:block; color: #d5c06b; padding:25px 0 0 0;}
    .info p{color:#495057; margin:-10px 0 0 0; font-size:1.1em;}
    .info b img{height: 55px; padding: 0 3px 8px 0;}
    .info a{ margin: 0 5px;}
    .mensagem{position:relative; width:100%; height:100%;
      background: url(imagens/fundoContato.jpg); background-size:cover;
       }
    .mensagem img{background-size: cover; repeat:no-repeat;}
    .mensagem div{position: absolute; top:150px; left:100px;
    background-color:rgba(0,0,0,0.85); width:470px; 
    padding:30px 45px; }
    .mensagem h1{color:rgba(255,255,255,0.9); font-weight: lighter; font-size: 38px; margin:0;
      word-spacing: 5px; padding: 2px 0;}
    .mensagem p{color:rgba(255,255,255,0.9); line-height: 1.4em; }
@media only screen and (max-width: 730px) {
  .mensagem div{ width:85%; left:0; margin: 0 30px 0 30px; }
}
@media only screen and (max-width: 420px) {
  .mensagem h1{ font-size:1.6em; }
  .mensagem div{ padding: 15px 25px;}
}
   </style>
</head>
<?php include("topo.php"); require("conexaobd.php"); ?>

<body>

<div class="mensagem">
  <div>
    <h1>NÓS QUEREMOS</h1> 
    <h1 style="color:#d5c06b; font-weight: bold;">OUVIR VOCÊ</h1>
    <p>Faça seus comentários, críticas, tire suas dúvidas.<br>
    Este espaço é reservado para você.</p>
  </div>
</div>

<!-- FORMULARIO CONTATO-->
<div class="container mt-5">
 <form method="post" action="ope_contato.php">
  <div class="row">
    <div class="col-md-5 offset-md-1">
     <div class="form-group pb-1 pt-1">
      <input type="text" name="nome" id="nome" placeholder="* NOME:" class="form-control" autocomplete="off">
     </div>
     <div class="form-group pb-1 pt-1">
      <input type="email" name="email" id="email" placeholder="* E-MAIL:" class="form-control" autocomplete="off">
     </div>    
     <div class="form-group pb-1 pt-1">
      <input type="text" name="telefone" id="telefone" placeholder="* TELEFONE:" class="form-control" autocomplete="off">
     </div>
     <div class="form-group pb-1 pt-1">
      <input type="text" name="cidade" placeholder="CIDADE:" class="form-control" autocomplete="off">
     </div> 
    </div>
    <div class="col-md-5">
     <div class="form-group">
      <textarea id="desc" name="desc" rows="9" placeholder="* EM QUE PODEMOS TE AJUDAR?" class="form-control" style="height:230px;"></textarea>
     </div>     
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 offset-md-1">
     <label style="color:white; margin:0 0 10px 0;">* CAMPO OBRIGATÓRIO</label>
     <label id="erro"></label>   
     <button type="submit" class="btn btn-dark" id="enviar">ENVIAR</button>    
    </div>
  </div>
 </form>
 <!-- INFORMAÇÃO CONTATO -->
 <div class="row text-center" style="display:block;">
   <h2 style="color:rgba(255,255,255,0.9); margin: 70px 0 10px 0; text-transform:uppercase; word-spacing: 3px;">
     Informações de Contato
   </h2>
   <div class="info">
     <b> <img src="imagens/email.png"> E-MAIL </b>
     <p>casadosassados@gmail.com</p>
     <b> <img src="imagens/sociais.png"> SOCIAIS </b>
     <a href="https://www.facebook.com/Casa-dos-assados-amizade-1622809257969588/" target=_blank><img src="imagens/face.png" 
     style="height:25px;"></a>
     <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5519991548029" target=_blank><img src="imagens/whats.png"></a>
     <a href="https://www.instagram.com/assados_amizade/" target=_blank><img src="imagens/insta.png"></a>
   </div>
 </div>
</div>

<?php include("rodape.php"); ?>
<script src="jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>