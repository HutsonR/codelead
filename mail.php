<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['textsend'];
$email = $_POST['user_email'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vovolkek@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '/LMNTRIX6525'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('vovolkek@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('roma_tuzov2016@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка/Вопрос с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его майл ' .$email. '<br>Текст этого пользователя: ' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Отправка временно не работает, извиняемся за технические неполадки. В скором времени, всё будет в порядке!<br>Перейдите на главную страницу: https://hutsonr.ru/ и попробуйте связаться через telegram или whats app';
} else {
    header('location: https://codelead.ru/thanks/');
}
?>