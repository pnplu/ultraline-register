<?php
require 'asset/db_connect.php';
$sql_find_people = "SELECT COUNT(im11_member_id) AS count_member FROM web11_db_ultraline";
$query = mysqli_query($conn, $sql_find_people);
while ($rows = mysqli_fetch_assoc($query))
{
  $count_people = $rows["count_member"];
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Register Ultraline</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/css/style_index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400" rel="stylesheet">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/action.js"></script>
  </head>
  <body>
    <section class="wrapper">
      <article class="col-md-6 box_left">
        <img src="image/poster.jpg" alt="poster-cover">
      </article> <!-- box_left -->
      <article class="col-md-6 box_right">
        <?php
        if ($count_people < 30)
        {
         ?>
        <h1><img src="image/icon_register.png">ลงทะเบียน | <?php echo $count_people; ?>/30 คน</h1>
        <p style="font-size: 1.25em; margin-top: 20px; margin-bottom: 30px; font-weight: 200; padding: 0px;">
          INTERACTIVE MEDIA MINI SHOWCASE ULTRA-LINE 11.3<br>
          งานแสดงผลงานจุลนิพนธ์นักศึกษา เอกสื่อปฏิสัมพันธ์<br> มหาวิทยาลัยศิลปากร ปีการศึกษา 2559<br>จำนวนจำกัดเพียง 30 ท่านเท่านั้น<br><br>

          วันที่ 6 พฤษภาคม 2560 ตั้งแต่เวลา 13.00 น. - 16.30 น.<br>
          ณ ห้องสตูดิโอ 3 ชั้น 8 อาคาร กสท.โทรคมนาคม (บางรัก) กรุงเทพฯ<br>
          คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร<br>
        </p>

          <form action="asset/register_process.php" method="post">

            <article class="box_input">
              <input id="fname_input" class="input_box" type="text" name="fname" required="required"><br>
              <label id="fname" class="text_label" for="fullname">ชื่อ - นามสกุล</label>
            </article>

            <article class="box_input">
              <input id="position_input" class="input_box" type="text" name="position" required="required"><br>
              <label id="position" class="text_label" for="fullname">ตำแหน่ง</label>
            </article>

            <article class="box_input">
              <input id="oranization_input" class="input_box" type="text" name="oranization" required="required"><br>
              <label id="oranization" class="text_label" for="fullname">หน่วยงาน / บริษัท / องค์กร</label>
            </article>

            <article class="box_input">
              <input id="tel_input" class="input_box" type="text" name="number_phone" pattern= "[0-9]{10}" required="required" maxlength="10s"><br>
              <label id="tel" class="text_label" for="fullname">เบอร์โทร</label>
            </article>
            <p style="font-weight: 200; margin-left: 0px;">*หมายเหตุ: เบอร์โทรศัพท์ 4 ตัวท้ายของท่านจะเป็น Code สำหรับเพื่อลงคะแนน Popular vote</p>

            <article class="box_input">
              <input id="email_input" class="input_box" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required"><br>
              <label id="email" class="text_label" for="fullname">E-Mail</label>
            </article>
            <h3>Choose your type</h3>
            <article class="row" style="margin-left: -25px;">
              <article class="col-xs-6">
                <article class="image_radio">
                  <img src="image/icon1_new.png" alt="old_user"><br><br>
                  <input class="radio_box" type="radio" name="check_status" value="0" checked="checked">
                  <span><label for="old">ศิษย์เก่า</label></span><br>
                </article>
              </article>
              <article class="col-xs-6">
                <article class="image_radio">
                  <img src="image/icon2_new.png" alt="normal_user"><br><br>
                  <input class="radio_box" type="radio" name="check_status" value="1">
                  <span><label for="normal">บุคคลทั่วไป</label></span>
                </article><br>
                </article>
                <!-- <p style="font-weight: 200; margin-left: 20px;">*หมายเหตุ: บุคคลทั่วไปสามารถลงทะเบียนเข้าร่วมได้ตั้งแต่วันที่ 1 พฤษภาคม 2560 เป็นต้นไป</p> -->
              </article>

              <article class="row btn_center">
                <button class="btn_click btn_c1" type="reset">ยกเลิก</button>
                <button class="btn_click btn_c2" type="submit" name="button">ยืนยัน</button>
                </article>
          </form>
          <?php
        }
        else
        {
          ?>
          <article class="box_success margin_s">
            <h1 class="h1_s">ขออภัยจำนวนที่นั่งเต็ม</h1>
            <!-- <h3 class="h1_s">ขอขอบพระคุณ</h3> -->
            <h3 class="h1_s" style="font-size: 1.5em; padding: 0px 35px;">
              ขอขอบพระคุณทุกท่านที่ให้ความสนใจเข้าร่วมงาน INTERACTIVE MEDIA MINI SHOWCASE ULTRA-LINE 11.3
              งานแสดงผลงานจุลนิพนธ์นักศึกษา เอกสื่อปฏิสัมพันธ์
              มหาวิทยาลัยศิลปากร ปีการศึกษา 2559<br><br>ติดตามได้ที่ :
              &nbsp;<a href="https://www.facebook.com/ultraline11.3/"><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.twitter.com/ultraline11_3/"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="https://www.instagram.com/ultraline11.3/"><i class="fa fa-instagram"></i></a>
            </h3>
            </article>
          <?php
        }
           ?>
      </article><!-- box_right -->
</section>
  </body>
</html>
