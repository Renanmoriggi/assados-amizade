<html>
 <head> <!--dentro do head vai codigo css, titulo da pagina etc... -->
  <meta charset="UTF-8">
  <title> Area de login </title>
   <style>
    fieldset{font-size:15pt;
         background-color:rgba(23,236,225,0.3);
         width: 40vh;
         height: auto; /**vh significa que ocupa 30% da altura da tela */
         position: absolute;
         top: 50%; /**50 aqui*/
         left: 50%; /**50 aqui tbm para o transform dar certo*/
         transform: translate(-50%, -50%); /**Centralizando na tela*/
         border: 3px solid; 
         border-radius: 10%;}
    h1{border: 8px double black;
       color:white;
       background-color:rgba(0,0,139);
       max-width: 100%;
       height: 50px;}
    input{ max-width:100%;} 
    body{ margin:0; }/**aqui tira o espaço branco no canto da tela*/ 
   </style>
 </head>
<body>
<center> <BR><BR><BR>
<h1> FAÇA SEU LOGIN </H1>
<form action="ope_login.php" method="POST">
 <fieldset id="fie">
  <legend>LOGIN</legend><br>
   <label>NOME : </label><br>
    <input type=text name=login ><br>
   <label>SENHA :</label><br>
    <input type=password name=senha ><br>
    <input type=submit value="logar" >
    
    <?php if(isset($_GET['erro']))//envia msg caso nao possua login
    { if ($_GET['erro'] == "loginerrado") 
    { echo "<br>Dados estão incorretos!"; } }?>
 </fieldset>
</form>
</center>
</body>
</html>
