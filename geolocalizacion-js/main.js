window.onload = initMap;
var map;
function initMap(){
	// Si los servicios de geolocalización están disponibles
	if(navigator.geolocation){
	// Para obtener la ubicación actual llama getCurrentPosition.
		navigator.geolocation.getCurrentPosition( 
		siHayExito,
		siHayError,
		{enableHightAccuracy: false, timeout:Infinity, maximage:0} );
	}else{ 
  alert("Los servicios de geolocalización  no están disponibles");
	}
}
function siHayExito(posicion){
	var latitud = posicion.coords.latitude
	var longitud = posicion.coords.longitude
    var x = posicion.coords.altitude
	alert("Latitud: "+latitud+"  Longitud: "+longitud+" altitud: " + x)
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: latitud, lng: longitud},
    zoom: 13
  });
  var marker = new google.maps.Marker({
    position: {lat: latitud, lng: longitud},
    map: map,
    title: 'Luis Navarrete'
  });
}


function siHayError(error){//errorHandler
// el objeto posiblesErrores traduce al castellano los posibles errores
		var posiblesErrores = {
			0:"Error desconocido",
			1:"Permiso denegado por el usuario.",
			2:"Posición no disponible",
			3:"Desconexión por tiempo"
		}
		var mensajeError = posiblesErrores[error.code];
		// error.message : información adicional
		if(error.code == 0 || error.code == 2){
			mensajeError = mensajeError +" "+error.message;
		}
		var div = document.getElementById("map");
		div.innerHTML = mensajeError;
}
