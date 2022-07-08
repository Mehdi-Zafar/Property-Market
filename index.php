<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = null;
}
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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="Prop_sale.php">Property for Sale</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="Prop_rent.php">Property for Rent</a>
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
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/image.jpg" class="d-block w-100" alt="Image1">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-warning">Find your dream property with us!</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="images\image1.jpg" alt=""> -->
    </main>

    <footer class="text-center text-lg-start bg-dark text-light pt-1">
        <div class="text-left p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="text-center text-warning">&copy; 2022 Property Market, Inc.</div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>