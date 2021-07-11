<?php 
 
 include("db.php");
 
 $d = $_GET['ids'] ;
 
 $sql = " delete from lect4 where id= $d " ;
 $q = $db->prepare($sql);
 $q->execute();
 header("Location:show4.php");
 
 ?>