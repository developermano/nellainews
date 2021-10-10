 
<?php

require_once "dbfunction.php";

$dbfunction=new dbfunction();
    $response=$dbfunction->get_Today_News();
    echo json_encode($response);



?>