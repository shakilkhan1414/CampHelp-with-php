<?php
    require_once "../model/productModel.php";


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_REQUEST['id'];
        $userid=$_REQUEST['userid'];
        $date=$_REQUEST['date'];

        $order_data=[
            'id'=> $id,
            'userid'=> $userid,
            'date'=> $date
        ];

        if(order($order_data)){
            header("location:../view/success.php");
         }
         else{
             echo "*Something went wrong, try again!";
         }

    }
?>


