var cntWd, sldWd, tb;
	$(function() {

		cntWd = $('#container').innerWidth();
		tb = $('#thumbs');
		sldWd = tb.outerWidth();

		$('#container').mousemove(function(e)
		{
			tb.css({left: ((cntWd - sldWd)*((e.pageX / cntWd).toFixed(3))).toFixed(1) +"px" });
 		});
});

console.log("veikiu");

$(".filter1").on("click", function() {
  $(".toggle-this1").slideToggle("fast");
	return false;
});

$(".filter2").on("click", function() {
  $(".toggle-this2").slideToggle("fast");
	return false;
});

$(".filter3").on("click", function() {
  $(".toggle-this3").slideToggle("fast");
	return false;
});

// kita virselio puse
