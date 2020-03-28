<?php
// echo "เข้า";
require('connect.php');
// $PATH = "image/";

$VIDEO_NAME = $_REQUEST['name'];
$PATH = $_REQUEST['video'];
$USER_ID = 1;

$sql = "INSERT INTO video (VIDEO_NAME, PATH, USER_ID) VALUES ";
$sql .= "('" . $VIDEO_NAME ."',
            '" . $PATH."','".$USER_ID."')";


if (mysqli_query($conn, $sql)) {

    header("Location:video.php");

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
            
mysqli_close($conn);
//header("Location:show_status.php");


?>