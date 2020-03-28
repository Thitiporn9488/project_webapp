<?php
require('connect.php');

$USERNAME = $_REQUEST['username'];
$NAME = $_REQUEST['name'];
$PASSWORD= $_REQUEST['password'];
$STATUS= "user";


// เช็คว่ามีข้อมูลนี้อยู่หรือไม่
$check = "SELECT * FROM user WHERE USERNAME = '$USERNAME' ";
echo $check;
$result1 = mysqli_query($conn,$check);
  $num=mysqli_num_rows($result1); 
  if($num > 0){
    //ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
    echo "<script>";
    echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
    echo "window.location='regis.php';";
    echo "</script>";

}else{
    $sql = "INSERT INTO user (USERNAME, NAME ,PASSWORD,STATUS) VALUES ";
    $sql .= "('" . $USERNAME ."',
            '" . $NAME."',
            '" . $PASSWORD ."',
            '" . $STATUS ."')";
    mysqli_query($conn, $sql);
    header("Location:login.php");
}       
mysqli_close($conn);
//header("Location:show_status.php");


?>