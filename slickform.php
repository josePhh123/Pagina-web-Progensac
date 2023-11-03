<?php
if (isset($_REQUEST["isvalid"])) {
    $youremail = "progensac@outlook.es";
    $usersname = $_POST["usersname"];
    $usersemail = $_POST["usersemail"];
    $usersphonenumber = $_POST["usersphone"];
    $mailsubject = "Contacto desde tu formulario";
    $usersmessage = $_POST["userscomment"];
    $message = "$usersname te ha contactado desde tu sitio web.

Asunto: $mailsubject

Su mensaje es el siguiente:

$usersmessage

Contacto:
Teléfono: $usersphonenumber
Correo electrónico: $usersemail";

    $headers = 'From:' . $usersemail . "\r\n";
    mail($youremail, $mailsubject, $message, $headers);

    echo "success";
} else {
    echo "failed";
}
?>