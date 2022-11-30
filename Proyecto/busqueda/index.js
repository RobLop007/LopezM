$(document).ready(function () {

  const settings = {
    async: true,
    crossDomain: true,
    url: "http://localhost/LopezM/Proyecto/busqueda/conexion.php",
    method: "GET",
    headers: {
      Acept: "/",
    },
  };
  $.ajax(settings).done(function (response) {
    let tabla = JSON.parse(response);
    console.log(tabla);

    $("#jsGrid").jsGrid({
      width: "100%",
      height: "400px",
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      data: tabla,
      fields: [
        { name: "nombre", type: "text", width: 50 },
        { name: "apellido", type: "text", width: 50 },
        { name: "correo", type: "text", width: 100 },
        { name: "telefono", type: "text", width: 60 },
        { name: "fechaNac", type: "text", width: 50  },
        { name: "genero", type: "text", width: 50  },
        { name: "id", type: "text", width: 50  },
        { name: "contraseña", type: "text", width: 50  },
        { type: "control", width: 40  },
      ],
    });
  });
    
  $("#btnInsertar").click(function(){
    let Insertar = document.getElementById("nombre").value;
    
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let correo = document.getElementById("correo").value;
    let telefono = document.getElementById("telefono").value;
    let fechaNac = document.getElementById("fechaNac").value;
    let genero = document.getElementById("genero").value;
    let id = document.getElementById("id").value;
    let contraseña = document.getElementById("contraseña").value;
    if( nombre === "" || apellido ==="" || correo === "" || telefono === "" || fechaNac === "" || genero === "" || id === "" ||  contraseña === "")
    {
      swal("Por favor  llene todos los datos ");
    }
    else
    {
    $.post("./insertar.php",
    { nombre:nombre,
      apellido:apellido,
      correo:correo,
      telefono:telefono,
      fechaNac:fechaNac,
      genero:genero,
      id:id,
      contraseña:contraseña
    },function(data){
     refrescar(data);
    },"json");
    }
    
  });

});
