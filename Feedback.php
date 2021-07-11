<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/assiut.jpeg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Feedback Page</title>
    <style>
        body{

            background-color: #b3cdd1;
    background-image: linear-gradient(315deg, #b3cdd1 0%, #9fa4c4 74%);


        }
    </style>
</head>
<body >
    <!-- Start Header --> 
    <div class="head">
        <h1 class="right">FeedBack</h1>
        <div class="left">
            <button class="btn note">Send Alert</button>
            <button class="btn sendImg"><a href="image.php">Send Image</a></button>
        </div>
    </div>
    <!-- End Header --> 


    <!-- Start Popup --> 

    <div class="popup">
        <div class="ineer">
          <h3 class="inner title">Send NotiFication : </h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" class="text" name = "text" required >
                <div class="button">
                    <button class="btn send submit"> Send</button>
                </div>
            </form>
            <button class="btn closse">close</button>
        </div>
      </div>

    <!-- End Popup --> 

    <!-- Start table --> 
    
      <div class="d-flex justify-content-center mt-5">
        <table class="table table-striped table-success  w-75 ">
            <thead class="thead-inverse">
                <tr>
                    <th>From</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'firebase/vendor/autoload.php';
                use Kreait\Firebase\Factory;
                $factory = (new Factory())
                    ->withDatabaseUri('https://grad-project-d953a-default-rtdb.firebaseio.com');
                $database = $factory->createDatabase();
                if(isset($_POST["text"])){
                    $postData = $_POST['text'] ;
                    $postRef = $database->getReference('Noitifaction')->push($postData);
                    header("Location:Feedback.php");
                 }
                 $a = $database->getReference('Feedback')->getValue();
                 if(isset($a)){
                    foreach($a as $key=>$value){
                            $x = explode(">>" , $value);
                        ?>
                <tr>
                    <td><?php echo $x[0] ;?></td>
                    <td><?php echo $x[1] ;?></td>
                </tr>
                <?php }}
                ?>
            </tbody>

        </table>
    <!-- End table --> 

    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<!-- $database->getReference('Feedback')->remove();  -->
<!-- <td><i class="fa fa-trash-o" aria-hidden="true" style="cursor: pointer;" style="color:red" ></i></td> -->
<!-- $database->getReference('posts')->remove();  -->

<!-- style="width: max-content;" -->
