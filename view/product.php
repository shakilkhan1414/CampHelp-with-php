<?php 
    session_start();
    require_once "../model/productModel.php";

    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
    
    $id=$_REQUEST['id'];
    $product=getProductById($id);

    $names=$product['name'];
    $description=$product['description'];
    $price=$product['price'];
    $available_time=$product['available_time'];
    $image=$product['image'];
    $user_id=$_SESSION['id'];
?>


<!DOCTYPE html>
<html>
<head>
    <title><?=$names?></title>

</head>
<body>
    <?php 
        include('header.php');
    ?>

<section class='container'>
    <div class="row">
        <div class="column">
            <img class="product-image" src="../images/<?=$image?>" alt='product_image'>
        </div>
        <div class="column">
            <h2 class='mb'><?=$names?></h2>
            <p class='mb'><?=$description?></p>
            <h4 class='mb'>Available for <?=$available_time?></h4>
            <h3 class='mb'>Price: $<?=$price?></h3>
            <form action="../controller/book.php" method="post">
                <input type="hidden" name="id" value='<?=$id?>'>
                <input type="hidden" name="userid" value='<?=$user_id?>'>
                <div class="form-group">
                    <label for="date">Select date</label>
                    <input type="date" class="form-control" name='date' required>
                </div>
                <button class="btn btn-primary" type="submit">Book Now</button>
                
            </form>
        </div>
    </div>
</section>

<style>
    .product-image{
        width:300px;
    }
    .row{
        display:flex;
    }
    .column{
        width:50%;
    }
    .mb{
        margin-bottom: 20px;
    }

</style>

</body>
</html>