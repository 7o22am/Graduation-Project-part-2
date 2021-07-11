<?php 
 
 include("db.php");
 
 $d = $_GET['ids'] ;
 
 $sql = " delete from sec4 where id= $d " ;
 $q = $db->prepare($sql);
 $q->execute();
 header("Location:show_sec4.php");
 
 ?>