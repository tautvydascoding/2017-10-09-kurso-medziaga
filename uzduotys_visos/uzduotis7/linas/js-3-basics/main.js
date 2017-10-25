console.log ("Labas");

// document.querySelector('main').innerHTML = "Tekstas 1 <br>";
// document.querySelector('main').innerHTML += "Tekstas 2 <br>";
// document.querySelector('main').innerHTML += "Tekstas 3 <br>";
// document.querySelector('main').innerHTML += "Tekstas 4 <br>";
// document.querySelector('main').innerHTML += "Tekstas 5 <br>";
// document.querySelector('main').innerHTML += "Tekstas 6 <br>";


//arba naudojant ciklus

for ( i = 0; i < 10; i++) {
  console.log(i);
  document.querySelector('main').innerHTML +="Tekstas" + i + "<br>";
}
