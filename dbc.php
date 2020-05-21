<?php
//$username = 'u469526795_oneiros';
//$pass = 'oneiros';
//$dbname = 'u469526795_oneiros';
$username = 'root';
$pass = '';
$dbname = 'oneiros19';
$servername = 'localhost';
$conn = mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn)
{
    echo "Could Not Connect To The Database". myslqi_error($conn);
}


function sendmail($e, $n)
{
    $email = $e;
    $name = $n;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'mailer/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = 4;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webmaster@oneiros.co.in';                     // SMTP username
    $mail->Password   = 'Webmaster@312';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webmaster@oneiros.co.in', 'Oneiros19');
    $mail->addAddress($email, $name);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('webmaster@oneiros.co.in');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Registration Successfull';
    $mail->Body    = '<h1><b> Greetings, </b> <br><br> Thanks for signing up for Oneiros, 2019. You&apos;re in for a ride, for sure! The theme for this year shall be <b> Melange </b>. We really hope that you have a great time in our prime culture festival, and you grace us with your presence for the same. <br><br> <b> Regards, <br> Team Oneiros </b> <p>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Successfully Registered';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>
