    document.getElementById("btnGenReg").addEventListener("click",async()=>{
    let registro = await fetch('my.php');
    let dato = await registro.json();
    document.getElementById("nombres").value=dato.nombres
    document.getElementById("apellido").value=dato.apellido
    document.getElementById("mail").value=dato.mail
    document.getElementById("telefono").value=dato.telefono
    document.getElementById("fechaNac").value=dato.fechaNac
    document.getElementById("genero").value=dato.genero
    document.getElementById("id").value=dato.id
    document.getElementById("contraseña").value=dato.contraseña    
    document.getElementById("contraseñaVer").value=dato.contraseñaVer
    
    function displayCampos(registro){
        document.getElementById("nombres").value=regregistro.nombres
        document.getElementById("apellido").value=registro.apellido       
    }
});




/*document.getElementById("btnGetReg").addEventListener("click",function(){
            fetch('my.php')
            .then(respuesta=>respuesta.json())
                .then(dato=>console.log(dato));
        });

        function displayCampos(reg){
            document.getElementById("nombres").value=reg.nombres
            document.getElementById("apellido").value=reg.apellido       
        }*/