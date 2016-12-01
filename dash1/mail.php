<?php
    require 'session.php';
    require 'init.php';
    require 'master/PHPMailerAutoload.php';
     $sql89 = "SELECT vendor_name FROM vendor WHERE  vendor_email='{$_SESSION['login_user']}'";
     $res10 = mysql_query($sql89);
     $rowname = mysql_fetch_array($res10 , MYSQLI_ASSOC);
     
     if (isset($_POST['send'])) {


    move_uploaded_file($_FILES['desimage']['tmp_name'], "img/vendor images/" . $_FILES['desimage']['name']);

    $sql111 = "INSERT INTO notification (date,vendor,customer,quoatation,quoatation_image ) VALUES('{$_POST['date']}','{$rowname['vendor_name']}','{$_POST['to']}','{$_POST['price']}','img/vendor images/{$_FILES['desimage']['name']}' )";
    echo mysql_query($sql111) . "<br>";
    echo $rowname['vendor_name'];
    echo $_FILES['desimage']['name'];
    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kgkosalaishan@gmail.com';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->From = 'kgkosalaishan@gmail.com';
    $mail->FromName = 'Mailer';
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('kgkosalaishan@gmail.com');               // Name is optional
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment("img/vendor images/" . $_FILES['desimage']['name']);    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body = 'Price '."{$_POST['price']}";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

       
    }
?>
