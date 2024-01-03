<!-- data not show in browser only show in postman and key value set in postman than 
enter and search data in json format  -->
<?php

header('Content-Type:application/json');
//header('Acess-Control-Allow-Origin : * ');//star use allow all website api (website name declare than only use in declare website)
//header('Acess-Control-Allow-Method : POST ');
//header('Acess-Control-Allow-Headers : Acess-Control-Allow-Headers ,Content-Type,Acess-Control-Allow-Method,Authorization , X-Requested-With ');
$data = json_decode(file_get_contents("php://input"),true);

$id = $data['id'];
 $email = $data['email'];
echo $pass= $data['pass'];


include "connection.php";
echo $sql = "UPDATE user1 set email='{$email}',pass='{$pass}' where id='{$id}'";

 if($rs = mysqli_query($con,$sql))
 {
    echo json_encode(array("Message" => "updated successful","status"=>true));
 }
 else{
    echo json_encode(array("Message" => "error", "status"=>false));
 }

 //postman header set key: Content-Type , value: application/json
 //body -> row select then  select your id set
//  {

//     "uid":"16"
// }
?>