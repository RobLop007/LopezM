document.getElementById("btnGenReg").addEventListener("click",async()=>{
    let respuesta = await fetch('my.php');
    let dato = await respuesta.json();
    document.getElementById("nombres").value=dato.nombres
    document.getElementById("apellido").value=dato.apellido
    document.getElementById("mail").value=dato.nombres
    document.getElementById("contraseña").value=dato.apellido
    document.getElementById("contraseñaVal").value=dato.apellido
    
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