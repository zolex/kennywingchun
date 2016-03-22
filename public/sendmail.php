<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);

ob_start();
print_r($_POST);
$body = ob_get_clean();

$smtpConfig = include('../shared/smtp.conf.php');

require '../vendor/autoload.php';

$transport = \Swift_SmtpTransport::newInstance(
		$smtpConfig['host'],
		$smtpConfig['port']
	)->setUsername($smtpConfig['user'])
	 ->setPassword($smtpConfig['password']);

$mailer = \Swift_Mailer::newInstance($transport);
$message = \Swift_Message::newInstance();
$message->setSubject("Contact Form")
	->setFrom(array('noreply@3886records.de' => 'Kenny Wing Chun'))
	->setTo(array("spekta@3886records.de"))
	->setBody($body, 'text/plain');


$mailer->send($message);

header('Location: /contact?sent=1#contactform');