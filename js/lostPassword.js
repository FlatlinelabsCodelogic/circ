
jQuery(document).ready(function() {

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    jQuery(".forgot").click(function(){

        if(jQuery.trim(document.getElementById("forgot").value).length == 0){
            jQuery('.error1').html('<span style="color:red;">Please Enter an Email </span>');;
            jQuery('.error1').show();
            return false;
        }else{
            jQuery('.error1').html('<span>&nbsp;</span>');
            jQuery('.error1').hide();
        }
        var serializedValues = jQuery("#lpform").serialize();

        var form_data = {
            action: 'ajax_data',
            type: 'post',
            data: serializedValues
        };

        jQuery.post('lostPasswordDB.php', form_data, function (response) {
            alert(response);
            if(response == 'success') {
                document.location = "lostPasswordSent.php";
            }else{
                jQuery('.serror').html('<span style="color:red;">The Email you entered is invalid.</span>');
                jQuery('.serror').show();
            }
        });

        return false;
        });


jQuery(".forgotReset").click(function(){
    if(jQuery.trim(document.getElementById("resetPassword").value).length == 0){
        jQuery('.error1').html('<span style="color:red;">Please Enter a new password </span>');
        jQuery('.error1').show();
        return false;
    }else{
        jQuery('.error1').html('<span>&nbsp;</span>');
        jQuery('.error1').hide();
    }

    if(jQuery.trim(document.getElementById("resetPasswordConfirm").value).length == 0){
        jQuery('.error1').html('<span style="color:red;">Please confirm new password </span>');
        jQuery('.error1').show();
        return false;
    }else{
        jQuery('.error1').html('<span>&nbsp;</span>');
        jQuery('.error1').hide();
    }
    var serializedValues = jQuery("#lpform").serialize();

    var form_data = {
        action: 'ajax_data',
        type: 'post',
        data: serializedValues
    };

    jQuery.post('lostPasswordResetStore.php', form_data, function (response) {
        if(response == 'success') {
            document.location = "lostPasswordResetSuccess.php";
        }else{
            jQuery('.serror').html('<span style="color:red;">The Email you entered is invalid.</span>');
            jQuery('.serror').show();
        }
    });

    return false;
});
});

function formData(){
    var serializedValues = jQuery("#msform").serialize();
    var formData = {
        action: 'ajax_data',
        type: 'post',
        data: serializedValues
    };
    jQuery.post('signupDB.php', formData, function (response) {
        alert(response);
    } );
    return serializedValues;
}