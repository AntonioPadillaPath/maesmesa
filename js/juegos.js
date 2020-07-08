
let modal = document.getElementById("miModal1");
let flex = document.getElementById("flex1");
let abrir = document.getElementById("abrir");
let cerrar = document.getElementById("close1");

abrir.addEventListener("click", function(){
    modal.style.display = "block";
})

cerrar.addEventListener("click", function(){
    modal.style.display = "none";
})

window.addEventListener("click", function(e){
    if(e.target == flex)
    {
        modal.style.display = "none";
    }
})