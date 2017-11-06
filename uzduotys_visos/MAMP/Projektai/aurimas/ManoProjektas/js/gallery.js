$(window).on('load', function() {
if ( $(window).width() > 767) {

    var containers = $('.viewportas100');
    var containersHeight = $.map(containers, function(i) {
        return i.clientHeight;
    });

    containersHeight.unshift(0);
    var divPos = [0];
    for (var i=1; i<containersHeight.length; i++) {
        divPos[i] = divPos[i-1]+containersHeight[i];
    }
    divPos=$.map(divPos, function(i) {
        return i-$(window)[0].innerHeight;
    });
    divPos.push(99999);
    divPos[0]=-containersHeight[1];

    $(window).scroll(function() {
        var scrollTop = $(document).scrollTop();
        var windowHeight = $(window)[0].innerHeight;

        for (var i = 0; i<divPos.length-1; i++) {
            if (scrollTop<divPos[i]) {
                containers.eq(i).find('.article').css('top', divPos[i]-scrollTop+windowHeight);
            } else if (scrollTop>=divPos[i]+windowHeight && scrollTop<divPos[i+1]) {
                containers.eq(i).find('.article').css('top', "0");
            } else if (scrollTop>=divPos[i]-windowHeight && scrollTop<divPos[i+1]){
                containers.eq(i).find('.article').css('top', windowHeight + divPos[i] - scrollTop);
            } else if (scrollTop>divPos[i+1]) {
                containers.eq(i).find('.article').css('top', divPos[i+1] - scrollTop);
            }
        }
    });
}
});
