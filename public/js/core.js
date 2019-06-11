$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('#topheader').addClass('fixed-white-background');
    }
    else {
        $('#topheader').removeClass('fixed-white-background');
    }
});

(function(){
    pagePrgoress('.page-progress',{
        color: '#31A05E',
        size: '5px',
        position: 'top',
        speed: '500'
    });
})()