<?php
 
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin:*');
 header('Access-Control-Allow-Methods: DELETE');
 header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');
 
 
 $date=json_decode(file_get_contents("php://input"),true);
 
 $p_id=$data['pid'];
 
 include"config.php";
 
 $sql="DELETE FROM product WHERE id={$p_id}";
 
 if(mysqli_query($conn,$sql)){
     echo json_encode(array('message' => 'Product Deleted', 'status' => true));
 }
 else{
     echo json_encode(array('message' => 'Product Not Deleted', 'status' => true));
 }
 
  ?>