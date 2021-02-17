<?php

include_once 'connection/connection.php';

// funkcija koja validejta datu


$username = $_POST['username'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$truckname = $_POST['truckname'];


$sql = "INSERT INTO register ( username, surname , password , email, phonenumber, truckname ) VALUES ( '$username' , '$surname' , '$password' ,'$email' , '$phonenumber' , '$truckname')";

mysqli_query($conn, $sql);




?>
