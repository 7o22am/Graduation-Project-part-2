<?php 
    include("db.php");
    $d = $_GET['id'];
    $sql = "select id , name_doc  , subject , day , timee , modarg  from lect3 where id = $d";
    $q = $db->prepare($sql) ;
    $q->execute();
    $update = $q->fetchAll();

    if(isset($_POST["name"])){
        include("db.php");
        $sql="update lect3 set name_doc  ='".$_POST['name']."' ,  subject='".$_POST['subject']."' ,
        day ='".$_POST['day']."' , timee ='".$_POST['time']."' , modarg ='".$_POST['num']."'  where id = $d " ;

        $q = $db->prepare($sql);
        $q->execute();
        header("Location:show3.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/assiut.jpeg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>College Schedule</title>
</head>
<body class="bg-info">
    <div class="container-fluid">

    <!-- Satrt Head -->

        <div class="row ">
            <div class="col-12 header">
                <div class="col-3">
                    <img src="img/assiut.jpeg">
                </div>
                <div class="col-6">
                    <h2>
                     Faculty of Computing and Information</h2>
                </div>
                <div class="col-3">
                 <img src="img/fci.jpeg">
                </div>
            </div>
        </div>

        <!-- End Head -->

        <!-- Update Data --> 

        <div class="data">

            <h1>Update Data</h1> <!-- Title -->

        <div class="d-flex justify-content-center mt-3">

              <div class="form pt-2">

                  <form method="POST">

                  <?php foreach($update as $p)
                    {
                    ?>
                            <div class="form-group pt-2">
                                <label>Doctor Name </label> <br>
								
                                <input value="<?php echo $p[1] ?>"  type="text" name="name" required class="name" >
                            </div>
                            <div class="form-group pt-2">
                                <label>Subject</label> <br>
                                <input   value="<?php echo $p[2] ?>" type="text" name="subject" required class="subject" >
                            </div>
                            <div class="form-group pt-2">
                                <label>Day</label> <br>
                                <input  value="<?php echo $p[3] ?>" type="text" name="day" required class="day" >
                            </div>
                            <div class="form-group pt-2 ">
                               <label>Time</label> <br>
                                <input value="<?php echo $p[4] ?>" type="text" name="time" required class="time" >
                            </div>

                            
							 
							 <div class="form-group pt-2 ">
                                <label>Classroom</label> <br>
                                 <input value="<?php echo $p[5] ?>" type="text" name="num" required class="number" >
                             </div>
							 
                            <div class="form-group pt-4">
                                <button class="btn btn-block">up date</button>
                            </div>
                    
                      
                      <?php }?>
                  </form>

              </div>

            </div>

        </div>

        <!-- Update Data --> 
           

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>