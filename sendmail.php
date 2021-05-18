<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet  = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    // send mail from...
    $mail->setFrom('info@brsgroup.lv', 'Отправитель');
    // sending to...
    $mail->addAddress('mihails.kalinins@inbox.lv');
    // letters theme
    $mail->Subject = 'Новый потенциальный партнер';

    // letters body
    $body = '<h1>Hawdy partner!</h1>';

    if(trim(!empty($_POST['user-name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['user-name'].'</p>';
    }
    if(trim(!empty($_POST['user-phone']))){
        $body.='<p><strong>Телефон:</strong> '.$_POST['user-phone'].'</p>';
    }
    if(trim(!empty($_POST['user-message']))){
        $body.='<p><strong>Сообщение:</strong> '.$_POST['user-message'].'</p>';
    }


    // sending

    if(!$mail->send()){
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>




























>