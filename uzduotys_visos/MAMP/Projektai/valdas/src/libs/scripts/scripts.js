$('document').ready(function() {

});

function toggleAsideButton() {
    var buttons = $('#close, #hamburger');
    for (var i = 0; i < buttons.length; i++)
        if (buttons.eq(i).css('display') === "none") {
            buttons.eq(i).show();
        }
    else {
        buttons.eq(i).hide();
    }
}

function toggleAside() {
    $('aside').toggleClass('aside-show');
}

function closeAside() {
    if ($('aside').css('right') === "0px") {
        toggleAside();
        toggleAsideButton();
    }
}

function checkPageOpen(pageName) {
    if (!pageName) {
        pageName = $('section:visible')[0].className;
    }
    if (document.getElementsByClassName(pageName).length > 0) {
        var activePage = document.getElementById(pageName);
        if (activePage) {
            activePage.classList.add('active');
        }
    } else {
        $('.menu-item').removeClass('active');
    }
}

function searchToggle(event) {
    if (event) {
        event.preventDefault();
    }

    $('#search').fadeToggle(400);
    $('#search-button').children().toggleClass('active');
    if ($('#search-button').children().hasClass('active')) {
        $('.menu-button').children().removeClass('active');
    } else {
        checkPageOpen();
    }
    if ($('aside').css('right') === "0px") {
        closeAside();
    }
}

function clearSearch() {
    $('#search-input').val("");
}

function closeLogin() {
    $('.login-button').children().removeClass('active');
    $('.login').removeClass('login-active');
}

$(document).ready(function() {

    ///// Init////

    checkPageOpen();


    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var searchHeight = $('#search')[0].clientHeight;
        var windowHeight = $(window).innerHeight();
        var visibleSectionHeight =$('section:visible')[0].clientHeight;

        if (scroll > (searchHeight-windowHeight)) {
            $('#search').addClass('lock-bottom');
        } else {
            $('#search').removeClass('lock-bottom');
        }
    });

    ///// Click events /////

    $('.login-button').click(function() {
        $(this).children().toggleClass('active');
        $('.login').toggleClass('login-active');
    });

    $('.search-form a').click(function() {
        clearSearch();
        $(".search-form a").css('opacity', '0');
        $('.products-search-block').html("");
    });

    $('.button-delete').click(function($event) {
        $event.preventDefault();
        $('.confirm-delete').removeClass('hidden-confirm');
    });

    $('.admin-button-edit, .confirm-delete').click(function($event) {
        $('.confirm-delete').addClass('hidden-confirm');
    });

    $('.manage-item-delete').click(function($event){
        $event.preventDefault();
        var id= $(this).attr('data-id');
        $("#modalid"+id).removeClass('hidden-confirm');
    });


    ///// Search X show //////

    $("#search-input").keyup(function() {
        if ($(this).val()) {
            $(".search-form a").css('opacity', '1');
        } else {
            $(".search-form a").css('opacity', '0');
        }
    });

    //////// Form validation and Email sending ///////////

    function isEmail(email) {
      var regex = /([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

    var err = false;
    function validate() {
        err = false;
        var email = $("#contact-form")[0].elements.email.value;
        var name = $("#contact-form")[0].elements.name.value;
        var subject = $("#contact-form")[0].elements.subject.value;
        var text = $("#contact-form")[0].elements.text.value;

        if (!email) {
            $('#your-email').addClass('err-message');
            $('#your-email').attr('placeholder', 'Please fill your e-mail');
            err = true;

        } else if (!isEmail(email) && email) {
            $('#your-email').addClass('err-message');
            $('#your-email').val('');
            $('#your-email').attr('placeholder', 'Invalid e-mail: ' + email);
            err = true;
        } else {
            $('#your-email').removeClass('err-message');
        }

        if (name.length===0) {
            $('#your-name').addClass('err-message');
            $('#your-name').attr('placeholder', 'Please fill your name');
            err = true;
        } else {
            $('#your-name').removeClass('err-message');
        }

        if (!subject) {
            $('#your-subject').addClass('err-message');
            $('#your-subject').attr('placeholder', 'Please fill subject');
            err = true;
        } else {
            $('#your-subject').removeClass('err-message');
        }

        if (!text) {
            $('#your-message').addClass('err-message');
            $('#your-message').attr('placeholder', 'Please fill your message');
            err = true;
        } else {
            $('#your-message').removeClass('err-message');
        }
    }

    $('#contact-form').on('submit', function($event) {
        $event.preventDefault();

        validate();

        if (!err) {
            var form = $(this);
            var serializedData = form.serialize();

            var request = $.ajax({
                url: "./email.php",
                type: "post",
                data: serializedData
            });

            request.done(function (response) {
                $('.contacts-form-container .message').html(response);
            });

            request.fail(function (jqXHR, textStatus, errorThrown){
                $('.contacts-form-container message').html("Sorry, message has not been sent, try again later");
            });
        }
    });


    //////// SEARCH AJAX //////////

    $('.search-form').on('submit', function($event) {
        $event.preventDefault();
        var form = $(this);

        if (form[0].elements[0].value) {
            var serializedData = form.serialize();

            var request = $.ajax({
                url: "./search.php",
                type: "get",
                data: serializedData
            });

            request.done(function (response) {
                if(response.length>2) {
                    $('.products-search-block').html(response);
                } else {
                    $('.products-search-block').html("<h4>No products found...</h4>");
                }
                console.log(response);
            });

            request.fail(function (jqXHR, textStatus, errorThrown){
                $('.products-search-block').html("<h4>Sorry, something went wrong...</h4>");
            });
        } else {
            $('.products-search-block').html("<h4>Please fill search form...</h4>");
        }
    });

    /// LOGIN AJAX //////

    $('#login').on('submit', function($event) {
        $event.preventDefault();
        var form = $(this);

        var serializedData = form.serialize();

        var request = $.ajax({
            url: "./login.php",
            type: "post",
            data: serializedData
        });

        request.done(function (response) {
            if(response==0) {
                $('#login #username, #login #password').addClass('err-message');
            } else if (response == 1){
                window.location.replace("./index.php");
            }
        });

        request.fail(function (jqXHR, textStatus, errorThrown){
            $('#login #username, #login #password').addClass('err-message');
        });
    });

});
