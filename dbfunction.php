<?php

class dbfunction{
   function __construct(){
    require_once "dbconfig.php";
    $dbconnection=new dbconnection();
    $this->dbconn=$dbconnection->getdb();
   }
 
   function __destruct(){
 
   }

   function get_Today_News(){
    $stmt=$this->dbconn->prepare("SELECT * from news WHERE date=?");
    $stmt->bind_param("s",date('Y-m-d'));
    $execute=$stmt->execute();
    $result=$stmt->get_result();
   $this->dbconn->close();
   while ($row = $result->fetch_assoc()) {
     
      $prefinalresult[]=$row;
  }
  
   return $prefinalresult;
   }
   function addnews(){
       
   }
}
?>
