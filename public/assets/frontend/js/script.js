var getWindowOptions = function() {
    var width = 500;
    var height = 350;
    var left = (window.innerWidth / 2) - (width / 2);
    var top = (window.innerHeight / 2) - (height / 2);

    return [
        'resizable,scrollbars,status',
        'height=' + height,
        'width=' + width,
        'left=' + left,
        'top=' + top,
    ].join();
};

window.fbAsyncInit = function(){
    FB.init({
        appId: '301662430538025', status: true, cookie: true, xfbml: true });
};
(function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if(d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id;
    js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
    ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
function postToFeed(title, desc, url){
    var obj = {method: 'feed', link: url, picture: '', name: title, description: desc};
    function callback(response){

    }
    FB.ui(obj, callback);
}

$(document).ready(function () {
    var metaTitle = encodeURIComponent($(document).find("title").text());
    var metaDescription = $('meta[name=description]').attr("content");


    var twitterBtn = document.querySelector('.twitter-share');
    var shareUrl = 'https://twitter.com/intent/tweet?url=' + location.href + '&text=' + metaTitle;
    twitterBtn.href = shareUrl; // 1

    twitterBtn.addEventListener('click', function(e) {
        e.preventDefault();
        var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
        win.opener = null; // 2
    });


    $('.facebook-share').click(function(){
        postToFeed(metaTitle, metaDescription, location.href);

        return false;
    });

    /*$('.ladda-button').attr('data-spinner-color', '#009688');
    $( '.ladda-button' ).ladda( 'bind', { timeout: 2000 } );*/


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

    $('#btn-share').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parents('.floating-share').find('.share-list').toggleClass('active');
    })

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