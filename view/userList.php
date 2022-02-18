<?php 
    session_start();
    require_once "../model/userModel.php";
    
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }

    $users=getAllUser();

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
      <li class="active"><a href="userList.php">User List</a></li>
      <li><a href="addProduct.php">Add Product</a></li>
      <li><a href='../controller/logout.php'>Log out</a></li>
      <li><a>Welcome <?=$_SESSION['name']?></a></li>
    </ul>
  </div>
</nav>

<section class='container'>
    <h2 class='text-center'>User List</h2>
    <br>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">User Type</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($users as $user) {
                $id=$user['id'];
                $name=$user['name'];
                $email=$user['email'];
                $user_type=$user['user_type'];
    
                echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$user_type</td>
                    </tr>";
                  
                }

        ?>

    </tbody>
    </table>
    <br>
    <div class='row text-center'>
    <a href="adminHome.php" class="btn btn-success">Home</a>
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
