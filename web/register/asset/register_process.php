<?php

require 'db_connect.php';
require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/class.phpmailer.php';
require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$email = $_POST["email"];

$sql_email = "SELECT im11_email FROM web11_db_ultraline WHERE im11_email = '$email'";
$query_email = mysqli_query($conn, $sql_email);
$num_mail = mysqli_num_rows($query_email);

if ($num_mail > 0)
{
  header('Location: ../email_error.php');
}
else
{
  if (isset($_POST["fname"], $_POST["number_phone"], $_POST["email"], $_POST["check_status"], $_POST["position"], $_POST["oranization"]))
  {
    $fullname = $_POST["fname"];
    $posotion = $_POST["position"];
    $oranization = $_POST["oranization"];
    $number_phone = $_POST["number_phone"];
    $status_user = $_POST["check_status"];

    // cut string to 4 digit code
    $digi_four = substr($number_phone, 6);

    // PHP Send Email Use By PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'im11.ictsilpakorn@gmail.com';                 // SMTP username
    $mail->Password = 'Bestrong2017#';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';                                   // TCP port to connect to

    $mail->setFrom('im11.ictsilpakorn@gmail.com', 'Ultraline');
    $mail->addAddress($email , $fullname);               // Name is optional
    // $mail->addReplyTo('im11.ictsilpakorn@gmail.com', 'Ultraline');
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Ultraline : ได้ลงทะเบียนที่นั่ง';
    if (strpos($email, '@gmail') !== false)
    {
      $mail->Body    = '
      <html>
      <head>
      <style>
      @import url(https://fonts.googleapis.com/css?family=Kanit:200,400);
      h3{
            font-weight: 400;
            letter-spacing: 1px;font-size:20px;
            color:#F92387;
            font-family: "Kanit", sans-serif;
            text-shadow: 0px 0px 12px rgba(255, 255, 255, 0.29);
        }
        p{
            letter-spacing: 0.5px;
            font-weight: lighter;
            font-size:18px;
            text-align:center;
            color:#fff;
            text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.9);
            font-family: "Kanit", sans-serif;
          }
    </style>
    </head>
    <body>
      <div style="background: #2B1E4A; padding: 20px; text-align:center;">
      <img src="http://im11.ictsilpakorn.com/minishowcase/register/image/logo.png"><br>
        <h3>สวัสดีคุณ '.$fullname.'<br>คุณได้ทำการลงทะเบียนเรียบร้อยแล้ว</h3>
          <p>ยินดีต้อนรับเข้าสู่งาน <br>INTERACTIVE MEDIA MINI <br>SHOWCASE ULTRA-LINE  11.3<br>งานแสดงผลงานจุลนิพนธ์ของนักศึกษา<br>เอกสื่อปฎิสัมพันธ์ ปีการศึกษา 2559</p>
          <p>พบกันวันที่ 6 พฤษภาคม 2560 <br> เวลา 13.00 น. เป็นต้นไป <br>ชั้น 8 อาคาร กสท.โทรคมนาคม(บางรัก)   กรุงเทพฯ</p>
        <h3>-&nbsp;ขอบคุณค่ะ&nbsp;-</h3>
        </div>
      </body>
      </html>';
    }
    else
    {
      $mail->Body    ='
      <style>
        @import url(https://fonts.googleapis.com/css?family=Kanit:200,400);
      </style>
      <div style="background: #2B1E4A; padding: 60px;">
      <div style="width:120px; height:120px; background-color:#fff; margin-left:auto; margin-right:auto;">
      <img src="http://im11.ictsilpakorn.com/minishowcase/register/image/logo.png">
      </div><br>
      <h3 style="font-size:16px; color:#F92387; text-align:center; text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.9); font-family: "Kanit", sans-serif;">
        สวัสดีคุณ '.$fullname.'<br>คุณได้ทำการลงทะเบียนเรียบร้อยแล้ว
      </h3>
      <p style="text-align:center; color:#fff; text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.9); font-family: "Kanit", sans-serif;">
        ยินดีต้อนรับเข้าสู่งาน <br>INTERACTIVE MEDIA MINI <br>
        SHOWCASE ULTRA-LINE 11.3<br>
        งานแสดงผลงานจุลนิพนธ์ของนักศึกษา<br>
        เอกสื่อปฎิสัมพันธ์ ปีการศึกษา 2559
      </p>
      <p style="text-align:center; color:#fff; text-shadow: 0px 0px 5px rgba(255, 255, 255, 0.9); font-family: "Kanit", sans-serif;">
        พบกันวันที่ 6 พฤษภาคม 2560 <br>
        เวลา 13.00 น. เป็นต้นไป <br>
        ชั้น 8 อาคาร กสท.โทรคมนาคม(บางรัก) กรุงเทพฯ
      </p>
      <h3 style="font-size:16px; color:#F92387; text-align:center; font-family: "Kanit", sans-serif;">-&nbsp;ขอบคุณค่ะ&nbsp;-</h3>
      </div>';
    }

    $mail->AltBody = 'คุณได้ลงทะเบียนเข้ารับชม Mini Exhibition Ultraline';

    if(!$mail->send())
    {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
      $sql_insert = "INSERT INTO web11_db_ultraline(im11_member_id, im11_fullname, im11_position, im11_oranization, im11_tel, im11_email, im11_status, im11_date_register) VALUES (0, '$fullname', '$posotion', '$oranization','$number_phone', '$email', $status_user, NOW())";

      $sql_add_digi = "INSERT INTO web11_ultraline_vote(im11_vote_id, im11_digit, im11_member_id, im11_status, im11_datetime) VALUES (0, '$digi_four', 0, 0, NOW())";

      $query_digi = mysqli_query($conn, $sql_add_digi);
      $query = mysqli_query($conn, $sql_insert);
       header('Location: ../success.php');
    }


  }
  else
  {
    echo "Error!";
    header('Location: ../index.php');
  }
}

mysqli_close();
 ?>
