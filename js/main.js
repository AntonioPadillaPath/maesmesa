$(document).ready(function()
{
    $(".cajalogo").hide();
});

$(document).ready(function()
{
    var altura = $(".separador").offset().top;

    $(window).on("scroll", function(){
        if($(window).scrollTop() > (altura - 80))
        {
            $(".cajalogo").show(500);
        }
        else
        {
            $(".cajalogo").hide(500);
        }
    });
});
