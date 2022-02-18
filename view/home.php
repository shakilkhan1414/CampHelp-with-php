<?php 
    session_start();
    require_once "../model/productModel.php";

    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

    $products=getAllProduct();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php 
        include('header.php');

    ?>
    
<section class='container'>

    <?php 
        foreach ($products as $product) {
            $id=$product['id'];
            $name=$product['name'];
            $price=$product['price'];
            $available_time=$product['available_time'];
            $image=$product['image'];

            echo "<div class='card' style='width: 25rem;'>
                    <img class='card-img-top' src='../images/$image' alt='product_image'>
                    <div class='card-body'>
                        <h4>$name</h4>
                        <p class='card-text'>$available_time</p>
                        <p class='card-text bold'>$$price</p>
                        <a href='product.php?id=$id' class='btn btn-primary'>Book</a>
                    </div>
                </div>";
          }

    ?>

</section>

<style>
    .container{
        display:flex;
        justify-content:start;
        align-items:center;
        flex-wrap: wrap;
    }
    .card{
        border: 1px solid rgba(0,0,0,0.1);
        padding: 15px;
        border-radius: 10px;
        margin:10px;
    }
    .bold{
        font-weight: bold;
    }
    .card-img-top{
        height: 200px;
        width: 22rem;
    }
</style>

</body>
</html>