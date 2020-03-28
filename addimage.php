<?php

require('connect.php');
$PATH = "image/";

$IMAGENAME = $_REQUEST['name'];
$PATH .= $_REQUEST['img'];
$USER_ID = 1;

$sql = "INSERT INTO image (IMAGENAME, PATH, USER_ID) VALUES ";
$sql .= "('" . $IMAGENAME ."',
            '" . $PATH."','".$USER_ID."')";


if (mysqli_query($conn, $sql)) {

    header("Location:gallery.php");

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
            
mysqli_close($conn);
//header("Location:show_status.php");


?>