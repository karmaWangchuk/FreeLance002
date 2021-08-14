<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';



if(isset($_POST)) {
    
    $fname = $_REQUEST['fname'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];

    $message = "<html>
        Name: $fname <br>
        Phone No: $phone <br>
        Email: $email 
        </html>   
    ";
    $to = "phenompick@gmail.com";
    $to1 = "phemompickleads@gmail.com";

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = '2';                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "cpanel-box5591.bluehost.com";                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'server@pickphenom.com';                     //SMTP username
    $mail->Password   = 'Picksnow2420!';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = '26';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom("server@pickphenom.com", "Server");
    $mail->addAddress($to);    
    $mail->addAddress($to1);    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'NO-REPLY';
    $mail->Body    = $message;
        
    
    // mail($to,$subject,$message,$headers);
    if($mail->send()){
        // echo "Mail send";
        header("location:index.php?confirm");
    }

    $mail->smtpClose();
}

?>