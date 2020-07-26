var recaptchaCallback = function(response) {
    
    $("#recaptcha-modal").modal('hide');
    
    $.post( "mailto.php", { response: response })
    .done(function( data ) {
        console.log(data);
        if(data.length > 0)
            window.location.href = data;
    });

    grecaptcha.reset();
}

$("#mailto-link").click(function(event) {

    event.preventDefault();

    var response = grecaptcha.getResponse();
    if(response.length == 0) 
    { 
        $("#recaptcha-modal").modal('show');
        return false;
    }

});