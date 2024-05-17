<?php 
echo "<h2>Data in database</h2><br>";
$server = "localhost";
$user = "root";
$pass = "Dheeraj";
$dbname = "assignment";
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];


$conn = mysqli_connect($server, $user, $pass, $dbname);
$query = "update employee set Name = '{$name}', Gender = '{$gender}' where Emp_ID = {$id}";
$result = mysqli_query($conn, $query);

if(!isset($result))
{
    echo "data is not updated";
}
else
{
    header("Location: http://localhost/php%20programs/assignmet/index.php");
    mysqli_close($conn);

}
?>
