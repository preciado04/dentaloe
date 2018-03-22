<?php

/**
 * @file
 * Process to send contact email.
 */

$success_alert = 'Mensaje enviado exitosamente.';
$warning_alert = 'El mensaje no fue enviado, verificar todos los campos.';
if (!isset($_POST['send'])) {
  header("Location: ../paginas/contacto.php?false=$warning_alert");
  exit;
}
// Validate the email address first.
if (!($email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))) {
  header("Location: ../paginas/contacto.php?false=$warning_alert");
  exit;
}
// Process the form only if the email is valid.
$params = array();
$params['client_name'] = trim($_POST['name']);
$params['client_email'] = trim($_POST['email']);
$params['client_phone'] = trim($_POST['phone']);
$params['client_message'] = trim($_POST['message']);
$params['company_name'] = "Ortodoncia Dental Especializada";
$params['company_email'] = "preciado0425@gmail.com";
if (!dentaloe_mail_client($params)) {
  $warning_alert = 'algo salio mal jefe';
  header("Location: ../paginas/contacto.php?false=$warning_alert");
}
if (!dentaloe_mail_company($params)) {
  $warning_alert = 'algo salio mal en compania';
  header("Location: ../paginas/contacto.php?false=$warning_alert");
}
header("Location: ../paginas/contacto.php?true=$success_alert");

/**
 * Send Email to Client.
 */
function dentaloe_mail_client($params) {
  $message = "<p>Gracias por contactarte con Ortodoncia Dental Especializada</p>\r\n";
  $message .= "<p>Pronto nos pondrémos en contacto con ustéd.</p>\r\n";
  $message .= "<p></p>\r\n";
  $message .= "<p>Ortodoncia Dental Especializada</p>\r\n";
  dentaloe_mail(
    $params['company_name'],
    $params['company_email'],
    $params['client_name'],
    $params['client_email'],
    "Gracias por contactarte con Ortodoncia Dental Especializada",
    $message
  );
}

/**
 * Send Email to Company.
 */
function dentaloe_mail_company($params) {
  $message = "<p>Ha recibido un mensaje desde Ortodoncia Dental Especializada por parte de:</p>\r\n";
  $message .= "<p><b>Nombre:</b> {$params['client_name']}<br>\r\n";
  $message .= "<b>Telefono:</b> {$params['client_phone']} <br>\r\n";
  $message .= "<p><b>Mensaje:</b><br><br>{$params['client_message']}</p>\r\n";;
  $subject = "Mensaje de {$params['client_name']} para Ortodoncia Dental Especializada";
  dentaloe_mail(
    $params['client_name'],
    $params['client_email'],
    $params['company_name'],
    $params['company_email'],
    $subject,
    $message
  );
}

/**
 * Send Email From To, etc.
 */
function dentaloe_mail($from_name, $from_email, $to_name, $to_email, $subject, $message) {
  $headers = array();
  $headers[] = "MIME-Version: 1.0";
  $headers[] = "Content-type:text/html; charset=UTF-8";
  $headers[] = "To: {$to_name} <{$to_email}>";
  $headers[] = "From: {$from_name} <{$from_email}>";
  $headers[] = "Reply-To: {$from_email}";
  $headers = implode("\r\n", $headers);
  return mail($to_email, $subject, $message, $headers);
}
