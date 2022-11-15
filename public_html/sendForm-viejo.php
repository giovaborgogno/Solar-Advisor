<?php

//recapthca

# Aquí pon la clave secreta que obtuviste en la página de developers de Google
define("CLAVE_SECRETA", "6LcxO3wiAAAAACBcFWLVUYCuVga9dE2AD-W9cSp9");

# Comprobamos si enviaron el dato
if (!isset($_POST["g-recaptcha-response"]) || empty($_POST["g-recaptcha-response"])) {
    exit("Debes completar el captcha");
}

# Antes de comprobar usuario y contraseña, vemos si resolvieron el captcha
$token = $_POST["g-recaptcha-response"];
$verificadoCaptcha = verificarToken($token, CLAVE_SECRETA);

/**
 * Verifica el token del captcha y regresa true o false
 * true en caso de que el usuario haya pasado la prueba
 * false en caso contrario
 * 
 * Más información: https://parzibyte.me/blog/2019/08/21/peticion-http-php-json-formulario/
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */
function verificarToken($token, $claveSecreta)
{
    # La API en donde verificamos el token
    $url = "https://www.google.com/recaptcha/api/siteverify";
    # Los datos que enviamos a Google
    $datos = [
        "secret" => $claveSecreta,
        "response" => $token,
    ];
    // Crear opciones de la petición HTTP
    $opciones = array(
        "http" => array(
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos), # Agregar el contenido definido antes
        ),
    );
    # Preparar petición
    $contexto = stream_context_create($opciones);
    # Hacerla
    $resultado = file_get_contents($url, false, $contexto);
    # Si hay problemas con la petición (por ejemplo, que no hay internet o algo así)
    # entonces se regresa false. Este NO es un problema con el captcha, sino con la conexión
    # al servidor de Google
    if ($resultado === false) {
        # Error haciendo petición
        return false;
    }

    # En caso de que no haya regresado false, decodificamos con JSON
    # https://parzibyte.me/blog/2018/12/26/codificar-decodificar-json-php/

    $resultado = json_decode($resultado);
    # La variable que nos interesa para saber si el usuario pasó o no la prueba
    # está en success
    $pruebaPasada = $resultado->success;
    # Regresamos ese valor, y listo (sí, ya sé que se podría regresar $resultado->success)
    return $pruebaPasada;
}
// fin recaptcha

if ($verificadoCaptcha) {
    if (isset($_POST['email'])) {

        /* $url = $_POST['website']; // required
        $company = $_POST['company']; // required
        $fname = $_POST['fname']; // required
        $lname = $_POST['lname']; // required
        $phone = $_POST['phone']; // required
        $email_from = $_POST['email']; // required
        $comments = $_POST['message']; // required */

        $firstn = $_POST['firstn'];
        $lastn = $_POST['lastn'];
        $email_from = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // $email_message = "First Name: $firstn \n Last Name: $lastn \n Email: $email_from \n Subject: $subject \n Phone: $phone \n Message: $message";

        if(isset($_POST['name'])){
            $reason = $_POST['name']; // required
          } else {
            $reason = 'Not specificated';
          }
      
          $email_message = "";
      
          $email_message .= "<b>First Name:</b> ".$firstn."<br>";
          $email_message .= "<b>Last Name:</b> ".$lastn."<br>";
          $email_message .= "<b>Phone:</b> ".$phone."<br>";
          $email_message .= "<b>Email:</b> ".$email_from."<br>";
          $email_message .= "<b>Subject:</b> ".$subject."<br>";
          $email_message .= "<b>Message:</b> ".$message."<br>";
          if($reason != 'Not specificated'){
            $email_message .= "<b>Reasons:</b> <br>";
            for ($i = 0; $i < count($reason) ; $i++) {
              $email_message .= "- " . $reason[$i] . "<br>"; 
            }
          } else {
            $email_message .= "<b>Reason:</b> Not specificated";
          }
        try {
            require_once('phpmailer/class.phpmailer.php');
            require_once('phpmailer/class.smtp.php');
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'c1310741.ferozo.com';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPAuth = true;
            $mail->Username = "newlead@solaradvisor.us";
            $mail->Password = "xUzPQD*5bW";
            $mail->CharSet = "UTF-8";
            $mail->SetFrom($email_from);
            $mail->AddReplyTo($email_from);
            $mail->Subject = "New client";
            $mail->AltBody = "Para ver este mensaje, por favor habilite las imágenes y el contenido HTML.";
            $mail->MsgHTML($email_message);
            $mail->AddAddress("facu.tha@gmail.com");
            $mail->AddAddress("wilson@solaradvisor.us");
            $mail->AddAddress('giovanni@openm.us');

            $response = $mail->Send();

            if ($response) {
                $status = [
                    'status' => 'success',
                ];
                echo "We've received your email, we will contact you shortly. Thank you!";
            } else {
                $status = [
                    'status' => 'error'
                ];
                echo "An error ocurred, please try again.";
            }

            // echo json_encode($status);
        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}";
        }
    }
} else {

    exit("Lo siento, parece que eres un robot");
}
