<?php 
	$dsn = 'mysql:host=localhost; dbname=tweety';
	$user = 'root';
	$password = '';
 

	try{
		$pdo = new PDO($dsn, $user, $pass);
	}catch(PDOException $e){
		echo 'connection error! ' . $e->getMessage();
	}	
?>