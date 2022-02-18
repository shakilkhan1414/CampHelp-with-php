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
      <li class="active"><a href="adminHome.php">Product List</a></li>
      <li><a href="userList.php">User List</a></li>
      <li><a href="addProduct.php">Add Product</a></li>
      <li><a href='../controller/logout.php'>Log out</a></li>
      <li><a>Welcome <?=$_SESSION['name']?></a></li>
    </ul>
  </div>
</nav>

<section class='container'>
    <h2 class='text-center'>Product List</h2>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Available Time</th>
        <th scope="col">Availability</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($products as $product) {
                $id=$product['id'];
                $name=$product['name'];
                $description=$product['description'];
                $price=$product['price'];
                $available_time=$product['available_time'];
                $availability=$product['availability'];
                $image=$product['image'];
    
                echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$description</td>
                        <td>$$price</td>
                        <td>$available_time</td>
                        <td>$availability</td>
                        <td><img class='img' src='../images/$image'></td>
                        <td>
                            <a href='editProduct.php?id=$id' class='btn btn-primary btn-sm'>Edit</a>
                            <a href='../controller/deleteProduct.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                    </tr>";
                  
                }

        ?>

    </tbody>
    </table>
    <br>
    <div class='row text-center'>
    <a href="adminHome.php" class="btn btn-success">Home</a>
    <br><br>
    </div>
    

</section>




  
    <style>
        .navbar{
            border-radius:0px;
        }
        .img{
            height:40px;
        }
    </style>


</body>
</html>
