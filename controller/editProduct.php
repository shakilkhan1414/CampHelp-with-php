<?php
    require_once "../model/productModel.php";

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST['id'];
        $productName=process_input($_REQUEST['name']);
        $description=process_input($_REQUEST['description']);
        $price=process_input($_REQUEST['price']);
        $availableTime=process_input($_REQUEST['availableTime']);
        $availability=process_input($_REQUEST['availability']);

        $product=[
            'id'=> $id,
            'productName'=> $productName,
            'description'=> $description,
            'price'=> $price,
            'availableTime'=> $availableTime,
            'availability'=> $availability
        ];

        if(updateProduct($product)){
            header("location:../view/adminHome.php");
         }
         else{
             echo "*Something went wrong, try again!";
         }
    }
  
?>