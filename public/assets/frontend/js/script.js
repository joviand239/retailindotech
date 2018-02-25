$(document).ready(function () {

    $('.ladda-button').attr('data-spinner-color', '#009688');
    $( '.ladda-button' ).ladda( 'bind', { timeout: 2000 } );


    $("#home-slider").lightSlider({
        item: 1,
        loop: true,
        adaptiveHeight: true,
        auto: true,
        pause: 5000,
        pauseOnHover: true,
    });


});