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


let primero = document.getElementById("logoBanner");
let sec1 = document.getElementById("quienes1");

window.addEventListener('scroll', function()
{
    var value = window.scrollY;

    primero.style.top = value * -0.3 + 'px';
    sec1.style.top = value * -0.5 + 'px';
})