function maximo(objeto){
	if (objeto.value.length > objeto.maxLength)
		objeto.value = objeto.value.slice(0,objeto.maxLength);
}