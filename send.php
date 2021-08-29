<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';        
require 'vendor/autoload.php';

$result="";
$error="";
  if(isset($_POST['send'])) {
    //Проверка полей ввода
    
    $fio=filter_input(INPUT_POST, 'fio', FILTER_SANITIZE_SPECIAL_CHARS);
 
    $email=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(empty($email)) {
       $error .= "Поле email имеет неправильную структуру!<br>";
    }     
    
    $phone=filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    if(empty($phone)) {
       $error .= "Поле телефон должно содержать только цифры!<br>";
    }
    
    $birthday=explode("-",$_POST['birthday']);
    if(checkdate($birthday[1],$birthday[2],$birthday[0])==false) {
        $error .= "Поле дата рождения содержит недопустимые значения!<br>";
    } else {
        $birthday=$_POST['birthday'];
    }

    $question=filter_input(INPUT_POST, 'question', FILTER_SANITIZE_SPECIAL_CHARS);
    
    //Если ошибок нет, отправляем емейл
    if(empty($error)) {
        $mail = new PHPMailer;
        
        $mail->CharSet = 'UTF-8';

        // Настройки SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;

        $mail->Host = 'ssl://smtp.mail.ru';
        $mail->Port = 465;
        $mail->Username = '@mail.ru';//email
        $mail->Password = '###';//password
        $mail->setFrom('denis.sv1976@mail.ru', 'denis.sv1976');		
 
        $mail->Subject = "Тестовое задание - форма обратной связи";

        // Тело письма
        $body = "<p>ФИО: $fio</p><p>Email: $email</p><p>Телефон: $phone</p><p>Дата рождения: $birthday</p><p>Вопрос: $question</p>";
        $mail->msgHTML($body);
        $address='join@ecwid.com';

        $mail->addAddress($address);
        $mail->send();
        
        
        if(empty($mail->ErrorInfo)) {
            $result = "<b>Ваш вопрос успешно отправлен.</b><br><a href='index.php'>Желаете отправить еще вопрос</a>?";
        } else {
            $result="";
            $error="<b>При отправке письма возникла ошибка.</b><br>".$mail->ErrorInfo."<br>Пожалуйста, попробуйте еще раз.";
        }
        
    } else {
        $error="<b>Обнаружены следующие ошибки:</b><br>".$error."<b>Пожалуйста, исправьте их и попробуйте еще раз.</b>";
    }
  }
  ?>