$(document).ready(function() {

    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('#brand a img').css({
                width: "180px"
            });
        } else {
            $('#brand a img').css({
                width: "235px"
            });
        }
    });

});