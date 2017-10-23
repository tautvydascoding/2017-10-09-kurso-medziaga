console.log("labas vakaras");


var form = $('form')[0]; // ! jQuery selektorius viska sudeda i masyva
form.addEventListener("submit", patikrinkIvedimoLaukus);



function patikrinkIvedimoLaukus(event) {
    console.log("forma suveike");


    // kuriam objiekta
    var formData = { };
    formData.vardas = $('form input[name="name"]').val();
    formData.elpastas = $('form input[name="email"]').val();
    formData.slaptazodis = $('form input[name="pass"]').val();
    console.log(formData);
    // A
    // tikriname ar uzpildyti laukai
    if ( formData.vardas.length >= 2 && formData.elpastas.length >= 7 && formData.slaptazodis.length >= 8 ) {
            // jeigu uzpildyti laukai tinkamai
    } else {
        event.preventDefault(); // !!!!
        // console.log("Kazkuris is lauku yra blogai uzpildytas arba neuzpildytas");

        if ( ! $('h3').hasClass('bg-warning')  ) {
            var message = "<h3 class='bg-warning'> Kazkuris is lauku yra blogai uzpildytas arba neuzpildytas</h3> ";
            // "message" - kas bus idedame,  "form" - globalus kintamasis , kuri anksciau susikureme
            $(message).insertBefore(form);
        }
    }

}










// function patikrinkIvedimoLaukus(event) {
//     console.log("forma suveike");
//     event.preventDefault(); // !!!!
//
//     // kuriam objiekta
//     var formData = { };
//     formData.vardas = $('form input[name="name"]').val();
//     formData.elpastas = $('form input[name="email"]').val();
//     formData.slaptazodis = $('form input[name="pass"]').val();
//
//     if ( formData.vardas.length > 2  ) {
//         console.log(formData.vardas.length);
//     } else {
//         if(  $('h3').hasClass('bg-warning')   ) {
//             alert("aaaa");
//         }
//         var msg = "<h3 class='bg-warning'>Error</h3>";
//         $(msg).insertBefore('form');
//         // form.append("Error");  // !!!   prideda kaip paprasta teksta
//         // form.innerHTML += "ERROR"
//     }
// }


//
