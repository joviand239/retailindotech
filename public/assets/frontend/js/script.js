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



    if ($('#product .nav-wrapper .nav').length) {
        $('.nav-wrapper .nav .nav-item:first-child .nav-link').addClass('active');
    }

    if ($('#product .tab-content').length) {
        $('.tab-content .tab-pane:first-child').addClass('show active');
    }


    $('.custom-select2').select2();

});

function customAlert(title, description, type, reload) {
    swal({
        title: title,
        text: description,
        type: type,
        confirmButtonColor: '#009688',
        confirmButtonText: 'Continue',
    }).then((result) => {
        if (reload){
            location.reload();
        }
    });
}