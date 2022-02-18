<?php
    require_once "../model/userModel.php";

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=process_input($_REQUEST['name']);
        $email=process_input($_REQUEST['email']);
        $password=process_input($_REQUEST['password']);
        $repassword=process_input($_REQUEST['repassword']);

        $user_data=[
            'name'=> $name,
            'email'=> $email,
            'password'=> $password,
            'repassword'=> $repassword
        ];

        $conn = getConnection();
        $sql = "select * from users where email='{$email}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "*Email already exist!";
        }
        else{
            if($password==$repassword){
                if(insertUser($user_data)){
                    header("location:../view/login.php");
                 }
                 else{
                     echo "*Something went wrong, try again!";
                 }
            }
            else{
                echo "*Password do not match!";
            }
        }
    }
?>


