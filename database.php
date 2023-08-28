<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "recipe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$review = $_POST['review'];



$sql = "INSERT INTO `recipe_details`(`Name`, `Email`, `Contact`, `Review`) VALUES ('{$name}','{$email}','{$number}','{$review}')";
// echo "$query";
$res = mysqli_query($conn, $sql) or die("not done");


header('location:index.html');

?>