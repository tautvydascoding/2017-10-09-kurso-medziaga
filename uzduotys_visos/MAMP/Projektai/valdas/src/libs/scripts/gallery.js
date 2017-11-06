if($('#gallery').length) {

	var activeGalleryImg;
	var fullSmallWidth;
	var item;
	var leftDivWidth;
	var moveRight;
	var images;
	var imgsrc;
	var bigImageSrc;

	function countMoveRight() {
		leftDivWidth = $(".left")[0].clientWidth;
		fullSmallWidth = 0;
		item = 0;

		for (var i = 0; i < $('.small-image').length; i++) {
			item = $('.small-image').get(i).clientWidth;
			fullSmallWidth += item + parseInt($(".small-image").css('marginRight')) + parseInt($(".small-image").css('marginLeft'));
		}

		moveRight = (fullSmallWidth - leftDivWidth) / ($('.small-image').length - 1);
	}

	function setLeftSmallImages() {
		$(".small-image").css("left", "-" + activeGalleryImg * moveRight + "px");
	}

	function loadActiveImg() {
		$('.activeGalleryImg').removeClass('activeGalleryImg');
		bigImageSrc = $(".small-image img")[activeGalleryImg].src;
		$(".small-image").eq(activeGalleryImg).addClass("activeGalleryImg");
		$(".main-image").attr('src', bigImageSrc);
	}

	function changeImg($event) {

		if ($event === 'prev') {
			if (activeGalleryImg > 0) {
				activeGalleryImg--;
			} else if (activeGalleryImg === 0) {
				activeGalleryImg = $(".small-image").length - 1;
			}
		} else if ($event === 'next') {
			if (activeGalleryImg < $(".small-image").length - 1) {
				activeGalleryImg++;
			} else if (activeGalleryImg === $(".small-image").length - 1) {
				activeGalleryImg = 0;
			}
		} else {
			images = $.map($(".small-image img"), function (i) {
				return i.src;
			});
			imgsrc = $($event.target)[0].src;
			activeGalleryImg = images.indexOf(imgsrc);
		}

		loadActiveImg();
		setLeftSmallImages();
	}

	function showFullScreen() {
		$(".full-screen-hidden").fadeIn(400);
	}

	function closeFullScreen() {
		$(".full-screen-hidden").fadeOut(400);
	}

	$(window).on("load", function () {
		activeGalleryImg = 0;
		loadActiveImg();
		countMoveRight();
	});

	$(window).on('resize', function () {
		countMoveRight();
		setLeftSmallImages();
	});

	window.addEventListener('keydown', function (event) {
		if (event.keyCode === 37) {
			changeImg("prev");
		} else if (event.keyCode === 39) {
			changeImg("next");
		} else if (event.keyCode === 27) {
			closeFullScreen();
		}
	});

	var galleryMc = new Hammer(document.getElementById('gallery'));

	galleryMc.on("swipeleft", function () {
		changeImg("prev");
	});

	galleryMc.on("swiperight", function () {
		changeImg("next");
	});
}
