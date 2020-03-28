<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Register</title>

        <link rel="stylesheet" href="regis.css">
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

    </head>

    <style>

#register{
    width: 300px;
    margin: auto;
    margin-top: 140px;
    background-color: whitesmoke;  
}
#body {
    background-image: url('image/EIx6e1ZUwAIQcti.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }

        </style>

    <body id="body">
        <form action="addregis.php" method="GET">
            <div class="card" id="register">
                <h style="text-align: center;">REGISTER</h>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value="" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input value="" name="username" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input value="" name="password" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Comfirm password</label>
                        <input value="" name="Cpassword" type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Comfirm password">
                    </div>
                    <input value="submit" name="send" type="submit" class="btn btn-primary form-control">

                    <!-- <div class="text-center "><a href="#" class="text-white">register</a></div> --> 
                </div>
            </form>

                <form action="login.php">
                    <div  style="margin-top:-10px; max-width: 258px; margin-left: 20px; ">
                    <input value="cancel" name="send" type="submit" class="btn btn-primary form-control">
                </div>
                </form><br>


            </div>
        

    </body>

    </html>

    </body>

    </html>