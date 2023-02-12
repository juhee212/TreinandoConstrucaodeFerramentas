function show(aval) {

//mostra os inputs
     if (aval == "automóvel") {
    hiddenAutomovel.style.display='inline-block';
    } 
    else{
    hiddenAutomovel.style.display='none';
    }
     if (aval == "motocicleta") {
    hiddenMoto.style.display='inline-block';
    } 
    else{
    hiddenMoto.style.display='none';
    }
//mostra fotos dos carros-moto

     if (aval == "gol") {
    hiddenDiv1.style.display='inline-block';
    } 
    else{
    hiddenDiv1.style.display='none';
    }
    if (aval == "fiesta") {
    hiddenDiv2.style.display='inline-block';
    } 
    else{
    hiddenDiv2.style.display='none';
    }
    
    if (aval == "palio") {
    hiddenDiv3.style.display='inline-block';
    } 
    else{
    hiddenDiv3.style.display='none';
    }
    
    if (aval == "hdb") {
    hiddenDiv4.style.display='inline-block';
    } 
    else{
    hiddenDiv4.style.display='none';
    }
    
    if (aval == "milleway") {
    hiddenDiv5.style.display='inline-block';
    } 
    else{
    hiddenDiv5.style.display='none';
    }
     if (aval == "milleecon") {
    hiddenDiv6.style.display='inline-block';
    } 
    else{
    hiddenDiv6.style.display='none';
    }
      if (aval == "fan125") {
    hiddenDiv7.style.display='inline-block';
    } 
    else{
    hiddenDiv7.style.display='none';
    }
}

function bloquear(){
  document.getElementById("hiddenAutomovel").style.visibility = 'block';
}