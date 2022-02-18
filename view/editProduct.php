<?php 
    session_start();
    require_once "../model/productModel.php";
    
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

    $productID=$_REQUEST['id'];
    $product=getProductById($productID);
    
    $productName=$product['name'];
    $description=$product['description'];
    $price=$product['price'];
    $available_time=$product['available_time'];
    $availability=$product['availability'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminHome.php">CampingHelp</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="adminHome.php">Product List</a></li>
      <li><a href="userList.php">User List</a></li>
      <li><a href="addProduct.php">Add Product</a></li>
      <li><a href='../controller/logout.php'>Log out</a></li>
      <li><a>Welcome <?=$_SESSION['name']?></a></li>
    </ul>
  </div>
</nav>

<section class='container'>
    <h2 class='text-center'>Edit Product</h2>
    <br>
    <br>
        <div class="login-form">
        <form action="../controller/editProduct.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value='<?=$productID?>'>     
            <div class="form-group">
                <input type="text" class="form-control" name='name' placeholder="Enter Product Name" value='<?=$productName?>' required>
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="Enter Product Description" class="form-control" rows="5" required><?=$description?></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='price' placeholder="Enter Product Price" value='<?=$price?>' required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='availableTime' placeholder="Enter Available Time" value='<?=$available_time?>' required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='availability' placeholder="Enter Availability" value='<?=$availability?>' required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>      
        </form>
    </div>
    <br>
</section>

<style>
        .navbar{
            border-radius:0px;
        }

    </style>

</body>
</html>
