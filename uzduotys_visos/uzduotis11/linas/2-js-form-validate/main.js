console.log("labas vakaras");


// var formData = {};
// formData.vardas = $('form input[name="name"]').val();
// formData.elpastas = $('form input[name="email"]').val();
// formData.slaptazodis = $('form input[name="pass"]').val();
//
// console.log(formData);


var form = $('form')[0];// jQuery selector viska sudeda i masyva(array)
form.addEventListener("submit", patikrinkIvedimoLaukus);

function patikrinkIvedimoLaukus(event) {

  console.log("forma suveike");


  var formData = {};
  formData.vardas = $('form input[name="name"]').val();
  formData.elpastas = $('form input[name="email"]').val();
  formData.slaptazodis = $('form input[name="pass"]').val();
  console.log(formData);
  //A
  // tikrinsime ar uzpildyti laukai
  if (formData.vardas.lenght >=2 && formData.elpastas.lenght >= 7 && formData.slaptazodis.lenght >= 8) {

  } else {
    event.preventDefault();//!!!! sustabdo action.
    // console.log("kazkuris is lauku yra blogai uzpildytas arba neuzpildytas");

      if ($('h3').hasClass('bg-warning')) {


    var message = "<h3 class='bg-warning'> kazkuris is lauku yra blogai uzpildytas arba neuzpildytas</h3> ";
    // "message" - kas bus idedama, "form" - globalus kintamasis, kuri ansciau susikureme
    $(message).insertBefore(form);
  }
}
  }
