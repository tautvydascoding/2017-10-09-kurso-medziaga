if($('#slider').length) {

    var activeSlide=0;
    
    $('.slider-controls-button i').eq(activeSlide).html('lens');

    function changeSliderImg(e) {
        var sliderImages = $('.slider-images');
        var imagesSrc = $.map(sliderImages, function(i) {
            return i.src;
        });

        if (e==="prev") {
            activeSlide--;
        } else if (e==="next") {
            activeSlide++;
        } else {
            activeSlide=e;
        }
        if (activeSlide>=sliderImages.length) {
            activeSlide=0;
        } else if (activeSlide<0) {
            activeSlide=sliderImages.length-1;
        }

        sliderImages.fadeOut(300).delay(300);
        sliderImages.eq(activeSlide).fadeIn(300);

        $('.slider-controls-button').children().html('panorama_fish_eye');
        $('.slider-controls-button').eq(activeSlide).children().eq(0).html('lens');
    }

    $(document).ready(function() {

        $('.slider-controls-button').click(function() {
            var sliderImages = $('.slider-images');
            activeIndex = parseInt($(this).attr('data-index'))-1;
            var imagesSrc = $.map($(".slider-images"), function(i) {
                return i.src;
            });
            var activeImg = imagesSrc.indexOf($('.slider-images:visible')[0].src);
            if (activeIndex!=activeImg) {
                changeSliderImg(activeIndex);
            }
        });
    });

    var slider = document.getElementById('slider');

    var sliderMc = new Hammer(slider);

    sliderMc.on("swipeleft", function() {
        changeSliderImg("prev");
    });
    sliderMc.on("swiperight", function() {
        changeSliderImg("next");
    });

}
