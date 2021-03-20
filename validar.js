



$(document).ready(function() {

function validar(){
    alert("El");
var  ALU_CORREO, ALU_CONTRASENA;
 ALU_CORREO = document.getElmentById("ALU_CORREO").value;
 ALU_CONTRASENA = document.getElmentById("ALU_CONTRASEÑA").value;
 if(ALU_CORREO === ""){
 	alert("El campo usuario está vacio");
 return false;
}
else if (ALU_CONTRASENA === ""){
    	alert("El campo usuarioS está vacio");
 return false;
}
	
}

});