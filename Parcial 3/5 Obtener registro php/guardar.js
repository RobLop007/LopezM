const btnConfirmar = document.querySelector("#btnGenReg");
const formulario = document.querySelector(".formulario");

btnConfirmar.addEventListener("click", async () => {
  respuesta = await fetch("./my.php");
  data = await respuesta.json();
  console.log(data);
    document.getElementById("#nombres").value=data.nombres
    document.getElementById("#apellido").value=data.apellido
    document.getElementById("#mail").value=data.mail
    document.getElementById("#telefono").value=data.telefono
    document.getElementById("#fechaNac").value=data.fechaNac
    document.getElementById("#genero").value=data.genero
    document.getElementById("#id").value=data.id
    document.getElementById("#contraseña").value=data.contraseña    
    document.getElementById("#contraseñaVer").value=data.contraseñaVer
});
