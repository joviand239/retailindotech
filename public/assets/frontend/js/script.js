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


    $('#reservation-wizard').smartWizard({
        selected: 0,
        theme: 'circles',
        transitionEffect:'fade',
        showStepURLhash: false,
        hideButtonsOnDisabled: true,
        toolbarSettings: {
            toolbarPosition: 'bottom',
            showNextButton: false,
            showPreviousButton: false,
        },
        anchorSettings: {
            markDoneStep: true, // add done css
            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        }
    });


    $("#reservation-wizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        var elmForm = $("#form-step-" + stepNumber);
        // stepDirection === 'forward' :- this condition allows to do the form validation
        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('validate');

            var elmErr = elmForm.find('.has-error');
            if(elmErr && elmErr.length > 0){
                // Form validation failed
                return false;
            }
        }
        return true;
    });

});