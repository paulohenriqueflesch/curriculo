function send_mail() {
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var subject = jQuery("#subject").val();
    var message = jQuery("#message").val();
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var flag = 0;
    if (name == "") {
        jQuery("#name").addClass('invalid');
        jQuery("#val_user_name").html("Seu nome é obrigatório");
        flag = 1;
    } else {
        jQuery("#name").removeClass('invalid');
        jQuery("#val_user_name").html("");
    }

    if (email == "") {
        jQuery("#email").addClass('invalid');
        jQuery("#val_user_email").html("Digite seu e-mail");
        flag = 1;
    } else if (!email.match(mailformat)) {
        jQuery("#email").addClass('invalid');
        jQuery("#val_user_email").html("Por favor digite um e-mail válido");
        flag = 1;
    } else {
        jQuery("#email").removeClass('invalid');
        jQuery("#val_user_email").html("");
    }

    if (subject == "") {
        jQuery("#subject").addClass('invalid');
        jQuery("#val_subject").html("O assunto é obrigatório");
        flag = 1;
    } else {
        jQuery("#subject").removeClass('invalid');
        jQuery("#val_subject").html("");
    }
    if (message == "") {
        jQuery("#message").addClass('invalid');
        jQuery("#val_message").html("Por favor digite uma mensagem");
        flag = 1;
    } else {
        jQuery("#message").removeClass('invalid');
        jQuery("#val_message").html("");
    }

    if (flag == 1) {
        return false;
    }

    var data = {
        "name": name,
        "email": email,
        "subject": subject,
        "message": message,
    };

    jQuery.ajax({
        type: "POST",
        crossOrigin: true,
        url: "process_form.php",
        data: data,
        success: function(response) {
            console.log(response);
            if (response == '1') {
                jQuery('#suce_message').show();
                jQuery("#contact-form")[0].reset();
            } else {
                jQuery('#err_message').show();
            }
        }
    });

}