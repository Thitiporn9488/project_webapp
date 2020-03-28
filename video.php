<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/lib/w3.css">
    <!--bootstrap เริ่ม -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--bootstrap จบ -->
    <title>EXO</title>
</head>

<body>
    <form>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">HOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link " href="member.php">MEMBER<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="profile.php">PROFILE</a>
                <a class="nav-item nav-link" href="gallery.php">GALLERY</a>
                <a class="nav-item nav-link" href="video.php">VIDEO</a>
                <a class="nav-item nav-link" href="logout.php" style="padding-left:850px; margin-left:20px;">Logout</a>
    </div>
                </div>
            </div>
        </nav><br>
</form>

<?php
    if($_SESSION['name'] == "admin"){
        $send ="";
        echo'<form class="form-inline" action="addvideo.php">';
        echo '<nav class="navbar">';
        echo'<div class="form-row align-items-center">';
        echo  '<div class="col-auto">';
        echo    '<label class="sr-only" for="inlineFormInput">Image_Name</label>';
        echo    '<input type="text" name="name" class="form-control mb-2" id="inlineFormInput" placeholder="ชื่อ">';
        echo '</div>';
        echo  '<div class="col-auto">';
        echo    '<label class="sr-only" for="inlineFormInputGroup">Path</label>';
        echo    '<div class="input-group mb-2">';
        echo    '<input type="text" name="video" class="form-control mb-2" id="inlineFormInput" placeholder="url">';
        echo     '</div>';
        echo   '</div>';

        echo   '<div class="col-auto">';
        echo     '<input type="submit" class="btn btn-primary mb-2">';
        echo   '</div>';
        echo  '</div>';
        echo '</nav>';
        echo'</form>';



        echo '<nav class="navbar">';
        echo '<a class="navbar-brand"></a>';
        echo '<form class="form-inline">';
        echo '<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="send" value="">';
        echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>';
        echo '</form>';
        echo '</nav>';




        echo '<nav class="navbar">';
        echo '</nav>';



        require('connect.php');

        if(isset($_REQUEST['send']))$send = $_REQUEST['send'];


        $sql = "SELECT * FROM video ";

        if($send == ""){
            $result = mysqli_query($conn,$sql);
            echo '<div class="row" style="float:left;" >';
            while($row = mysqli_fetch_assoc($result)){
                echo '<form action="DeleteV.php">';
                echo '<div class="card" style="width: 25rem;float:left;">';
                // echo '<img class="card-img-top" src="'.$row['PATH'].'" alt="Card image cap">';
                echo $row['PATH'];
                echo '<div class="card-body">';
                echo '<h5 class="card-title" ">'.$row['VIDEO_NAME'].'</h5>';
                echo '<input type="hidden" name="name" value="'.$row['VIDEO_NAME'].'">';
                echo '<p class="card-text"></p>';
                echo '<input type="submit" class="btn btn-primary" value="Delete">';
                echo '</div>';
                echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '</form>';
                echo '<br>';
            }
        }else{
            $sql .="WHERE VIDEO_NAME LIKE '%".$send."%'";
            $result = mysqli_query($conn,$sql);
            echo '<div class="row" style="float:left;" >';
            while($row = mysqli_fetch_assoc($result)){
                echo '<form action="DeleteV.php">';
                echo '<div class="card" style="width: 25rem;float:left;">';
                // echo '<img class="card-img-top" src="'.$row['PATH'].'" alt="Card image cap">';
                echo $row['PATH'];
                echo '<div class="card-body">';
                echo '<h5 class="card-title" ">'.$row['VIDEO_NAME'].'</h5>';
                echo '<input type="hidden" name="name" value="'.$row['VIDEO_NAME'].'">';
                echo '<p class="card-text"></p>';
                echo '<input type="submit" class="btn btn-primary" value="Delete">';
                echo '</div>';
                echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '</form>';
                echo '<br>';
            }
        }
    }else{
        require('connect.php');
        $sql = "SELECT * FROM video ";
        $result = mysqli_query($conn,$sql);
        echo '<div class="row" style="float:left;" >';
        while($row = mysqli_fetch_assoc($result)){
            echo '<form action="DeleteV.php">';
            echo '<div class="card" style="width: 25rem;float:left;">';
            // echo '<img class="card-img-top" src="'.$row['PATH'].'" alt="Card image cap">';
            echo $row['PATH'];
            echo '<div class="card-body">';
            echo '<h5 class="card-title" ">'.$row['VIDEO_NAME'].'</h5>';
            echo '<input type="hidden" name="name" value="'.$row['VIDEO_NAME'].'">';
            echo '<p class="card-text"></p>';
            // echo '<input type="submit" class="btn btn-primary" value="Delete">';
            echo '</div>';
            echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '</form>';
            echo '<br>';
        }
    }
?>
</body>

</html>