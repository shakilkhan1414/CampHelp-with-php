<?php
    require_once "../model/productModel.php";

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $productName=process_input($_REQUEST['name']);
        $description=process_input($_REQUEST['description']);
        $price=process_input($_REQUEST['price']);
        $availableTime=process_input($_REQUEST['availableTime']);
        $availability=process_input($_REQUEST['availability']);


        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
                    
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
    
        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];
        if(in_array($img_ext, $extensions) === true){
            if($img_size > 5242880){
                echo "*Max upload size is 5 MB!";
            }
            else{
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"../images/".$new_img_name)){
                    $product=[
                        'productName'=> $productName,
                        'description'=> $description,
                        'price'=> $price,
                        'availableTime'=> $availableTime,
                        'availability'=> $availability,
                        'image'=> $new_img_name
                    ];

                    if(insertProduct($product)){
                        header("location:../view/adminHome.php");
                     }
                     else{
                         echo "*Something went wrong, try again!";
                     }

                }
            }
        }
        else{
            echo "*Invalid file format!";
        }
    }
  
?>