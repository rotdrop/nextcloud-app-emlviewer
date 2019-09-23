<?php

require __DIR__ . '/vendor/autoload.php';

use ZBateson\MailMimeParser\MailMimeParser;
use ZBateson\MailMimeParser\Message;

$eml_file = $_POST['eml_file'];

if(isset($_POST['eml_file']) && !empty($_POST['eml_file'])){
	$message = Message::from(urldecode($eml_file));
	$email = '';

	$email .= '<p style="margin-top: 30px;">From: <strong>'.$message->getHeaderValue('From').'</strong></p>';
	$email .= '<p>To: <strong>'.$message->getHeaderValue('To').'</strong></p>';
	if(!empty($message->getTextContent()))
		$email .= '<button type="button" style="margin-top" id="toggle-text-content">Display text content</button><div id="email-text-content">Message:<br> '.$message->getTextContent().'</div>';
	if(!empty($message->getHtmlContent()))
		$email .= '<div>Content:<br> <iframe id="email-html-content" srcdoc="'.str_replace('"', '\'', $message->getHtmlContent()).'" style="width: 100%; min-height: 500px;"></iframe></div>';

	echo $email;
} else {
	echo 'Could not generate email preview';
}
