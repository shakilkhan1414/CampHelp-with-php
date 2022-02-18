<?php 
    session_start();
    require_once "../model/productModel.php";
    
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

    $id=$_SESSION['id'];
    $orders=getOrders($id);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>
    <?php 
        include('header.php');
    ?>

<section class='container'>
    <h2 class='text-center'>Orders</h2>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Sr. No.</th>
        <th scope="col">Product Name</th>
        <th scope="col">Available Time</th>
        <th scope="col">Price</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $c=1;
            foreach ($orders as $order) {
                $date=$order['date'];
                $product_id=$order['product_id'];
                $productDetails=getProductById($product_id);
                $productName=$productDetails['name'];
                $productPrice=$productDetails['price'];
                $availableTime=$productDetails['available_time'];
    
                echo "<tr>
                        <th scope='row'>$c</th>
                        <td>$productName</td>
                        <td>$availableTime</td>
                        <td>$$productPrice</td>
                        <td>$date</td>
                    </tr>";
                    $c++;
                }

        ?>
        
    </tbody>
    </table>
    <br>
    <div class='row text-center'>
    <a href="home.php" class="btn btn-success">Home</a>
    </div>
    

</section>


</body>
</html>