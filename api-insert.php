 <?php
 
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type, Acess-Control-Allow-Methods, Authorization,X-Requested-With');
`

$date=json_decode(file_get_contents("php://input"),true);

$p_name=$data['pname'];
$p_category=$data['pcategory'];
$p_description=$data['pdescription'];
$p_image=$data['pimage'];
$p_quantity=$data['pquantity'];
$p_keyword=$data['pkeyword'];

include"config.php";

$sql="INSERT INTO product(pname, pcategory, pdescription, pimage, pquantity, pkeyword) VALUES ('{$p_name}','{$p_category}','{$p_description}','{$p_image}','{$p_quantity}','{$p_keyword}')";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Product Inserted', 'status' => true));
}
else{
    echo json_encode(array('message' => 'Product Not Inserted', 'status' => true));
}

 ?>