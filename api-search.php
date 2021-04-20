<?php
 
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin:*');
 
 
 $date=json_decode(file_get_contents("php://input"),true);
 
 $p_search=$data['psearch'];
 
 include"config.php";
 
 $sql="SELECT * FROM product WHERE pkeyword LIKE '{$p_search}'";
 $result=mysqli_query($conn,$sql) or die("sql Query failed");
 
 if(mysqli_num_rows($result) > 0){
     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
     echo json_encode($output);
 }
 else{
     echo json_encode(array('message' => 'Product Not Deleted', 'status' => true));
 }
 
  ?>