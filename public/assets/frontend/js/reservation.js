$(document).ready(function () {
    var ladda = '';

    // Toolbar extra buttons
    var btnFinish = $('#submitBtn')
        .on('click', function(){

            if( !$(this).hasClass('disabled')){
                var elmForm = $("#reservationForm");
                if(elmForm){

                    elmForm.validator('validate');
                    var elmErr = elmForm.find('.has-error');
                    if(elmErr && elmErr.length > 0){
                        customAlert('Ooops', 'There something wrong with the data, please check again or re input from the start!', 'warning')
                    }else{

                        var dataArray = elmForm.serializeArray();

                        var dataJSON = {};

                        $.map(dataArray, function(n, i){
                            dataJSON[n['name']] = n['value'];
                        });

                        $.post(reservationForm, dataJSON,
                            function(data, status){
                                if (data.status == 'success'){
                                    customAlert('Berhasil', 'Anda telah berhasil mengirim form reservasi, tim kami akan segera menghubungi Anda. Terima Kasih!', 'success', true);
                                }
                            });

                        return false;
                    }
                }
            }
        });

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