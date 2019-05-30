$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('#topheader').addClass('fixed-white-background');
    }
    else {
        $('#topheader').removeClass('fixed-white-background');
    }
});