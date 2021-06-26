<?php
require_once __DIR__ . '/recaptchalib.php';
// Введите свой секретный ключ
$secret = "6LcAt_sZAAAAABGF679UZdsB4XGIfklVuYPZQbpj";
// пустой ответ каптчи
$response = null;
// Проверка вашего секретного ключа
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['uname']) && (empty($_POST['uemail']) || empty($_POST['uphone']))){
    echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  } else {
    if ($response != null && $response->success) {
    if (isset($_POST['uname'])) {
      $uname = strip_tags($_POST['uname']);
      $unameFieldset = "<b>Имя пославшего:</b>";
    }
    if (isset($_POST['uemail'])) {
      $uemail = strip_tags($_POST['uemail']);
      $uemailFieldset = "<b>Почта:</b>";
    }
    if (isset($_POST['uphone'])) {
      $uphone = strip_tags($_POST['uphone']);
      $uphoneFieldset = "<b>Телефон:</b>";
    }
    if (isset($_POST['formInfoT'])) {
      $formInfo = strip_tags($_POST['formInfoT']);
      $formInfoFieldset = "<b>Тема:</b>";
    }
    if (isset($_POST['formInfoT'])) {
      $formInfoT = strip_tags($_POST['formInfoT']);
      $formInfoTFieldset = "<b>Тема:</b>";
    }

    $to = "hutsonr155@gmail.com"; /*Укажите адрес, на который должно  приходить письмо  BroviBrovi@inbox.ru*/
    $sendfrom = "codelead@yandex.ru"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    $subject = "$formInfo";
    $message = "$unameFieldset $uname<br>
                $uemailFieldset $uemail<br>
                $uphoneFieldset $uphone<br>
                $formInfoTFieldset $formInfoT";

    $send = mail ($to, $subject, $message, $headers);
        if ($send == 'true') {
            echo '<p class="success">✔ Спасибо за отправку вашего сообщения! Мы свяжемся с вами как можно скорее! :) <br><br> <b>Не отправляйте сообщение снова</b></p>';
        } else {
          echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
    } else {
      echo '<p class="fail-rec">Не пройдена каптча! Перезагрузите страницу и попробуйте снова!</p>';
    }
  }
} else {
  header ("Location: https://codelead.ru/"); // главная страница вашего лендинга
}
