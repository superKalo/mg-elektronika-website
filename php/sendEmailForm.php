<?php

$email_to = "superkalo91@gmail.com, mg.kosev@gmail.com";
$email_subject = "MGelektronika.com | Съобщение от уеб сайта";

extract($_POST);

$email_message = <<<EOT
	Съобщение, изпратено през контактната форма на MGelektronika.com
	
	Име: $first_name
	E-mail: $email
	
	Съобщение: $comments
EOT;

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

header('Location: http://mgelektronika.com/успешно-изпратено-съобщение');