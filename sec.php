<?php
$new_time="";
function check($name_lect ,  $Dayy ,$timee , $class, $grop , $sect)
{
    $f = "";
    $l = "";
    global $new_time;
    $new_time=$timee;
    $hourss =2;
    $bo = false;
    $ckk = "true";
    $x = str_split($timee);
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
    $p1=$start;
    $p2=$end;
    if($p1<8)$p1=$p1+12;
    if($p2<8)$p2=$p2+12;
    if(!(($p1>=8 && $p1<=18 )&& ($p2>=8 && $p2<=18 ) && ($p1<$p2)))
    {
        echo "<script>alert(' time inviled  sorry  ...')</script>";
        return $ckk="false";
    }
    //check time
    if($start <= $end)
    {
        $ans= $end - $start;
    }
    else if ($start > $end)
    {
        $ans = 12-$start + $end;

    }
    if($ans < $hourss)
    {
        echo "<script>alert(' time less than $hourss hours  ...')</script>";
        return $ckk="false";
    }
    if($ans > $hourss){
        $new_time = $start.'_'.($start+$hourss)%12;
        echo "<script>alert(' Time is more than lecture time.If it fails due to time try to migrate the start time' +
 'we will submit  $new_time .. Thank you for your understanding')</script>";

    }
    $conn = mysqli_connect("localhost","root","", "univ");
    $sql1 = "SELECT * FROM sec1";
    $sql2 = "SELECT * FROM sec2";
    $sql3 = "SELECT * FROM sec3";
    $sql4 = "SELECT * FROM sec4";
    $sql11 = "SELECT * FROM lect1";
    $sql22 = "SELECT * FROM lect2";
    $sql33= "SELECT * FROM lect3";
    $sql44 = "SELECT * FROM lect4";

    $res[1] = mysqli_query($conn, $sql1);
    $res[2] = mysqli_query($conn, $sql2);
    $res[3] = mysqli_query($conn, $sql3);
    $res[4] = mysqli_query($conn, $sql4);

    $ress[1] = mysqli_query($conn, $sql11);
    $ress[2] = mysqli_query($conn, $sql22);
    $ress[3] = mysqli_query($conn, $sql33);
    $ress[4] = mysqli_query($conn, $sql44);




    for($i=1; $i<5; $i++) {
        if ($res[$i]) {

            while ($row = mysqli_fetch_assoc($res[$i])) {
                $doctor_doc = $row['name_lect'];
                $day_doc = $row['Dayy'];
                $time = $row['timee'];
                $num = $row['class'];
                $section = $row['section'];
                $grp = $row['groupp'];
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
                if ($start_db < 8) $start_db = $start_db + 12;
                if ($start < 8) $start = $start + 12;
                if ($end_db < 8) $end_db = $end_db + 12;
                if ($name_lect == $doctor_doc && ($Dayy == $day_doc )&& (($start == $start_db || $end == $end_db )|| ($timee == $time) || ($start > $start_db && $start < $end_db ) ||
                            ($end > $start_db  && $end <$end_db))) {
                    //this condtion will be replace
                    echo "<script>alert('in sec $i , Doctor is busy in this time ...')</script>";
                    return $ckk = "false";
                }
                //this is condition 2
                if ($class == $num && $num == $class && ($Dayy == $day_doc) && (($start == $start_db || $end == $end_db )|| ($timee == $time) || (($start > $start_db && $start < $end_db ) ||
                            ($end > $start_db  && $end <$end_db)))) {
                    echo "<script>alert('in sec $i , This class is busy in this time ...')</script>";
                    return  $ckk = "false";

                }

                if ($grop == $grp && $section == $sect && $section == $sect && ($Dayy == $day_doc) &&  (($start == $start_db || $end == $end_db )|| ($timee == $time) || (($start > $start_db && $start < $end_db ) ||
                            ($end > $start_db  && $end <$end_db)))) {
                    echo "<script>alert('in level $i , This section [ $section ] is busy in this time ...')</script>";
                    return $ckk = "false";
                }
                $start_db = (int)($ll);
                $end_db = (int)($ff);
            }
        }

    }
    if ($ress[(int)($grop)]) {

        while ($row = mysqli_fetch_assoc($ress[(int)($grop)])) {
            $doctor_doc = $row['name_doc'];
            $day_doc = $row['day'];
            $time = $row['timee'];
            $num = $row['modarg'];
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

            if (  $Dayy == $day_doc && (($start == $start_db || $end == $end_db )|| ($timee == $time) || (($start > $start_db && $start < $end_db ) ||
                    ($end > $start_db  && $end <$end_db)))) {
                //this condtion will be replace
                echo "<script>alert('in lectuer $grop , students is busy in this time ...')</script>";
                return $ckk="false";
            }
            $start_db = (int)($ll);
            $end_db = (int)($ff);
        }
    }

    return $ckk = "true";
}

