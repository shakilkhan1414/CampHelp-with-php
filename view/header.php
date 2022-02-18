
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">CampingHelp</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="home.php">Home</a></li>
      <?php 
        if(isset($_SESSION['login'])){
            $name=$_SESSION['name'];
            echo "  <li><a href='orders.php'>Orders</a></li>
                    <li><a href='../controller/logout.php'>Log out</a></li>
                    <li><a>Welcome $name</a></li>";
        }
        else{
            echo "  <li><a href='login.php'>Log in</a></li>
                    <li><a href='signup.php'>Sign up</a></li>";
        }
      ?>

        

    </ul>
  </div>
</nav>
  
    <style>
        .navbar{
            border-radius:0px;
        }
    </style>


</body>
</html>
