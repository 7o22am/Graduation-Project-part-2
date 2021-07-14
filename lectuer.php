<?php

    session_start();

            if( !isset($_SESSION["user"]) )
            {
                header("Location:login.php");
            }
function push($name, $modarg, $level, $subject, $hourss, $day, $times)
{
    $ret ="false";
    $conn = mysqli_connect("localhost","root","","univ") or die("Connection Failed");

    // This is time
    $f = "";
    $l = "";
    $bo = false;
    $x = str_split($times);
    for ($a = 0; $a < count($x); $a++) {
        $chr = $x[$a];
        if ($chr == '_') {
            $bo = true;
            continue;

        } else if ($bo == true) {
            $f = $f . $x[$a];
        } else if ($bo == false) {
            $l = $l . $x[$a];
        }
    }
    $start = (int)($l);
    $end = (int)($f);

    //check time
    if ($start <= $end) {
        $ans = $end - $start;
    } else if ($start > $end) {
        $ans = 12 - $start + $end;

    }
    if ($ans > $hourss) {
        //   echo "<script>alert(' Time is more than lecture time.If it fails due to time try to migrate the start time .. Thank you for your understanding')</script>";

        $end = $start+$hourss;
        $d=($start + $hourss)%12;
           if($d==0)$d=12;
        $times = $start.'_'.$d ;
    }

    $sql1 = "SELECT * FROM lect1";
    $sql2 = "SELECT * FROM lect2";
    $sql3 = "SELECT * FROM lect3";
    $sql4 = "SELECT * FROM lect4";
    $res[1] = mysqli_query($conn, $sql1);
    $res[2] = mysqli_query($conn, $sql2);
    $res[3] = mysqli_query($conn, $sql3);
    $res[4] = mysqli_query($conn, $sql4);

    for($i=1; $i<5; $i++) {
        if ($res[$i]) {
            while ($row = mysqli_fetch_assoc($res[$i])) {
                $doctor_doc = $row['name_doc'];
                $day_doc = $row['day'];
                $time = $row['timee'];
                $num = $row['modarg'];
                $gropp = $row['groupss'];
                $ff = "";
                $ll = "";
                $boo = false;
                $xx = str_split($time);
                for ($a = 0; $a < count($xx); $a++) {
                    $chr = $xx[$a];
                    if ($chr == '_') {
                        $boo = true;
                        continue;

                    } else if ($boo == true) {
                        $ff = $ff . $xx[$a];
                    } else if ($boo == false) {
                        $ll = $ll . $xx[$a];
                    }
                }
                $start_db = (int)($ll);
                $end_db = (int)($ff);
                if($start_db<8)$start_db=$start_db+12;
                if($start<8)$start=$start+12;
                if($end_db<8)$end_db=$end_db+12;

                if ($name == $doctor_doc && $day == $day_doc && (($times == $time )||($start == $start_db || $end == $end_db )|| (($start > $start_db && $start < $end_db ) ||
                        ($end > $start_db  && $end <$end_db)))) {
                    //this condtion will be replace
                    // echo "<script>alert('in level $i , Doctor is busy in this time ...')</script>";
                    return $ret = "false";

                }
                if ($day == $day_doc && $num == $modarg && (($times == $time )||($start == $start_db || $end == $end_db )|| (($start > $start_db && $start < $end_db ) ||
                            ($end > $start_db  && $end <$end_db)))) {
                  //   echo "<script>alert('in level $i , This Modarge is busy in this time ...')</script>";
                    return $ret = "false";


                }
                if ($level == $gropp && ($day == $day_doc)&&(($times == $time )||($start == $start_db || $end == $end_db )|| (($start > $start_db && $start < $end_db ) ||
                            ($end > $start_db  && $end <$end_db)))) {
                       //echo "<script>alert('in level $i , This student is busy in this time ...')</script>";

                    return $ret = "false";


                }
                $start_db = (int)($ll);
                $end_db = (int)($ff);
            }
        }
    }

    if ($level == 1) {


        $sql = "INSERT INTO lect1 (name_doc,groupss,subject,subject_hours,day,timee,modarg)
                     VALUES ('$name','$level','$subject','$hourss','$day','$times','$modarg'
                    )";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('date insetered  lectuer 1')</script>";
        } else {
            echo "<script>alert('Error )</script>";

        }
        return  $ret ="ok";
    }
    if ($level == 2) {

        $sql = "INSERT INTO lect2 (name_doc,groupss,subject,subject_hours,day,timee,modarg)
                     VALUES ('$name','$level','$subject','$hourss','$day','$times','$modarg'
                    )";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('date insetered in lectuer 2 ')</script>";
        } else {
            echo "<script>alert('Error )</script>";

        }
        return $ret ="ok";
    }
    if  ($level == '3' || $level == '3is'|| $level == '3cs'|| $level == '3it'|| $level == '3mm' ||
        $level == '3is-it' || $level == '3is-mm' || $level == '3is-cs' || $level == '3it-mm' || $level == '3is-cs' || $level == '3cs-mm'
        || $level == '3is-it-mm' || $level == '3is-it-cs' || $level == '3it-cs-mm') {

        $sql = "INSERT INTO lect3 (name_doc,groupss,subject,subject_hours,day,timee,modarg)
                     VALUES ('$name','$level','$subject','$hourss','$day','$times','$modarg'
                    )";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('date insetered in lectuer 3 ')</script>";
        } else {
            echo "<script>alert('Error )</script>";

        }
        return $ret ="ok";
    }
    if ($level == '4' || $level == '4is'|| $level == '4cs'|| $level == '4it'|| $level == '4mm' ||
        $level == '4is-it' || $level == '4is-mm' || $level == '4is-cs' || $level == '4it-mm' || $level == '4is-cs' || $level == '4cs-mm'
        || $level == '4is-it-mm' || $level == '4is-it-cs' || $level == '4it-cs-mm') {

        $sql = "INSERT INTO lect4 (name_doc,groupss,subject,subject_hours,day,timee,modarg)
                     VALUES ('$name','$level','$subject','$hourss','$day','$times','$modarg'
                    )";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('date inserted in lecturer 4 ')</script>";
        } else echo "<script>alert('Error )</script>";
        return $ret ="ok";
    }


}

