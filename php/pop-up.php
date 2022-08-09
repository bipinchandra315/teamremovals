<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


if(isset($_POST["email"])){
    $full_name = $_POST["full_name"];
    $phone_no = $_POST["phone_no"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $message = $_POST["message"];
    $subject = "Contact Form";
    $message = "<p><strong>Name : </strong> ".$full_name."</p> <br>
     <p><strong>Phone No : </strong> ".$phone_no."</p><br>
     <p><strong>Email : </strong> ".$email."</p><br>
     <p><strong>Course : </strong> ".$course."</p><br>
    <p><strong>Message : </strong> ".$message."</p>";
    
    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPDebug  = 0;
    $mail->Username   = 'test@bookmybuddy.com';                     //SMTP username
    $mail->Password   = 'Test@123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('test@bookmybuddy.com', $full_name);
    $mail->addAddress('proponenttechnology@gmail.com', 'Bipin');     //Add a recipient
    $mail->addReplyTo($email, $full_name);
    $mail->addCC('bipinchandra315@gmail.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject ;
    $mail->Body    = $message;
    $mail->send();
    $output = json_encode(array("status"=> true, "message"=> "Message has been sent"));
} catch (Exception $e) {
    $output = json_encode(array("status"=> false, "message"=> "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
}

echo $output;

}

