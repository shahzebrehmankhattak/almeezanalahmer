<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//$web_dir="my_sites/sps/csm/";
//$app_path="http://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
//$root_path=$_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';
// require 'PHPMailer-6.0.2/src/Exception.php';
// require 'PHPMailer-6.0.2/src/PHPMailer.php';
// require 'PHPMailer-6.0.2/src/SMTP.php';

//Load composer's autoloader
//require 'vendor/autoload.php';

function send_mail($to,$str_cc,$str_bcc,$subject,$body,$from_addr,$from_name,$from_password)
{

  $email_bcc='';
  $email_cc="";
  $cc_cnt='';
  $bcc_cnt ='';

if($str_cc!='')
{
$cc_addr=explode(",",$str_cc);
$cc_cnt=count($cc_addr);
}

if($str_bcc!='')
{
$bcc_addr=explode(",",$str_bcc);
$bcc_cnt=count($bcc_addr);
}

// $from_addr="web@spsnet.com"; //Service Account
// $from_name="SPS CSM";
// $from_password="January2018!";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $from_addr;                 // SMTP username
    $mail->Password = $from_password;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom($from_addr, 'Al Meezan Al Ahmer');
    $mail->addAddress($to);     // Add a recipient
	//$mail->addAddress('adnan.rasheed@seecs.edu.pk', 'Adnan SEECS');     // Add a recipient
   // $mail->addAddress('adnan.rasheed@outlook.com');               // Name is optional
	//$mail->addAddress('adnan.rasheed@spsnet.com');               // Name is optional

	$mail->addReplyTo($from_addr, $from_name);

	if($cc_cnt>=0)
	{
		for($i=0;$i<$cc_cnt;$i++)
		{
			//echo $cc_addr[$i] . "test";
			$mail->addCC(trim($cc_addr[$i]));
		}
	}

  if($bcc_cnt>=0)
  {
    for($i=0;$i<$bcc_cnt;$i++)
    {
      //echo $cc_addr[$i] . "test";
      $mail->addBCC(trim($bcc_addr[$i]));
    }
  }
	//$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
    //echo 'Message has been sent';
	return "sent";
} catch (Exception $e) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
	return "failed";
}

}

?>
