console.log("labas vakaras");

document.querySelector("h1").innerHTML = "Pakeistas tekstas";

$("h1")[0].innerHTML = "dar karta pakeistas tekstas";

$("h2").click(function(){
    $("h1").fadeToggle("slow");
});
