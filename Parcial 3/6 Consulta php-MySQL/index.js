document.querySelector("#btnGenReg").addEventListener("click", async () =>{
    let respuesta = await fetch("guardar.php");
    let datos = await respuesta.json();

    document.querySelector("#nombre").value = datos.nombre;
    document.querySelector("#apellido").value = datos.apellido;
    document.querySelector("#correo").value = datos.correo;
    document.querySelector("#telefono").value = datos.telefono;
    document.querySelector("#fechaNac").value = datos.fechaNac;
    document.querySelector("#genero").value = datos.genero;
    document.querySelector("#id").value = datos.id;
    document.querySelector("#contraseña").value = datos.contraseña;
    document.querySelector("#contraseñaVal").value = datos.contraseñaVal;

})