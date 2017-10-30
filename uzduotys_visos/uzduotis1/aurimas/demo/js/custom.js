$(document).ready(function(){
  $(window).scroll(function() {
    if ($(document).scrollTop() > 0) {
      $(".col-straipsnis").addClass("position-fixed");
    } else {
      $(".col-straipsnis").removeClass("position-fixed");
    }
  });
});
