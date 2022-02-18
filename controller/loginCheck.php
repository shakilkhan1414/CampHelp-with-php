<?php 
    session_start();
    require_once "../model/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        if(userLoginCheck($email,$password)){
            if($_SESSION['user_type']=='admin'){
                header("location:../view/adminHome.php");
            }
            else{
                header("location:../view/home.php");
            }

            }
            else{
                echo "*Email or Password incorrect!";
            }
        }
?>