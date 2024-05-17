<?php
$server = "localhost";
$user = "root";
$pass = "Dheeraj";
$db = "assignment";

$conn = mysqli_connect($server, $user, $pass, $db);
$query = "SELECT * FROM employee";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading">Assignment</h1>
    <h1 class="insert">Insert Data Form</h1>
    <form action="edit.php" method="post" class="input-form">
        ID <input type="number" name="id"><br><br>
        Name <input type="text" name="name"><br><br>
        Gender <input type="text" name="gender"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>

<h2 class="insert">Data Displayed</h2>
    <table>
        <thead>
            <tr>
                <th>Emp_ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Buttons </th>
            </tr>
            <tbody>
                <tr>
                  <?php 
                  while($row = mysqli_fetch_row($result))
                  {
                 ?>
                  <td><?php echo $row[0];?></td>
                  <td><?php echo $row[1];?></td>
                  <td><?php echo $row[2];?></td>
                  <td><form action="post"><input type="button" name="edit" onclick="window.location.href='update.php' " value="Update"></form></td>
                  <td><form action="post"><input type="button" name="edit" onclick="window.location.href='delete.php' " value="Delete"</form></td>
                </tr>
                <?php
                  }
                  mysqli_close($conn);
                  ?>
                </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>

<?php 
$server = "localhost";
$user = "root";
$pass = "Dheeraj";
$dbname = "assignment";
$id = $_POST['id'];
$name = $_POST['name'];


$conn = mysqli_connect($server, $user, $pass, $dbname);
$query = "delete from employee where Emp_ID={$id}";
$result = mysqli_query($conn, $query);
if(!isset($result))
{
    echo "data is not deleted";
}
else{
    header("Location: http://localhost/php%20programs/assignmet/index.php");
    mysqli_close($conn);
}

