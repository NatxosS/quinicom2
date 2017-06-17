
function funcion_colorea(){
	var resultados = new Array(15); // array con los resultados finales de los partidos
	var res = new Array(9);
	for (i=0; i <9; i++){           // creamos el array multidimensional con las apuestas de todos los jugadores 9 x 15
		res[i]=new Array(15)	;
	}

    var totales = new Array(9);
    for (i = 1; i < 9; i++) {
        totales[i] = document.getElementById("total" + i).innerText; // insertamos en el array los resultados de los aprtidos
    }

    for (i = 1; i < 15; i++) { 
    	resultados[i] = document.getElementById(i).innerText;  // guardamos las apuestas de cada jugador
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
            var nombrecelda = i + "_" + j ;  // cambiamos el color de fondo de las celdas de las apuestas
    	    if (resultados[j] == res[i][j]){
    		document.getElementById(nombrecelda).bgColor='#5CB85C';  // verde acertadas
    	    } else{
                document.getElementById(nombrecelda).bgColor='darksalmon'; // rojas no acertadas
    	    }
    	}
    }

    for (i = 1; i < 9; i++) {
        var nombrecelda = "total" + i ;     // cambiamos el color de fondo de las celdas de la fila de recuento de aciertos
        if (totales[i] < 10){
            document.getElementById(nombrecelda).bgColor='darksalmon'; 
        } else if (totales[i] == 10){
                    document.getElementById(nombrecelda).bgColor='#C7DEA5'; 
                }
             else if (totales[i] == 11){
                    document.getElementById(nombrecelda).bgColor='#5bc0de'; 
                }
             else if (totales[i] == 12){
                    document.getElementById(nombrecelda).bgColor='#D34AFF'; 
                }
             else if (totales[i] == 13){
                    document.getElementById(nombrecelda).bgColor='#FF8B00';
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