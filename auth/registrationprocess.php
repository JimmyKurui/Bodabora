<?php

include_once '../classes/user.php';
include_once '../classes/db.php';


session_start();

if(isset($_POST["register"])) {
	$name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

	$con= new DBConnector();
	$pdo = $con->connectToDB();
	
	$user= new User();
	//set member variable
	$user->setFullname($fullname);
	$user->setEmail($email);
	$user->setPassword($password);
	$user->setCity($city);

	echo $user->register($pdo);
}

if(isset($_POST['login'])) {
	$email= $_POST['uemail'];
	$password= $_POST['upass'];

	$con= new DBConnector();
	$pdo = $con->connectToDB();
	$user= new User();


	$user->setEmail($email);
	$user->setPassword($password);

	if($user->login($pdo)) {
		header("location: 1-userpage.php");
	} else {
		header("location: 1-regform.php");
	}  
}
if(isset($_POST['logout'])) {
	$pdo= new DBConnector();
	$user= new User();
	$user->logout($pdo);
}

if(isset($_POST['changepass'])) {
	$newpass= $_POST['npass'];

	$con= new DBConnector();
	$pdo = $con->connectToDB();
	$user= new User();	

	$user->setPassword($newpass);
	$user->changePassword($pdo);

}

?>