<?php
echo "1";
session_start();
//require("dbconnect.php");

$captcha;       
if(isset($_POST['g-recaptcha-response'])){
$captcha=$_POST['g-recaptcha-response'];
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld8ICsUAAAAALru-I7htTw3G3DGy3514y3WkAsP&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);        
}
if(isset($_POST['btn_submit'])  && $response['success'] == true){ // เมื่อคลิกที่กที่ปุ่ม 
    /// ทำคำสั่งเพิ่มข้อมูลหรืออื่นๆ
}
?>
