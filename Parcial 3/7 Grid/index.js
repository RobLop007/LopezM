$(document).ready(function () {

    const settings = {
      async: true,
      crossDomain: true,
      url: "http://localhost/LopezM/Parcial%203/7%20Grid/conexion.php",
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
});