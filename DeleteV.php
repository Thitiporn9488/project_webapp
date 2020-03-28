<?php
echo "เข้า";
$name = $_REQUEST['name'];
// // Delete.php

// $row = $_GET['id'];
// // echo $status_id;

// // 1. Connect DB
require("connect.php");

// // 2. Select SQL
$sql = "DELETE FROM video WHERE VIDEO_NAME = '$name'";

// echo $sql;

// 3. Execute SQL
if (mysqli_query($conn, $sql)) {
    echo "Delete record successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:video.php");
?>