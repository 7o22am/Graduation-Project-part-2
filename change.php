<?php 

 if(isset($_POST["user"])){

    include("db.php");
    $sql = "select username from userr where username =?";
    $q = $db->prepare( $sql ) ;
    $q->execute( [ $_POST["user"] ] ) ;

    if($q->rowCount() == 1){
        include("db.php");
        $sql="update userr set passwordd ='".$_POST['password']."' where id = 1 " ;
        $q = $db->prepare($sql);
        $q->execute();
        header("Location:login.php");
    }
    else{
        echo "<h2 class='alert'>Please Check UserName !...</h2>";
    }
    
 }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/2.jpg">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body class="bg-primary">
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
          <div class="login">
            <div class="img " style="text-align: center;">
                <img src="img/2.jpg">
            </div>
            <div class="form pt-3">
                <form method="POST">
                    <div class="form-group pt-3">
                        <label for="user">User Name</label> <br>
                        <input type="text" name="user" required class="email" >
                    </div>
                    <div class="form-group pt-3">
                        <label for="password">Change Password</label> <br>
                        <input type="password" name="password" required class="password" >
                    </div>
                    <div class="form-group pt-5">
                        <button class="btn btn-block" type="submit">Update Password</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>