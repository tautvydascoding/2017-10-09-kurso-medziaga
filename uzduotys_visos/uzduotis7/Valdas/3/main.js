console.log("Labas");

var turinys = document.querySelector('main');

turinys.innerHTML = "Tekstas 1 <br>";
// turinys.innerHTML += "Tekstas 1 <br>";
// turinys.innerHTML += "Tekstas 1 <br>";
// turinys.innerHTML += "Tekstas 1 <br>";

for(var i=2; i<=100; i++) {
    turinys.innerHTML += "Tekstas " + i + "<br>";
}
