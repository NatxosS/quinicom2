
function funcion_colorea(){
	var resultados = new Array(15)
	var res = new Array(9)
	for (i=0; i <9; i++){
		res[i]=new Array(15)	
	}

    var totales = new Array(9)
    for (i = 1; i < 9; i++) {
        totales[i] = document.getElementById("total" + i).innerText;
    }

	for (i = 1; i < 15; i++) { 
    	resultados[i] = document.getElementById(i).innerText;
    	res[1][i] = document.getElementById("1_" + i).innerText;
    	res[2][i] = document.getElementById("2_" + i).innerText;
    	res[3][i] = document.getElementById("3_" + i).innerText;
    	res[4][i] = document.getElementById("4_" + i).innerText;
    	res[5][i] = document.getElementById("5_" + i).innerText;
    	res[6][i] = document.getElementById("6_" + i).innerText;
    	res[7][i] = document.getElementById("7_" + i).innerText;
    	res[8][i] = document.getElementById("8_" + i).innerText;
	}


		for (i = 1; i < 9; i++) { 
			for (j = 1; j < 15; j++) {
				var nombrecelda = i + "_" + j ;
    			if (resultados[j] == res[i][j]){
    				document.getElementById(nombrecelda).bgColor='#5CB85C'; 
    			}
    			else{
                            document.getElementById(nombrecelda).bgColor='darksalmon'; 
    			}
    		}
		}

         for (i = 1; i < 9; i++) {
            var nombrecelda = "total" + i ;
            if (totales[i] < 10){
                    document.getElementById(nombrecelda).bgColor='darksalmon'; 
                }
            else if (totales[i] == 10){
                    document.getElementById(nombrecelda).bgColor='#C7DEA5'; 
                }
             else if (totales[i] == 11){
                    document.getElementById(nombrecelda).bgColor='#5bc0de'; 
                }
             else if (totales[i] == 12){
                    document.getElementById(nombrecelda).bgColor='#D34AFF'; 
                }
             else if (totales[i] == 13){
                    document.getElementById(nombrecelda).bgColor='#FF8B00';//FFAF50
                }
             else if (totales[i] == 14){
                    document.getElementById(nombrecelda).bgColor='red'; 
                    document.getElementById(nombrecelda).style.color='white'; 
                }
            else {
                     document.getElementById(nombrecelda).bgColor='darksalmon'; 
            }
        }

	
}