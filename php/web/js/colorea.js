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
    				document.getElementById(nombrecelda).bgColor='#72FD72'; 
    			}
    			else{
					document.getElementById(nombrecelda).bgColor='#FD4E4E'; 
    			}
    		}
		}

         for (i = 1; i < 9; i++) {
            var nombrecelda = "total" + i ;
            if (totales[i] < 10){
                    document.getElementById(nombrecelda).bgColor='#FD4E4E'; 
                }
            else if (totales[i] == 10){
                    document.getElementById(nombrecelda).bgColor='#FFFB87'; 
                }
             else if (totales[i] == 11){
                    document.getElementById(nombrecelda).bgColor='#C7DEA5'; 
                }
             else if (totales[i] == 12){
                    document.getElementById(nombrecelda).bgColor='#89D99A'; 
                }
             else if (totales[i] == 13){
                    document.getElementById(nombrecelda).bgColor='#4AF38D'; 
                }
             else if (totales[i] == 14){
                    document.getElementById(nombrecelda).bgColor='#4AF3DA'; 
                }
            else {
                     document.getElementById(nombrecelda).bgColor='#FD4E4E'; 
            }
        }

	
}