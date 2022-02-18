<?php 
    require_once "../model/productModel.php";
    $id=$_REQUEST['id'];
    if(deleteProduct($id)){
        header("location:../view/adminHome.php");
    }
?>

