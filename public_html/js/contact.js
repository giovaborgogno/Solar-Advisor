function sendForm(submitButton){
                
    $.ajax({
        type: "POST",
        url: 'contact.php',
        data: {
            'firstn': fullname,
            'secondn': email,
            'email': email,
            'phone': phone,
            'subject': subject,
            'message': message,
        },
        success: function (data) {
            console.log(JSON.parse(data));
            let dataJson = JSON.parse(data);

            if(dataJson.status != 'error'){                
                submitButton.text("¡Descuento enviado!");
                // alert(`Descuento enviado a tu correo ${dataJson.email} con éxito!`);
                Swal.fire({
                    icon: 'success',
                    title: 'Done!',
                    text: `Se te ha enviado el descuento para la cursada, revisa tu correo "${dataJson.email}"`,
                    footer: `<a href="${dataJson.link}" target="_blank">Revisa el programa de ${dataJson.lang_selected} aquí.</a>`
                  }) 
            } else {
                submit.prop("disabled", false);
                submit.removeClass("deshabilitado");
                submit.text("¡Solicitar descuento!");
                alert(`Ocurrió un error`);
            }

                         
            
        },
        error: function (res) {
            
            submit.prop("disabled", false);
            submit.removeClass("deshabilitado");
            submit.text("¡Solicitar descuento!");
            alert(`Ocurrió un error`);
        }
    });
}