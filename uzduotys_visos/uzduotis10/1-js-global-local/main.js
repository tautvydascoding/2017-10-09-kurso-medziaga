console.log("labas vakaras");


// var name = "Tomas"; // global
var name = "Marija"; // global  (uzrase ant virsasus name)

function spausdina() {
    console.log(this.name);
    var name = "Paulius";  // local
    console.log("var name = Paulius:", name);
    console.log("this.name   :", this.name);
}

spausdina();


if (true) {
    this.name = "Girius";       //  global
    var name =  "Petras";       //  local (var - )
    console.log(name);
    console.log(this.name);
}

// ==========
var salis = {
    pavadinimas : "Lietuva",
    dirbti : function() {
            console.log("dirbu");
            pavadinimas = "Latvija";
            console.log("pavadinimas: ", pavadinimas);

            var miestas = {
                prosenelis : this,    // that - patys sugalvojom
                vardas : "Kaunas",
                spausdinaMiesta: function() {
                    console.log("miesto vardas:", this.vardas);  // bandome issivensti teva
                    console.log("salies pavadinimas:", this.prosenelis.pavadinimas);
                    console.log("petras vardas:", name);
                }
            };
            miestas.spausdinaMiesta(); // tik f-jos viduje galite atlikti veiksmus
    }
};




console.log(  salis.pavadinimas);
salis.dirbti();   // () paleidzia f-ja




//
