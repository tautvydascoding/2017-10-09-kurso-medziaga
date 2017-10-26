console.log("labas vakaras");

var name = "Tomas"; //global

function spausdina() {
    var name = "Paulius";
    console.log(name); // Paulius
    console.log(this.name); // Tomas
}

spausdina();

if (true) {
    name = "Girius";
    var name = "Petras";
    console.log(name); //Petras
}


var salis = {
    pavadinimas: "Lietuva",
    dirbti : function() {
        console.log("dirbu");
        pavadinimas = "Latvija";
        console.log(pavadinimas);
        var miestas = {
            vardas: "Kaunas",
            that: this,  // Patys sugalvojam
            spausdinaMiesta: function() {
                console.log("Miesto vardas: " + this.vardas);
                console.log("Pavadinimas: " + this.that.pavadinimas);

            }
        };

        miestas.spausdinaMiesta();
    }

};

console.log(salis.pavadinimas);
salis.dirbti();
