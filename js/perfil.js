
function Confirmar(){
    let respuesta = confirm("¿Estas seguro de eliminar al usuario?");
	if(respuesta){
		return true;
	}else{
		return false;
	}
}
