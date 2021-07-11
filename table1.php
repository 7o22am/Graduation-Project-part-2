<?php
 require_once 'firebase/vendor/autoload.php';

 use Kreait\Firebase\Factory;

 $factory = (new Factory())
     ->withDatabaseUri('https://grad-project-d953a-default-rtdb.firebaseio.com');
 $database = $factory->createDatabase();

        $conn = mysqli_connect("localhost","root","","univ") or die("Connection Failed");

        $day_arr = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');

        for($i=0; $i<7; $i++){

        $sql1 = "SELECT * FROM lect1  where day = '$day_arr[$i]'";
        $sql2 = "SELECT * FROM sec1  where Dayy = '$day_arr[$i]'";
        $res = mysqli_query($conn, $sql1 );
        $res2 = mysqli_query($conn, $sql2 );
 if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $doctor_doc = $row['name_doc'];
        $day_doc = $row['day'];
        $day_sub = $row['subject'];
        $time = $row['timee'];
        $num = $row['modarg'];

        $str = $day_doc ." "." "." - " ." "." ". $doctor_doc." "." "." - " ." "." ".$day_sub ." "." "." - " ." "." ". $time ." "." "." - " ." "." ". $num;
        $postRef = $database->getReference('table1')->push( $str );
    }
}
if ($res2) {
    while ($row = mysqli_fetch_assoc($res2)) {
        $doctor_doc = $row['name_lect'];
        $day_doc = $row['Dayy'];
        $day_sub = $row['subject'];
        $time = $row['timee'];
        $section = $row['section'];
        $class = $row['class'];

        $str =  $day_doc ." "." "." - " ." "." ". $doctor_doc ." "." "." - " ." "." ".$day_sub ." "." "." - " ." "." ". $time ." "." "." - " ." "." ".$section." "." "." - " ." "." ". $class;
        $postRef = $database->getReference('table1')->push( $str );
    }

}
        }
      
?>