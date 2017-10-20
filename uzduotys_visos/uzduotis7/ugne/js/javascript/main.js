console.log ("Labas");

document.write("<h1> Mokomes toliau js </h1>");

var text = "<h3> Laba diena </h3>";
document.write(text);

document.getElementById("cia").innerHTML = "new text";
/*cia yra selector, dar galima naudot class ir element*/

/*document.getElementByElement("h1").innerHTML = "NAujas tesktas"*/


document.getElementsByClassName("klase")[0].innerHTML = "naujas tekstas";

document.getElementsByTagName("h1")[1].innerHTML += "Pakeistas h1";

document.querySelector("#cia").innerHTML = "newest text";
document.querySelectorAll(".klase")[2].innerHTML = "Dar Naujesnis Tekstas";

/*-------------------------------------------*/
