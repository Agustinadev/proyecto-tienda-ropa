/*const d = document,
     $toggle = d.querySelector(".toggle");

     d.addEventListener("click", (e) => {
         if(e.target.matches(".toggle")){
         
         }
     })*/







     
     
     
     /*Menu desplegable*/ 
     const d = document,
     $ulDesplegable = d.querySelector(".ul_desplegable"),
     $botonDesplegable = d.querySelector(".boton_desplegable");
     d.addEventListener("click", (e) => {
         if(e.target.matches(".flecha_desplegable")){
             $ulDesplegable.classList.toggle("toggle");
            }
        })






//ventana modalllllllllllllll

const $fondo = d.querySelector(".fondo_transparente_productos");

d.addEventListener("click", (e)=>{
    if(e.target.matches(".vista_productos")){
        $fondo.style.display = "flex";
       }
})


d.addEventListener("click", (e)=>{
    if(e.target.matches(".modal_cerrar_productos")){
        $fondo.style.display = "none";
       }
})



