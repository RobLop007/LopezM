window.onload=function()
{
    document.getElementById("btnAjax").addEventListener("click",pedirHeader);
    document.getElementById("btnReset").addEventListener("click",iniciarHeader);
    
    function pedirHeader()
    {
        var solicitud =new XMLHttpRequest();
        solicitud.onreadystatechange=function()
        {
            if(solicitud.readyState == 4 && solicitud.status == 200)
            {
                document.getElementById("myDiv").innerHTML=solicitud.responseText;
            }
        };
        solicitud.open("GET", "carga.js", true);
        solicitud.send();    
    }
    function iniciarHeader()
    {
        document
        .getElementById("myDiv").innerHTML="<h2>Header nivel 2</h2>";
    }
}

