<?php

define('EMAIL_DEFAULT_FROM_ADDRESS', 'contato@neovu.com.br');
define('EMAIL_DEFAULT_FROM_NAME', 'Infosystem');
define('FORM_BLOCK_SENDER_EMAIL', EMAIL_DEFAULT_FROM_ADDRESS);
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
    if (($_POST['name'] !== '') AND ( $_POST['email'] !== '') AND ( $_POST['subject'] !== '') AND ( $_POST['message'] !== '')) {
        $to = 'contato@neovu.com.br'; //please put ours.

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        $subject = 'From: ' . $email . ' : ' . $subject;
        if (mail($to, $subject, $message, 'From: ' . $to)) {
            echo 'success|Obrigado ' . $name . '. Conversamos em breve...';
        } else {
            echo 'erro|Opps, ' . $name . ' algo deu errado. Entre em contato via rede sociais';
        }
    } else {
        echo 'error|Opa, ' . $name . ' todos os campos são necessários.';
    }
    return;
}
?>