<?php
    define('server','localhost');
    define('user','root');
    define('password','');
    define('database','campinghelp');

    function getConnection(){
		$conn=mysqli_connect(server,user,password,database);
        if(!$conn){
            die("coneection Failed ".mysqli_connect_error());
        }
		return $conn;
	}
?>