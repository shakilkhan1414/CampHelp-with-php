<?php

	require_once('connection.php');


	function getProductById($id){

		$conn = getConnection();

		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getAllProduct(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$products =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($products, $row); 
		}

		return $products;
	}

	function insertProduct($product){

		$conn = getConnection();
		$sql = "insert into products values('','{$product['productName']}','{$product['description']}','{$product['price']}','{$product['availableTime']}','{$product['availability']}','{$product['image']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateProduct($product){
		$conn = getConnection();
		$sql = "update products set name='{$product['productName']}', description='{$product['description']}',price='{$product['price']}',available_time='{$product['availableTime']}', availability='{$product['availability']}' where id='{$product['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$conn = getConnection();
		$sql = "delete from products where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function order($order){

		$conn = getConnection();
		$sql = "insert into orders values('','{$order['userid']}','{$order['id']}','{$order['date']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

    function getOrders($id){
		$conn = getConnection();

		$sql = "select * from orders where ordered_by='{$id}'";
		$result = mysqli_query($conn, $sql);
		$orders =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($orders, $row); 
		}

		return $orders;
	}

?>