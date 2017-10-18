console.log ("Labas");


document.write("<h1> Mokomes toliau js </h1>");

var text = "<h3> Laba diena Lietuva </h3>";

 document.write( text );

document.getElementById("cia").innerHTML = "Naujas tekstas";
document.getElementsByClassName("klase")[1].innerHTML = "Naujas tekstas 1  asdfadsf";
document.getElementsByTagName("h1")[1].innerHTML += "Pakeistas h1 ";
// // arba
// document.getElementsByTagName("h1")[1].innerHTML =  document.getElementsByTagName("h1")[1].innerHTML + "Pakeistas h1 ";
//
// // arba ta pati gali padaryti querySelector
//
// document.querySelector("#cia").innerHTML = "Dar naujasnis tekstas";
// document.querySelector(".klase").innerHTML = "Dar naujasnis tekstas";
// document.querySelectorAll(".klase")[2].innerHTML = "Dar naujasnis tekstas";




//
