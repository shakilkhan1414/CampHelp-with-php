<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <style>
        .login-form {
            width: 340px;
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
    <form action="../controller/loginCheck.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="email" class="form-control" name='email' placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name='password' placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        </div>        
    </form>
    <p class="text-center"><a href="signup.php">Create an Account</a></p>
</div>


</body>
</html>