console.log("labas vakaras");

var name = "Tomas"; // Globalus

function spausdina() {
  console.log(name);
  var name = "Paulius"; // lokalus
  console.log("var name = Paulius:", name);
  console.log("this.name :", this.name);
}

spausdina();

if (true) {
  name = "Jonas"; // globalus
  var name = "Antanas"; // localus (var - )
  console.log(name);
}




var salis = {
  pavadinimas : "Lietuva",
  dirbti : function () {
      console.log("dirbu");
      pavadinimas = "Latvija";
      console.log("pavadinimas: ", pavadinimas);

      var miestas = {
        prosenelis : this, // prosenelis - patys sugalvojame
        vardas : "Kaunas",
        spausdinaMiesta : function () {
          console.log("Miesto vardas: ", this.vardas); // bandome isvesti teva
          console.log("Salies pavadinimas: ", this.prosenelis.pavadinimas);
          console.log("Zmogaus vardas: ", name);
        }
      };
      miestas.spausdinaMiesta(); //tik funkcijos viduje galime atlikti veiksmus
  }
};

console.log(salis.pavadinimas);
salis.dirbti(); // () paleidzia f-ja