if(isset($_POST['save'])) {
    $ret ="false";
    $name = $_POST['name'];
    $modarg = $_POST['modarg'];
    $level = $_POST['level'];
    $subject = $_POST['subject'];
    $hourss = $_POST['hourss'];
    $day = $_POST['day'];
    $times = $_POST['time'];
    if($times == null)$times="8_6";
    $f = "";
    $l = "";
    $bo = false;
    $x = str_split($times);
    for ($a = 0; $a < count($x); $a++) {
        $chr = $x[$a];
        if ($chr == '_') {
            $bo = true;
            continue;

        } else if ($bo == true) {
            $f = $f . $x[$a];
        } else if ($bo == false) {
            $l = $l . $x[$a];
        }
    }

    $start = (int)($l);
    $end = (int)($f);
    $p1 = $start ;
    $p2 = $end ;
    if($p1<8)$p1=$p1+12;
    if($p2<8)$p2=$p2+12;
    if(!(($p1>=8 && $p1<=18 )&& ($p2>=8 && $p2<=18 ) && ($p1<$p2)))
    {
        // header("Location:lectuer.php");
        echo "<script>alert(' time inviled  sorry  ...')</script>";
        exit();
    }

    if ($start <= $end) {
        $ans = $end - $start;
    } else if ($start > $end) {
        $ans = 12 - $start + $end;

    }
    
    if ($ans < $hourss) {
        echo "<script>alert(' time less than $hourss hours  ...')</script>";
        exit();
    }
    if($times == "null"  || $ans > $hourss )
    {
        $str=(string)$start.'_'.(string)$end;
        while($ret == "false")
        {
            $str=(string)$start.'_'.(string)$end;
            if($start==11)  $start=12;
            else if($start>=12) $start=($start+1)%12;
            else $start=($start+1);
            $ret= push($name, $modarg, $level, $subject, $hourss, $day, $str);
            if($start+1 == $end ) {
                $ret = "ture";
            }
            if ($ret == "ok"){
                echo "<script>alert(' DONE  .. ')</script>";
                break;

            }
        }
        if ($ret == "ture"){
        echo "<script>alert(' cant found time sorry  .. ')</script>";

    }
    }
    else {

        $ret = push($name, $modarg, $level, $subject, $hourss, $day, $times);
        if ($ret == "ok"){
            echo "<script>alert(' DONE  .. ')</script>";

        }
        if ($ret == "false"){
            echo "<script>alert(' Unable to register change time  .. ')</script>";

        }
    }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/assiut.jpeg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Lectuer</title>

           <!-- inline style -->
    <style>
      body{
      background-color: #b8c6db;

      }
      .txt{
        padding-top: 15px
      }
    </style>

</head>
<body >

    <!-- Start navbar -->

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
                    <a class="nav-link" href="show.php">Show Group1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show2.php">Show Group2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show3.php">Show Group3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show4.php">Show Group4</a>
                </li>
                </ul>
            </div>
    </nav>


    <!-- End navbar -->

    <div class="container-fluid">

        <div class="Data">
            <div class="mt-3">
                <div class="form pt-2 model1 d-flex justify-content-center mt-3">
                    <form method="POST">

                        <!-- Doctor Input -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" style="width: 320px;
                                    padding: 20px;" name="name" required class="form-control" placeholder="Doctor" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                        <!-- Doctor Input -->

                        <!-- Subject Input -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-book"></i></span>
                                </div>
                                <input type="text" style="width: 320px;
                                    padding: 20px;" name="subject" required class="form-control" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                        <!-- Subject Input -->

                        <!-- Subject Time -->
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" style="width: 320px;
                                    padding: 20px;" name="time" required class="form-control" placeholder="Subject Time" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                        <!-- Subject Time -->

                        <!-- Subject Hours -->
                                <div  class="input-group mb-3">
                                <select  name="hourss" required class="custom-select custom-select-m">
                                <option  selected disabled="disabled">Subject Hours</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                                </div>
                        <!-- Subject Hours -->

                        <!-- Day -->
                                <div  class="input-group mb-3">
                                    <select  name="day" required class="custom-select custom-select-m">
                                <option  selected disabled="disabled">Subject day</option>
                                <option value="Sunday">Sun</option>
                                <option value="Monday">Mon</option>
                                <option value="Tuesday">Tues</option>
                                <option value="Wednesday">Wen</option>
                                <option value="Thursday">Thrus</option>
                                </select>
                                </div>
                        <!-- Day -->



                        <!-- Group Number -->
                                <div  class="input-group mb-3">
                                <select  name="level" required class="custom-select custom-select-m">
                                <option  selected disabled="disabled">Group Number</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="3is">Three-IS</option>
                                <option value="3it">Three-IT</option>
                                <option value="3cs">Three-CS</option>
                                <option value="3mm">Three-MM</option>
                                <option value="3is-it">Three-IS-IT</option>
                                <option value="3is-mm">Three-IS-MM</option>
                                <option value="3is-cs">Three-IS-CS</option>
                                <option value="3it-mm">Three-IT-MM</option>
                                <option value="3is-cs">Three-IT-CS</option>
                                <option value="3cs-mm">Three-CS-mm</option>
                                <option value="3is-it-mm">Three-IS-IT-MM</option>
                                <option value="3is-it-cs">Three-IS-IT-CS</option>
                                <option value="3it-cs-mm">Three-IT-CS-MM</option>
                                <option value="4">Four</option>
                                <option value="4is">Four-IS</option>
                                <option value="4it">Four-IT</option>
                                <option value="4cs">Four-CS</option>
                                <option value="4mm">Four-MM</option>
                                <option value="4is-it">Four-IS-IT</option>
                                <option value="4is-mm">Four-IS-MM</option>
                                <option value="4is-cs">Four-IS-CS</option>
                                <option value="4it-mm">Four-IT-MM</option>
                                <option value="4is-cs">Four-IT-CS</option>
                                <option value="4cs-mm">Four-CS-mm</option>
                                <option value="4is-it-mm">Four-IS-IT-MM</option>
                                <option value="4is-it-cs">Four-IS-IT-CS</option>
                                <option value="4it-cs-mm">Four-IT-CS-MM</option>
                                </select>
                                </div>
                        <!-- Group Number -->


                        <!-- Day -->
                            <div  class="input-group mb-3">
                            <select  name="modarg" required class="custom-select custom-select-m">
                            <option  selected disabled="disabled">Modarg Num</option>
                            <option value="M1">M 1</option>
                            <option value="M2">M 2</option>
                            <option value="M3">M 3</option>
                            <option value="M4">M 4</option>
                            <option value="M5">M 5</option>
                            <option value="M6">M 6</option>
                            <option value="M7">M 7</option>
                            <option value="M8">M 8</option>
                            <option value="M9">M 9</option>
                            </select>
                            </div>
                        <!-- Day -->

                           
           <!-- <button onClick="window.location.reload();">Refresh Page</button> -->
                 
                            <!-- Submit Project -->
                            
                            <button name="save" type="submit" class="btn btn-dark btn btn-block">Submit</button>

							 
                        </form>
                    </div>
              </div>
          </div>
        </div>
    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/poper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

      <!-- Animation -->

      <script>
        var options = {
        strings: ['✔✔Enter Doctor Data.'],
        typeSpeed: 100,
            backSpeed: 100,
            loop: true,
                showCursor: false,  
        backDelay: 1000,
        };
        var typed = new Typed('.txt', options);
    </script>
</body>
</html>
