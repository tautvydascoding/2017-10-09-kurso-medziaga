$(function () {

  $('[data-toggle="popover"]').popover();

  (function($) {
      "use strict";

      // manual carousel controls
      $('.next').click(function(){ $('.carousel').carousel('next');return false; });
      $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
  })(jQuery);


  $(".kortu-footer p").click(function() {
      var nr = $(this).attr('straipsnioID');
    $.ajax({    //create an ajax request to load_page.php
      type: "GET",
      url: "getData.php",
      data: {
          nr
      },
      dataType: 'json',   //expect html to be returned
      success: function(response){
          console.log(response);
          $("#foto-padidinta").attr("src", "./images/" + response["photo"]);
          $("#lankytojo-vardas").html(response["name"]);
          $("#straipsnis-padidintas").html(response["comment"]);
          console.log('pavyko');
      },
      error: function(){
          console.log('nepavyko');
      }
  });
});
});
