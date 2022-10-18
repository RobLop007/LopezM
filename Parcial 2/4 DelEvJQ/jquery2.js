window.onload=function()
        {
            const cont= document.querySelector(".contenedor");
            cont.addEventListener("click", (e)=>{
                e.target.classList.toggle("CajaVerde");
            })
        }
        $(document).ready(function()
        {
            $("#cont").click(function(){console.log("Ha sido presionado el contenedor")})
        })