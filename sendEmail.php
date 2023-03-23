<?php
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php'; // assuming PHPMailer is installed via Composer
echo 'test 2';
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
  // Configure SMTP settings
  $mail = new PHPMailer();
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail->Username = 'shahzebkhattk703@gmail.com';
    $mail->Password = 'hypaltbwjqihuphe';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';

  // Set sender and recipient email addresses
  $mail->isHtml(true);
  $mail->setFrom($email, $name);
  $mail->addAddress('aman.bangashqau2@gmail.com', 'Aman'); // replace with recipient email address and name

  // Set email subject and message
  $mail->Subject = ("$email ($subject)");
  $mail->Body = $message;

  // Send email
  if($mail->send()){
        $status = "Success";
        $response = "Email is Sent";
    }
    else {
     $status = 'failed';
        $response = 'Somthing is wrong:<br>' . $mail->ErrorInfo;
 }
//   $mail->send();

  echo 'Email sent successfully';
} catch (Exception $e) {
  echo 'Email could not be sent. Error message: ', $mail->ErrorInfo;
}
?>