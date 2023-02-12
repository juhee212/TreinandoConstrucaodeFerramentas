var url = window.location.href;
		if(url.includes("?errorCon")){
			document.getElementById('pAviso1').style.display = "block";
			//document.getElementById("pAviso1").innerHTML = "<p>error con</p>";
        }
            else if(url.includes("?errorAuth")){
                document.getElementById('pAviso2').style.display = "block";
                //document.getElementById('pAviso2').innerHTML = "<p>error auth</p>";
            }
                else if(url.includes("?#null")){
                    document.getElementById('pAviso3').style.display = "block";
                    //document.getElementById('pAviso3').innerHTML = "<p>error auth</p>";
                }
                    else if(url.includes("?errorExist")){
                        document.getElementById('pAviso4').style.display = "block";
                     //   document.getElementById('pAviso3').innerHTML = "<p>error auth</p>";   
                    }
                        else if(url.includes("?sucess")){
                            document.getElementById('pAviso5').style.display = "block";
                        }
