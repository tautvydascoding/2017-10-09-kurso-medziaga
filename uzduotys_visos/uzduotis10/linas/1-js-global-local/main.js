console.log("labas vakaras");

// var name = "Tomas"; //Global
var name = "Marjia"; // global (uzrase ant virsaus)
function spausdinti() {
  console.log(this.name);
var name = "Paulius"; // local
console.log("var name = Paulius:" , name);
console.log("this.name:" , this.name);
}
spausdinti();


if (true) {
  name = "Girius";   // Global
  var name = "Petras";  // local (var sukuria nauja kintamaji)
  console.log(this.name);
}

//==============

 var salis = {
   pavadinimas : "Lietuva",
   dirbti : function() {
     console.log("dirbu");
     pavadinimas = "Latvia";
     console.log("pavadinimas: ", pavadinimas);

     var miestas = {
       vardas : "Kaunas",
       that : this, // that - patys sugalvot
       spausdinaMiesta : function () {
         console.log("Miesta vardas: ",this.vardas );// bandom issivesti tevini kintamaji
         console.log("Salies pavadinimas: ",this.that.pavadinimas );
         console.log("Petras vardas: ", name);

       }
     };
     miestas.spausdinaMiesta(); // tik f-jos viduje galite atlikti
   }

 };

 console.log(salis.pavadinimas);
salis.dirbti();
