<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <style>
        .login-form {
            width: 400px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        include('header.php');
    ?>

<div class="login-form">
    <form action="../controller/signup.php" method="post">
        <h2 class="text-center">Sign up</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name='name' placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name='email' placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name='password' placeholder="Enter Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name='repassword' placeholder="Retype Password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign up</button>
        </div>      
    </form>
    <p class="text-center"><a href="login.php">Login</a></p>
</div>


</body>
</html>