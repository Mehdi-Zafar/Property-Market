<?php
session_start();
include('connection.php');
$ids = mysqli_query($con, "SELECT * from property_rent");
$row = mysqli_fetch_array($ids, MYSQLI_ASSOC);
$count = mysqli_num_rows($ids);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-4">
        <div class="container-fluid">
            <a class="navbar-brand px-4 bg-warning rounded-pill text-dark" href="index.php">Property Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
                    <li class="nav-item px-2">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="Prop_sale.php">Property for Sale</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link active" href="Prop_rent.php">Property for Rent</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <!-- Button trigger modal -->
                <?php if (!isset($_SESSION['email'])) : ?>
                    <button type="button" class="btn btn-outline-warning mx-2" data-bs-toggle="modal" data-bs-target="#signinModal">
                        Sign In
                    </button>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#signupModal">
                        Sign Up
                    </button>
                <?php else : ?>
                    <div class="dropdown text-end me-5" id="emailborder">
                        <a href="#" class="d-block link-light text-decoration-none dropdown-toggle text-light" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['email'] ?>
                        </a>
                    <?php endif; ?>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <?php if ($_SESSION['email'] == "ali@yahoo.com") : ?>
                            <li><a class="dropdown-item" href="Prop_rent_detail.php">Add Property for rent</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="Prop_sale_detail.php">Add Property for sale</a></li>
                            <div class="dropdown-divider"></div>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="wish_sale.php">Wishlist for sale</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="wish_rent.php">Wishlist for rent</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="signin.php" method="post">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="signup.php" method="post">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail2" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" name="email" required>
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword2" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" name="password" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contactno" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="contactno" name="number" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </nav>

    <main>
        <ul class="nav nav-tabs justify-content-center mb-2">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Prop_rent.php">All houses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Prop_rented.php">Houses on rent</a>
            </li>
        </ul>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php for ($x = 1; $x < $count + 1; $x++) : ?>
                <div class="col">
                    <div class="card h-100 bg-gradient border-light shadow m-2" style="background-color: #FFFFCC;">
                        <div class="card-body">
                            <h5 class="card-title text-center text-decoration-underline">Property <?php echo $x; ?></h5>
                            <p class="card-text"><b>Tenant Name: </b><?php $tenant_query = "SELECT Tenant_name from property_rent where Prop_rent_id = '$x'";
                                                                        $result = mysqli_query($con, $tenant_query);
                                                                        while ($row2 = mysqli_fetch_array($result)) {
                                                                            $tenant_name = $row2[0];
                                                                        }
                                                                        echo "$tenant_name"; ?></p>
                            <p class="card-text"><b>Address: </b><?php $address_query = "SELECT Address from property_rent where Prop_rent_id = '$x'";
                                                                    $result = mysqli_query($con, $address_query);
                                                                    while ($row2 = mysqli_fetch_array($result)) {
                                                                        $location = $row2[0];
                                                                    }
                                                                    echo "$location"; ?></p>
                            <p class="card-text"><b>Contact Number: </b><?php $contact_query = "SELECT Contact_number from property_rent where Prop_rent_id = '$x'";
                                                                        $result = mysqli_query($con, $contact_query);
                                                                        while ($row2 = mysqli_fetch_array($result)) {
                                                                            $contact_number = $row2[0];
                                                                        }
                                                                        echo "$contact_number"; ?></p>
                            <p class="card-text"><b>House Rent(PKR): </b><?php $housevalue_query = "SELECT House_rent from property_rent where Prop_rent_id = '$x'";
                                                                            $result = mysqli_query($con, $housevalue_query);
                                                                            while ($row2 = mysqli_fetch_array($result)) {
                                                                                $value = $row2[0];
                                                                            }
                                                                            echo "$value"; ?></p>
                            <p class="card-text"><b>Status: </b><?php $Status_query = "SELECT Status from property_rent where Prop_rent_id = '$x'";
                                                                $result = mysqli_query($con, $Status_query);
                                                                while ($row2 = mysqli_fetch_array($result)) {
                                                                    $status = $row2[0];
                                                                }
                                                                echo "$status"; ?></p>
                            <?php if ($status == 'Available') : ?>
                                <form action="wishlist_rent.php" method="get">
                                    <button class="btn btn-dark" value="<?php echo $x; ?>" name="wishlist">Add to wishlist</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </main>

    <footer class="text-center text-lg-start bg-dark text-light pt-1 mt-3">
        <div class="text-left p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="text-center text-warning">&copy; 2022 Property Market, Inc.</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>