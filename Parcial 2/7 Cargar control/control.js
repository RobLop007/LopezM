function ajaxFunction()
{
    var ajaxRequest;
    ajaxRequest=new XMLHttpRequest();

    ajaxRequest.onreadystatechange = function()
    {
        if(ajaxRequest.readyState == 4)
        {
            document.formulario1.hora.value = ajaxRequest.responseText;
        }
    };
    ajaxRequest.open("GET" ,"control.php", true);
    ajaxRequest.send();
}