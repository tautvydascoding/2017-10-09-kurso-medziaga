console.log("labas vakaras");

var name = "Tomas";

function spausdinti() { //ja reikia iskviesti, kad kazka rodytu
    console.log(name);
} 

//kvieciam funkcija:
spausdinti(); 

//spausdina "Tomas", nes kintamasis globalus;
//dabar kuriam kintamaji viduje

function spausdinti2() {
    console.log(name);
    var name = "Paulius"; //lokali reiksme;
    console.log(name); 
    console.log(this.name); //situ atveju isveda ir globalia reiksme;
} 

spausdinti2(); 


//
 if (true) {
     name = "Girius";      //global
     var name = "Petras"; //local; var sukuria atmintyje visiskai nauja kintmaji;
     console.log(name);
 }

//
 var salis = {
     pavadinimas: "JAV",
     dirbti: function() {
         console.log("dirbu");
         pavadinimas = "Lavija";
         console.log("pavadinimas:", pavadinimas);
       
         var miestas = {
             prosenelis: this, //that-issigalvotas zodis/kintamasis
             vardas: "Ryga",
             spausdinaMiesta: function() { //kaip dabar ieiti i/paleisti funkcija? Paleisti objekto viduje;
                console.log("miestas", vardas);
         }
         };
      miestas.spausdinaMiesta(); //funkcijos viduje galima atlikti veiksmus;
         console.log("miesto vardas", this.vardas);  //bandoom isvesti teva;
         console.log("salies pavadinimas", this.prosenelis.pavadinimas); //reikia sukurti kintamaji su reiksme kad galetumem pasiekti salies pavadinima
         console.log("marijos vardas", name);
     }
 };




console.log(salis.pavadinimas);
salis.dirbti(); //paleidzia funkcija.