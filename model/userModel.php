<?php

	require_once('connection.php');

	function userLoginCheck($email,$password){

		$conn = getConnection();
		$sql = "select * from users where email='{$email}' and password='{$password}'";

        $result = $conn->query($sql);
		if($result-> num_rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['login']=true;
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
			$_SESSION['user_type']=$row['user_type'];
            return true;
        }
        else{
            return false;
        }
	}

	function getUserById($id){

		$conn = getConnection();

		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into users values('','{$user['name']}','{$user['email']}','{$user['password']}','user')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateUser($user){
		$conn = getConnection();
		$sql = "update users set name='{$user['name']}', email='{$user['email']}' where id='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>