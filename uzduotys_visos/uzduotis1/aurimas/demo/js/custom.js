$(window).on('load', function(){
    var parnidisFoto = 0;
    for (var i=0; i<$('.parnidis img').length; i++) {
        parnidisFoto += $('.parnidis img')[i].clientHeight;
    }
  var scrollPos = parnidisFoto - $(window)[0].innerHeight;
  console.log(scrollPos);

  $(window).scroll(function() {
    if ($(document).scrollTop() > 0 && $(document).scrollTop()< scrollPos) {
      $(".fixed").css('top', $(document).scrollTop());
    } else {
      $(".fixed").removeClass("position-fixed");
    }
  });
});
