$(document).ready(function() {
    $(window).scroll(function() {

        if ($(this).scrollTop() > 100) {
            $('nav').addClass('scrolled');
        } else {
            $('nav').removeClass('scrolled');
        }

    });
});
