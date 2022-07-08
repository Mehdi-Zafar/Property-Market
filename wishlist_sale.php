<?php
session_start();
include('connection.php');
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $query2 = "SELECT User_id FROM user WHERE Email = '$email'";
    $result2 = mysqli_query($con, $query2);
    while ($row = mysqli_fetch_array($result2)) {
        $id = $row[0];
    }
    $wish = $_GET['wishlist'];
    $query1 = "INSERT INTO wishlist_sale(User_id, Prop_sale_id)
VALUES ('$id','$wish')";
    mysqli_query($con, $query1);
    echo "<script>alert('Added successfully!')</script>";
    echo "<script>location='wish_sale.php'</script>";
} else {
    echo "<script>alert('Login to continue!')</script>";
    echo "<script>location='Prop_sale.php'</script>";
}