if(isset($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","", "univ");
    $itemCount = count($_POST["class"]);
    $itemValues=0;


    $query = "INSERT INTO sec1 ( name_lect , subject , groupp , Dayy ,timee , section , class) VALUES ";
    $query2 = "INSERT INTO sec2 ( name_lect , subject , groupp , Dayy ,timee , section , class) VALUES ";
    $query3 = "INSERT INTO sec3 ( name_lect , subject , groupp , Dayy ,timee , section , class) VALUES ";
    $query4 = "INSERT INTO sec4 ( name_lect , subject , groupp , Dayy ,timee , section , class) VALUES ";
    $queryValue = "";
    for($i=0;$i<$itemCount;$i++) {
        $ck= check( $_POST["name"],$_POST["Day"][$i] ,$_POST["timee"][$i],$_POST["class"][$i] ,$_POST["group"] ,$_POST["section"][$i]);

        if(!empty(($_POST["Day"][$i])  || !empty($_POST["timee"][$i]) || !empty($_POST["section"][$i]) || !empty($_POST["class"][$i])) && $ck == "true") {
            $itemValues++;
            $queryValue = "('" . $_POST["name"] . "' , '" . $_POST["subject"] . "' , '" . $_POST["group"] . "' ,'" . $_POST["Day"][$i] . "', '" .  $new_time . "' ,'" . $_POST["section"][$i] . "' , '" . $_POST["class"][$i] . "')";
            if($_POST["group"] == 1 )$sql = $query.$queryValue;
            if($_POST["group"] == 2 )$sql = $query2.$queryValue;
            if($_POST["group"] == 3 )$sql = $query3.$queryValue;
            if($_POST["group"] == 4 )$sql = $query4.$queryValue;
            $result = mysqli_query($conn, $sql);
        }
    }

    if($itemValues!=0) {
        if(!empty($result)) echo "<script>alert('You Enter  $itemCount .. Data Inserted $itemValues .. ')</script>";
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
    <title>Section</title>

    <!-- inline style -->
    <style>
        body{
            background-color: #b8c6db;

        }
        .txt{
            padding-top: 15px
        }
        .labels{
            display: flex;
            justify-content: space-around;
        }
        .sectionlbl{
            position: relative;
            left: -60px
        }
        .classlbl{
            position: relative;
            left: -100px
        }
    </style>

</head>
<body>
<!-- Start Navbar -->
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

            <li class="nav-item">
                <a class="nav-link" href="show_sec3.php">Show Group3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show_sec4.php">Show Group4</a>
            </li>

        </ul>

    </div>
</nav>

<!-- End NavBar -->

<div class="container">


    <div class="Data">
        <h3 class="text-center txt">Enter Data Of Section</h3>
        <div class="mt-3">
            <div class="form pt-2 model1 d-flex justify-content-center mt-3">
                <form method="POST">

                    <!-- Doctor Name -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" style="width: 320px;
                            padding: 20px;" name="name" required class="form-control" placeholder="Instruactor Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <!-- Doctor Name -->

                    <!-- Subject -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-book"></i></span>
                        </div>
                        <input type="text" style="width: 320px;
                            padding: 20px;" name="subject" required class="form-control" placeholder="Subject Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <!-- Subject -->

                    <!-- Group Number -->
                    <div  class="input-group mb-3">
                        <select  name="group" required class="custom-select custom-select-m">
                            <option  selected disabled="disabled">Group Number</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                        </select>
                    </div>
                    <!-- Group Number -->

                    <!-- Information Student -->
                    <div class="form-group pt-2 ">

                        <table class="table table-bordered" id="dynamic_field">
                            <div class="labels">
                                <div>
                                    <label> Day   </label>
                                </div>
                                <div>
                                    <label> Time</label>
                                </div>
                                <div>
                                    <label class="sectionlbl"> Section</label>
                                </div>
                                <div>
                                    <label class="classlbl"> Class</label>
                                </div>
                            </div>

                            <br>
                            <tr>
                                <td><input type="text" name="Day[]" placeholder="Enter your Day" class="form-control name_list" /></td>
                                <td><input type="text" name="timee[]" placeholder="Enter your Time" class="form-control name_list" /></td>
                                <td><input type="text" name="section[]" placeholder="Enter your section" class="form-control name_list" /></td>
                                <td>
                                    <input type="text" name="class[]" placeholder="Enter your Class" class="form-control name_list" />
                                </td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                            </tr>
                        </table>
                        <!-- Information Student -->
                    </div>
                    <!-- Save Data -->
                    <div class="form-group pt-4">
                        <button class="btn btn-dark  btn btn-block" name="save" type="submit">Submit</button>
                    </div>
                    <!-- Save Data -->
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

</script>
</body>
</html>