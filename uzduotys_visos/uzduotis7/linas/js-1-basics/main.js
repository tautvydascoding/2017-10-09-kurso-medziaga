console.log ("Labas");

document.getElementById("cia").innerHTML = "Naujas tekstas";
document.querySelector ("#cia").innerHTML = "Dar naujesnis tekstas";
document.getElementsByClassName("klase")[2].innerHTML = "Naujas tekstas 2";
document.getElementsByTagName('h1')[0].innerHTML += " naujas h1";

document.querySelector('#cia').innerHTML = "Dar naujesnis tekstas2";
document.querySelector('.klase').innerHTML = "Dar naujesnis tekstas2";
document.querySelectorAll('.klase')[1].innerHTML = "Dar naujesnis tekstas2";
