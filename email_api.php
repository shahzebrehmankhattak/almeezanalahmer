<?php
header("Access-Control-Allow-Origin: *");
// $web_dir="";
// $app_path="https://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
// $root_path=$_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;
// $page_name= basename($_SERVER['PHP_SELF']);
//include('includes/header-min.php');
include('phpmailer-fn-api.php');
if(isset($_POST['message']))
{
  extract($_POST);
  // echo ;
  $email_body = $message;
  $email_to= 'aman.bangashqau2@gmail.com';
  $email_subject=$subject;
  $from_name="shahzeb";
  $from_addr='shahzebkhattak703@gmail.com';
  $from_password='hypaltbwjqihuphe';
  $email_bcc='';
  $email_cc="";
  $cc_cnt='';
  $bcc_cnt ='';

  send_mail($email_to,$email_cc,$email_bcc,$email_subject,$email_body,$from_addr,$from_name,$from_password);
  $response = array();
  $response['Email sent to Customer please Refresh page']=1;
echo   $response = json_encode($response);
}
else
{
  $response = array();
  $response['success']=0;
  $response = json_encode($response);
  echo $response;
}



?>
