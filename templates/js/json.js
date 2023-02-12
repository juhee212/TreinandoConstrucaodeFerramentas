$(document).ready(function(){
  //extrai bancos da api  
  $.getJSON('../../assets/categorias.json', function(data){
    var $select = $('#categoria');
    for (var i = 0; i < data.length; i++){
      result = data[i]['CATEGORIA'];
      // result.sort(); 
      $select.append('<option value='+result+'>' + '<ol>'+result+'</ol>' + '</option>');
    }
  });

  //estiliza tabela com jquery 
  $('#myTable1').DataTable();
  $('#myTable2').DataTable();
  
  //mudar cor de acordo com o movimento
  // var tabela = document.querySelector("td");
  // var worldString = 'Saida';

  // if(tabela = worldString){
  //   worldString.style = 'color:red';
  // }
   
  



}); 

