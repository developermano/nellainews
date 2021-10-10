<?php
require_once "dbfunction.php";


$title=$_POST['title'];
$fullnews=$_POST['fullnews'];
$img=$_POST['img'];
$date=$_POST['date'];

if (!is_null($title) && !is_null($fullnews) && !is_null($img) && !is_null($date)){


    $dbfunction=new dbfunction();
    $response=$dbfunction->addnews($title,$fullnews,$img,$date);
    echo json_encode($response);



}else{
    echo "i require title,fullnews,img and date";
}
?>