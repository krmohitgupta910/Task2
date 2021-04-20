<?php
 
 header('Content-Type: application/json');
 header('Access-Control-Allow-Origin:*');
 header('Access-Control-Allow-Methods: PUT');
 header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');
 `
 
 $date=json_decode(file_get_contents("php://input"),true);
 
 $p_id=$data['pid'];
 $p_name=$data['pname'];
 $p_category=$data['pcategory'];
 $p_description=$data['pdescription'];
 $p_image=$data['pimage'];
 $p_quantity=$data['pquantity'];
 $p_keyword=$data['pkeyword'];
 
 include"config.php";
 
 $sql="UPDATE product SET pname='{$p_name}', pcategory='{$p_category}', pdescription='{$p_description}', pimage='{$p_image}', pquantity='{$p_quantity}', pkeyword='{$p_keyword}' WHERE p_id=$pid "; 
 
 if(mysqli_query($conn,$sql)){
     echo json_encode(array('message' => 'Product Updated', 'status' => true))
 }
 else{
     echo json_encode(array('message' => 'Product Not Updated', 'status' => true))
 }
 
  ?>