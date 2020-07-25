console.log("Este es un proyecto de Antonio Padilla Torres. CDMX Julio 2020")

//Función para cerrar la navbar cuando se dé click
$('.navbar-nav li a').on('click', function(){
    if(!$( this ).hasClass('dropdown-toggle')){
        $('.navbar-collapse').collapse('hide');
    }
});


//función para esconder el logo en la navbar y luego mostrarlo
$(document).ready(function()
{
    $(".cajalogo").hide();
});

$(document).ready(function()
{
    var altura = $(".seccion1").offset().top;

    $(window).on("scroll", function(){
        if($(window).scrollTop() > (altura - 40))
        {
            $(".cajalogo").show(500);
        }
        else
        {
            $(".cajalogo").hide(500);
        }
    });
});


//función para desplazar cajas con profundidad

let primero = document.getElementById("logoBanner");

window.addEventListener('scroll', function()
{
    var value = window.scrollY;

    primero.style.top = value * -0.3 + 'px';
})
