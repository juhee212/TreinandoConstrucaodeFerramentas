//$(document).ready(function() {
    $('#nome_sobrenome').focusout(function() {
        $.ajax({
          //  data: {nome_sobrenome : 'nome_sobrenome'},
            url: '../../../modulos/consulta.php',//+$("#nome_sobrenome',
            data: 'JSON',
            success: function(row) {
                if(row.status == "ERROR"){
                    alert(row.message + "\nPor favor, digite os dados manualmente.");
                    $("#form #nome").focus().select();
                    return false;
                }
                // if(row.status == undefined){
                //     alert("\nVariável indefinida");
                //}
                 else{
                    console.log(row);
                  //  header("Content-Type: ../../../modulos/consulta.php");
                }
              //  $("#form #cargo").val(row.cargo);
            }
        });
    }); 
//});