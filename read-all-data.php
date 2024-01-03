<?php

header('Content-Type:application/json');
//header('Acess-Control-Allow-Origin : * ');//star use allow all website api (website name declare than only use in declare website)
include "connection.php";
$sql = "select * from user";
$rs = mysqli_query($con,$sql);
 if(mysqli_num_rows($rs)> 0)
 {
    $output = mysqli_fetch_all($rs,MYSQLI_ASSOC);
    echo json_encode($output);
   

 }
 else{
    echo json_encode(array("Message" => "Record Not Found"));
 }
?>