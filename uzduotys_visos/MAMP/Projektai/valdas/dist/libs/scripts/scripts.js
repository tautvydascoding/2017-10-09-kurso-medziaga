function toggleAsideButton(){for(var e=$("#close, #hamburger"),a=0;a<e.length;a++)"none"===e.eq(a).css("display")?e.eq(a).show():e.eq(a).hide()}function toggleAside(){$("aside").toggleClass("aside-show")}function closeAside(){"0px"===$("aside").css("right")&&(toggleAside(),toggleAsideButton())}function checkPageOpen(e){if(e||(e=$("section:visible")[0].className),document.getElementsByClassName(e).length>0){var a=document.getElementById(e);a&&a.classList.add("active")}else $(".menu-item").removeClass("active")}function searchToggle(e){e&&e.preventDefault(),$("#search").fadeToggle(400),$("#search-button").children().toggleClass("active"),$("#search-button").children().hasClass("active")?$(".menu-button").children().removeClass("active"):checkPageOpen(),"0px"===$("aside").css("right")&&closeAside()}function clearSearch(){$("#search-input").val("")}function closeLogin(){$(".login-button").children().removeClass("active"),$(".login").removeClass("login-active")}$("document").ready(function(){}),$(document).ready(function(){function e(e){return/([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)}function a(){s=!1;var a=$("#contact-form")[0].elements.email.value,t=$("#contact-form")[0].elements.name.value,o=$("#contact-form")[0].elements.subject.value,l=$("#contact-form")[0].elements.text.value;a?!e(a)&&a?($("#your-email").addClass("err-message"),$("#your-email").val(""),$("#your-email").attr("placeholder","Invalid e-mail: "+a),s=!0):$("#your-email").removeClass("err-message"):($("#your-email").addClass("err-message"),$("#your-email").attr("placeholder","Please fill your e-mail"),s=!0),0===t.length?($("#your-name").addClass("err-message"),$("#your-name").attr("placeholder","Please fill your name"),s=!0):$("#your-name").removeClass("err-message"),o?$("#your-subject").removeClass("err-message"):($("#your-subject").addClass("err-message"),$("#your-subject").attr("placeholder","Please fill subject"),s=!0),l?$("#your-message").removeClass("err-message"):($("#your-message").addClass("err-message"),$("#your-message").attr("placeholder","Please fill your message"),s=!0)}checkPageOpen(),$(window).scroll(function(e){var a=$(window).scrollTop(),s=$("#search")[0].clientHeight,t=$(window).innerHeight();$("section:visible")[0].clientHeight;a>s-t?$("#search").addClass("lock-bottom"):$("#search").removeClass("lock-bottom")}),$(".login-button").click(function(){$(this).children().toggleClass("active"),$(".login").toggleClass("login-active")}),$(".search-form a").click(function(){clearSearch(),$(".search-form a").css("opacity","0"),$(".products-search-block").html("")}),$(".button-delete").click(function(e){e.preventDefault(),$(".confirm-delete").removeClass("hidden-confirm")}),$(".admin-button-edit, .confirm-delete").click(function(e){$(".confirm-delete").addClass("hidden-confirm")}),$(".manage-item-delete").click(function(e){e.preventDefault();var a=$(this).attr("data-id");$("#modalid"+a).removeClass("hidden-confirm")}),$("#search-input").keyup(function(){$(this).val()?$(".search-form a").css("opacity","1"):$(".search-form a").css("opacity","0")});var s=!1;$("#contact-form").on("submit",function(e){if(e.preventDefault(),a(),!s){var t=$(this).serialize(),o=$.ajax({url:"./email.php",type:"post",data:t});o.done(function(e){$(".contacts-form-container .message").html(e)}),o.fail(function(e,a,s){$(".contacts-form-container message").html("Sorry, message has not been sent, try again later")})}}),$(".search-form").on("submit",function(e){e.preventDefault();var a=$(this);if(a[0].elements[0].value){var s=a.serialize(),t=$.ajax({url:"./search.php",type:"get",data:s});t.done(function(e){e.length>2?$(".products-search-block").html(e):$(".products-search-block").html("<h4>No products found...</h4>"),console.log(e)}),t.fail(function(e,a,s){$(".products-search-block").html("<h4>Sorry, something went wrong...</h4>")})}else $(".products-search-block").html("<h4>Please fill search form...</h4>")}),$("#login").on("submit",function(e){e.preventDefault();var a=$(this).serialize(),s=$.ajax({url:"./login.php",type:"post",data:a});s.done(function(e){0==e?$("#login #username, #login #password").addClass("err-message"):1==e&&window.location.replace("./index.php")}),s.fail(function(e,a,s){$("#login #username, #login #password").addClass("err-message")})})});