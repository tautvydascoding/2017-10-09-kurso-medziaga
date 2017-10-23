console.log("labas vakaras");

document.querySelector("h1").innerHTML = "Pakeistas tekstas";

$("h1")[0].innerHTML = "<h1>dar kart pakeistas</h1>";

// $(".container-fluid")
// $("#karusele")

$('h2').click( function(){

    $('h3').toggle("slow");

} );
