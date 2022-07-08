<?php
include('connection.php');

$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];
$address = $_POST['address'];
$number = $_POST['number'];

if (isset($_POST['submit'])) {

    $query = "INSERT INTO property_sale(Owner_name, Status, Contact_number, House_value, Address) VALUES('$name', '$type', '$number','$price','$address')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('New property added successfully!')</script>";
        echo "<script>location='Prop_sale.php'</script>";
    } else {
        echo "<script>alert('Unsuccessful!')</script>";
        echo "<script>location='Prop_sale_detail.php'</script>";
    }
}
