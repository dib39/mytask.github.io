<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = 'pb39rus@gmail.com';

    $username = htmlspecialchars($username);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);
    $file = htmlspecialchars($file);

    $username = urldecode($username);
    $email = urldecode($email);
    $message = urldecode($message);
    $file = urldecode($file);

    $username = trim($username);
    $email = trim($email);
    $message = trim($message);
    $file = trim($file);

    $from = $email;
    $subject = 'Email';
    $headers = "From: ".$from."\r\n".
    "Reply to: ".$from."\r\n".
    "X-Mailer: PHP/". phpversion();

    $date = date('H:i:s d.m.Y');

    

    if(mail($to, $subject, $message, $headers)){
        echo 'Письмо успешно отправлено!';
    }else{
        echo 'Произошла ошибка. Проверьте корректность введённых данных.';
    }

    $file_for_message = fopen('messages.txt', "a");
    fwrite($file_for_message, $date.' '.$username.': '.$message.' '.$_FILES['file']['tmp_name']." \r\n");
    fclose($file_for_message);




    ?>
</body>
</html>