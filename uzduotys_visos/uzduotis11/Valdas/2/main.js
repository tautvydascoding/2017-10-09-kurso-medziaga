console.log("labas vakaras");


var formData = {};

// $('form').on("submit", function($event) {
//     $event.preventDefault();
//     formData.name=$('form input[name="name"]').val();
//     formData.email=$('form input[name="email"]').val();
//     formData.password=$('form input[name="password"]').val();
//     console.log(formData);
// });

// $('form')[0].addEventListener('submit', function(event) {
//     patikrinkIvedimoLaukus(event);
// });

var form =$('form')[0];

form.addEventListener('submit', patikrinkIvedimoLaukus);

function patikrinkIvedimoLaukus(event) {
    formData.name = $('form input[name="name"]').val();
    formData.email = $('form input[name="email"]').val();
    formData.password = $('form input[name="password"]').val();


    if (formData.name.length >= 2 && formData.email.length >= 7 && formData.password.length >= 8) {
    } else {
        event.preventDefault();
        var message = "Klaida";

        // if (! $('h3').hasClass("bg-warning")) {
        //     $(message).insertBefore(form);
        // }

        $('#err').html(message);
    }

}
