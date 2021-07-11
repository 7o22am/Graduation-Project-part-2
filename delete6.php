<?php 
 
 include("db.php");
 
 $d = $_GET['ids'] ;
 
 $sql = " delete from sec1 where id= $d " ;
 $q = $db->prepare($sql);
 $q->execute();
 header("Location:show_sec.php");
 
 ?>