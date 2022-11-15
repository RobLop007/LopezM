import { mayusculas, longitud } from "./modulo.js";
document.getElementById("btn").addEventListener("click", function () {
  let valor = document.getElementById("cad").value;
  let mayus = mayusculas(valor);
  let long = longitud(valor);
  document.getElementById("cadMay").value = mayus;
  document.getElementById("long").value = long;
  console.log("hola");
});
