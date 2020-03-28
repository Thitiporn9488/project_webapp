<?php
echo "เข้า";
// Start SESSION
session_start();

// 1. Connect DB
require("connect.php");

//checkLogin.php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
//echo $user . ", " . $pass;

// 2. SELECT SQL
$sql = "SELECT * FROM user WHERE USERNAME='$username' AND PASSWORD ='$password'";

// echo $sql;

// 3. Execute SQL
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) { // Login OK

    $row = mysqli_fetch_assoc($result);
    if($row["STATUS"] == "admin"){
        $_SESSION['username'] = $row['USERNAME'];
        $_SESSION['name'] = $row['NAME'];
        header("Location:home.php");
    }else{
        $_SESSION['username'] = $row['USERNAME'];
        $_SESSION['name'] = $row['NAME'];
        header("Location:home.php");
    }
}
else {
    echo "<script>";
    echo "alert('password ไม่ถูกต้อง');";
    echo "window.location='login.php';";
    echo "</script>";
    // header("Location:login.php");
}


?>