// Quando o site terminar de carregar...
$(document).ready(function(){
// Quando passarmos o mouse me cima das imagens
$('#principal img').hover(function() {
// Escurecemos todas as OUTRAS imagens da lista
$('#principal img').not(this).stop().fadeTo('fast', 0.7);
}, function() {
// Todas as imagens se acendem voltando ao estado original
$('#principal img').stop().fadeTo('fast', 1.0);
});
//BOTAO SUBIR PARA TOPO
var subir = $('#subir');
subir.on("click", function() {
  $('html, body').animate({scrollTop:0}, 1000);
})
//ANIMAIS
var item = $('.item img');
item.hover( function() {
    $(this).next().fadeIn(200);
}, function() {
    $(this).next().fadeOut(200);
});
//MENU
var menu = $('.menu a');
menu.on("mouseover", function() {
   setTimeout(function()  {
    $('.menu div').css({border:'1px solid #F5EF46'});  
    }, 700)
});
menu.on("mouseout", function() {
$('.menu div').css({border: '2px solid rgba(0,0,0,0.3)' }); 
}); 
//CARDAPIO
var imgCardapio = $('.itemCardapio img');
imgCardapio.on("mouseover", function() {
    $(this).addClass("aumentaimg");
    imgCardapio.not(this).fadeTo('fast', 0.6);
});
imgCardapio.on("mouseout", function() {
    $(this).removeClass("aumentaimg")
    imgCardapio.fadeTo('fast', 1)
});
//.delay(400).show(1200)
$('.titulo b').delay(500).fadeIn(1200)
//Menu Mobile
$(function() {
    $('.menuIcon').on("click", function(){
        $('#menu').toggleClass("menumobile");
        $('#menu').toggleClass("menulink");   
     $('body').addClass("transparente")
     $('.menuclose').css({display: "block"})
     $('html').addClass('over')
    })
    $('.menuclose').on("click", function(){
        $('#menu').addClass("menulink");   
        $('#menu').removeClass("menumobile"); 
        $('.menuclose').css({display: "none"})
        $('body').removeClass("transparente")
        $('html').removeClass('over')
       })
//EVENTOS
$('.title').show(800)
})

$(window).on('resize', function(){
    var win = $(this); //this = window
    if (win.width() >=  840) { 
     $('#menu').removeClass("menumobile")
     $('#menu').addClass("menulink")
     $('body').removeClass("transparente")
    }
});
//FORMULARIO CONTATO, trim remove espaços antes/depois
if ( window.history.replaceState ) {
   //Cancela o reenvio do formulario ao atualizar a pagina
    window.history.replaceState( null, null, window.location.href );
}
$("#enviar").on("click", function(e){    
    var nome = $("#nome").val().trim();
    var email = $("#email").val().trim();
    var fone = $("#telefone").val().trim();
    var desc = $("#desc").val().trim();

    if(nome === ""){
      e.preventDefault();
      $('#erro').text("SEU NOME É OBRIGATÓRIO");
    } else if(email === "") 
    {
      $('#erro').text("SEU E-MAIL É OBRIGATÓRIO");
      e.preventDefault();
    }
    else if(fone === "") 
    {
      $('#erro').text("SEU TELEFONE É OBRIGATÓRIO");
      e.preventDefault();
    }
    else if(desc === "") 
    {
      $('#erro').text("DESCRIÇÃO OBRIGATÓRIA");
      e.preventDefault();
    } else {
     $('#erro').text("");
    }

})

});