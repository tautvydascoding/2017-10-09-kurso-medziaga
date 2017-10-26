console.log("labas vakaras");

 var formData = {};

    formData.vardas = $('form input[name="name"]').val();
    formData.emai = $('form input[name="email"]').val();
    formData.password = $('form input[name="pass"]').val();
    console.log(formData);
//mokomes paimt forma

var form = $('form')[0]; //jQuery selecor viska sudeda i masyva;
form.addEventListener("submit", pvzTikrintiIvedimoLaukus); //pradedam klausytis jo event, ju nera daug.
//pvz. vartotojui paspaudus submit, vyks sitas event, tada galima apsirasyti funkcija, kas ivyks paspaudus.

function pvzTikrintiIvedimoLaukus(event) {
    console.log("Forma suveike");
    
    
    var formData = {};

    formData.vardas = $('form input[name="name"]').val();
    formData.emai = $('form input[name="email"]').val();
    formData.password = $('form input[name="pass"]').val();
    console.log(formData);
}
//dabar niekur nesius, paims info ir matysim live ja, paimam info;

//toliau reikia patikrinti ar uzpildyti laukai
//tikrinti ar ivesta info tinkama, galima tikrinti ir back-end'e; front-end leidzia sukurti labiau user friendly dizaina;

if (formData.vardas.length >= 2 && formData.email.length >= 7 && formData.password.length >= 8 ) {
    
} else {
    //tikrinam ar jau yra error kad nepridaugitni error zinuciu;
    event.preventDefault(); //sita komanda sustabdo neteisingu duomenu siuntima; tada galim daryt ka norim.
    if ( ! $('h3').hasClass('bg-warning') ) {
         var message = "<h3 class='bg-warning'>Ivyko klaida</h3>";
         $(message).insertBefore(form);
    }
    
    
    //console.log ("Kazkuris is lauku blogai uzpildytas arba neuzpildytas");
   
}
//form - global kintamasis, "message" - kas bus idedame;
//reikia pries kintamuosius dar patikrinti ar jau yra error zinute ekrane.

//sustabdyma reiktu ideti ten kur kyla errors.