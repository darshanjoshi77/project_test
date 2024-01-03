<!-- data not show in browser only show in postman and key value set in postman than 
enter and search data in json format  -->
<?php

header('Content-Type:application/json');
//header('Acess-Control-Allow-Origin : * ');//star use allow all website api (website name declare than only use in declare website)
 
$data = json_decode(file_get_contents("php://input"),true);

$user_id = $data['uid'];

include "connection.php";
$sql = "select * from user where id={$user_id}";
$rs = mysqli_query($con,$sql);
 if(mysqli_num_rows($rs)> 0)
 {
    $output = mysqli_fetch_all($rs,MYSQLI_ASSOC);
    echo json_encode($output);
   

 }
 else{
    echo json_encode(array("Message" => "Record Not Found"));
 }

 //postman header set key: Content-Type , value: application/json
 //body -> row select then  select your id set
//  {

//     "uid":"16"
// }
?>