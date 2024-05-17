<?php
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$server = "localhost";
$user = "root";
$pass = "Dheeraj";
$db = "assignment";

$conn = mysqli_connect($server, $user, $pass, $db);
$query =  "insert into employee value('{$id}', '{$name}','{$gender}')";
$result = mysqli_query($conn, $query);
header("Location: http://localhost/php%20programs/assignmet/index.php");
mysqli_close($conn);
?>
