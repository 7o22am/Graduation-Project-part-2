<?php 
 
 include("db.php");
 
 $d = $_GET['ids'] ;
 
 $sql = " delete from sec2 where id= $d " ;
 $q = $db->prepare($sql);
 $q->execute();
 header("Location:show_sec2.php");
 
 ?>