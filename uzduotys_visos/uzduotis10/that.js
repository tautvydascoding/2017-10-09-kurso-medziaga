console.log("Labas");


// var vardas = "Jonas";

// function testuojuThat () {
//     var vardas = "Tim";
//     console.log("this.vardas: " + this.vardas);   // Jonas
//     console.log( "vardas: " + vardas);   // Tim
//
//     var daro = function () {
//         var that = this;
//         console.log("function daro - this.vardas: " + this.vardas);   // Jonas
//         console.log("function daro - vardas: " + vardas);   // undefined
//         // kintamuosius visada kurit virsuje, nes galite jauti err"undefined"
//         var vardas = "Mantas";
//         console.log("function daro - vardas: " + vardas);   // Mantas
//
//         var dirba = function () {
//             var vardas = "Valius";
//             console.log("function DIRBA - this.vardas: " + this.vardas);   // Jonas
//             console.log("function DIRBA - vardas: " + vardas);   // Valius
//
//             console.log("function DIRBA - THAT.vardas: " + that.vardas);
//             console.log("that: " + that);
//         };
//         dirba();
//     };
//     daro();
// }
// testuojuThat();

var vardas = "Karolis";
var objTest = {
    vardas: "Jonas",
    daro: function () {
        var vardas = "Timas";
        console.log(vardas);  // Timas
        console.log(this.vardas); // Jonas

        var that = this;
        var obj =  {
            vardas: "Nemunas",
            spausdina: function () {
                console.log("spausdina: ", obj.vardas);  // Nemunas
                console.log("spausdina: ", vardas);  // Timas
                console.log("spausdina this: ", this.vardas);  // Nemunas - nes islipo vienu aukstu auskciau
                console.log("spausdina that: ", that.vardas); //  Jonas
            }
        }
        obj.spausdina();
    }
};

objTest.daro();



function pavadinimas() {
    var lname = "petraukuonys";
    console.log(lname);
}
pavadinimas();

(function(){
    var lname = "petraukuonys";
    console.log(lname);
}) ();




 //
