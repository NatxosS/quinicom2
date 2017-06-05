function mandarnotificacion(){
	Notification.requestPermission( function(status) {
    if (status == "granted"){
    	alert('Hola');
    }
   });
}