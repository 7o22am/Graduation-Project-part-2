<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/assiut.jpeg">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>College Schedule</title>
    <style>
         body{
        background-color: #151418
    }
    th,td{
        text-align: center;
    }
    td{
        background-color: #282A33;
        color: #fff
    }
    .wrapper a:hover{
        color: #fff !important;
        background-color: #00d9e4;
        box-shadow: 0 0 5px #00d9e4,
        0 0 25px #00d9e4,
        0 0 50px #00d9e4,
        0 0 100px #00d9e4,
        0 0 125px #00d9e4;
        padding: 10px

    }
    </style>
</head>
<body >
    <!-- Start NavBar -->

      

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">
      <i class="fa fa-backward" aria-hidden="true"></i>
    </a>
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0 justify-content-end">
      <li class="nav-item ">
        <a class="nav-link" href="show_sec.php">Show Group1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show_sec2.php">Show Group2</a>
      </li>
       <!-- <li class="nav-item">
        <a class="navbar-brand" style="color:#fbb034;font-size:25px;padding-left: 10px" href="lectuer.php">Home</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="show_sec3.php">Show Group3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="show_sec4.php">Show Group4</a>
      </li>
     
    </ul>
  
  </div>
</nav>
	

    <div class="d-flex justify-content-center mt-5">

        <table class="table table-striped table-success  w-75">
            <!-- Table Head -->
            <thead class="thead-inverse">
                <tr>
                  
                    <th style="background-color: #fff;color: #000">Lectuer Name</th>
                    <th style="background-color: #FF9A00;color: #fff">Subject</th>
                    <th style="background-color: #E83A44;color: #fff">Day</th>
                    <th style="background-color: #07B9C9;color: #fff">Time</th>
                    <th style="background-color: #FF9A00;color: #fff">Section</th>
                    <th style="background-color: #07B9C9;color: #fff">Group</th>
                    <th style="background-color: #E83A44;color: #fff">Class</th>
                    <th style="background-color: #07B9C9;color:#fff">Delete</th>
                </tr>
            </thead>
            <!-- Table Head -->

            <!-- Table Body -->
            <tbody>
                <?php 

                  $day_arr = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
                  for($i=0; $i<7; $i++){
                  include("db.php");
                  $sql = "select id , name_lect  , subject , Dayy , timee , section , groupp , class  from sec4  where Dayy = '$day_arr[$i]'";
                  $q = $db->prepare($sql) ;
                  $q->execute();
                  $data = $q->fetchAll();
                  foreach($data as $d){

                ?>
                <tr>
                        <td><?php echo $d['name_lect'];?></td>
                        <td><?php echo $d['subject'];?></td>
                        <td><?php echo $d['Dayy'];?></td>
                        <td><?php echo $d['timee'];?></td>
                        <td><?php echo $d['section'];?></td>
                        <td><?php echo $d['groupp'];?></td>
                        <td><?php echo $d['class'];?></td>
                        <!-- <td><a href="update.php?id=<?php echo $d['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="cursor: pointer;"></i></a></td> -->
                        <td class="wrapper"><a href="delete9.php?ids=<?php echo $d['id'];?>"><i class="fa fa-trash-o" aria-hidden="true" style="cursor: pointer; color:red" ></i></a></td>
                    
                </tr>
                <?php 
                    }
                  }
                ?>
            </tbody>
            
            <!-- Table Body -->

        </table>
    </div>    

    <!-- Start Table -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>