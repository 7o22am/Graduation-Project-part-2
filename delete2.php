 <?php 
 
include("db.php");

$d = $_GET['ids'] ;

$sql = " delete from lect2 where id= $d " ;
$q = $db->prepare($sql);
$q->execute();
header("Location:show2.php");

?>