<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$c = true;

	foreach ( $_POST as $key => $value ) {
		switch ($key)
		{
			case "name": { $puy="Имя или название организации"; break;}
			case "subject": { $puy="Тема сообщения"; break;}
			case "email": { $puy="Email"; break;}
			case "message": { $puy="Сообщение"; break;}        
			default: {$puy="Безымянное поле"; break;}
		}
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$puy</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			</tr>
			";
	}


$message = "<table style='width: 100%;'>$message</table>";

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alek.ivanov.951@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'LszmP2ZsFXc5imTqyCvQ'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('alek.ivanov.951@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('aleksandrbondarev266@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Сообщение клиента с сайта';
$mail->Body    = $message;
$mail->AltBody = '';

if(!$mail->send()) {
    header('location: error.html');
} else {
    header('location: thank-you.html');
}
?>