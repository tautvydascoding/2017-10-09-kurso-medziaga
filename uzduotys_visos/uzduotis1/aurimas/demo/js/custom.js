$(window).on('load', function(){
    var parnidisFoto = 0;
    for (var i=0; i<$('.parnidis img').length; i++) {
        parnidisFoto += $('.parnidis img')[i].clientHeight;
    }
  var scrollPos = parnidisFoto - $(window)[0].innerHeight;

  $(window).scroll(function() {
    if ($(document).scrollTop() <= scrollPos) {
        $(".fixed").css('top', "0");
    } else if ($(document).scrollTop() > scrollPos) {
      $(".fixed").css('top', scrollPos-$(document).scrollTop());
    }
    
  });


});
