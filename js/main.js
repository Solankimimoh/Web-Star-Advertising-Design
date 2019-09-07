$(document).ready(function() {
    var i = false;
    $('.sideBar').click(function() {
        $('.nav').toggleClass('navToggle');
        if (i == true) {
            $('.sideIcon').addClass('fa-bars');
            $('.sideIcon').removeClass('fa-times');
            i = false;
        } else {
            $('.sideIcon').addClass('fa-times');
            $('.sideIcon').removeClass('fa-bars');
            console.log(i);
            i = true;
        }
    })
})