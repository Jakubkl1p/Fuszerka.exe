<?php
$db_host = "localhost";
$db_username = "root";
$db_password="";
$database="tutorsfind";

$email = $_POST["email"];
$password = $_POST["password"];
$repeatPassword= $_POST["repeat"];


$conn = mysqli_connect($db_host, $db_username, $db_password, $database);
$hashed_password = hash('sha256', $password);

$query="INSERT INTO user (email,password,isTutor) VALUES ('$email', '$hashed_password',0);";

if($password == $repeatPassword){
    mysqli_query($conn, $query);
};

mysqli_close($conn);
header('location:login.php');