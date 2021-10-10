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
   $date=date('Y-m-d');
    $stmt=$this->dbconn->prepare("SELECT * from news WHERE date=?");
    $stmt->bind_param("s",$date);
    $execute=$stmt->execute();
    $result=$stmt->get_result();
   $this->dbconn->close();
   while ($row = $result->fetch_assoc()) {
     
      $prefinalresult[]=$row;
  }
  
   return $prefinalresult;
   }
   function addnews($title,$fullnews,$img,$date){
      $stmt=$this->dbconn->prepare("INSERT INTO news (title,fullnews,img,date) VALUES (?, ?, ?,?)");
      $stmt->bind_param("ssss",$title,$fullnews,$img,$date);
      $execute=$stmt->execute();
      $stmt->close();
      $res['status']=$execute;
      return $res;
   }
}
?>
