<?php
include('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$query1 = "INSERT INTO user(Username, Email, Password, Contact_Number)
VALUES ('$name','$email','$password','$number')";
mysqli_query($con, $query1);
// $query2 = "SELECT User_id FROM user WHERE Email = '$email'";
// $result2 = mysqli_query($con, $query2);
// while ($row = mysqli_fetch_array($result2)) {
//     $id = $row[0];
// }
$_SESSION['email'] = $email;
echo "<script>alert('Signup Successful, you can now login!')</script>";
echo "<script>location='index.php'</script>";
