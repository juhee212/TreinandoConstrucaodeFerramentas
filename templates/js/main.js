
// //data automática
// var today = new Date();
// var dy = today.getDate();
// var mt = today.getMonth()+1;
// var yr = today.getFullYear();
// document.getElementById('data').value= dy+"/"+mt+"/"+yr;


//cria tabela
$(document).ready(function(){
    $("#tabela-herdeiro").append(baselinha);
    var baselinha = "<tr><td><input classe='buscarcolab' name='nome_sobrenome' placeholder='Nome do operário'></td><td><i class='fa-solid fa-trash-can' onclick='removeitem(this)' href='#'></i></td></tr>";

    $("#adicionar").click(function(){
        $("#tabela-herdeiro").append(baselinha);
    });
    $('#botao').click(function(){
        $('.active').removeClass('active');
        $(this).addClass('active');
    });
});

//remover item
function removeitem(item){
    var x = item.parentElement.parentElement;
        x.remove();
}

//Faz com que só dê submit ao clicar enviar
$(document).ready(function() {
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
          }
     });
});

//abrir modal
function abrirModalLancamento(){
    document.getElementById("abrirModal").style.visibility = 'visible';
}

// função fechar modal lançamento
function fecharModalLancamento(){
    document.getElementById("abrirModal").style.visibility = 'hidden';
}

////////////////////////////////////////////////////////////////////////
// cores dos movimentos


//formatar valor
function formataValor(valor) {
    const elementoAlvo = valor
    const valorAtual = valor.value   
    
    let valorAtualizado;
    
    valorAtualizado = valorAtual.replace(/(\d{3})(\d{3})/, 
     function( regex, argumento1, argumento2, argumento3) {
            return argumento1 + '.' + argumento2 + ',' + argumento3;
    })  
    elementoAlvo.value = valorAtualizado; 
};

//trocar imagem navburguer
// function changeImage() {
//     var image = document.getElementById("lateral-bar");
//     if (image.src.match("bars-solid")) {
//         image.src = "../img/x-solid.svg";
//     } else {
//         image.src = "bars-solid.jpg";
//     }
// }