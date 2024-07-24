<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="Penguine.ico" alt="Avatar Logo" style="width:60px;" class="rounded-pill bg-light">Coading</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto p-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bar.jpg" alt="Los Angeles" class="d-block" style="width:100%; height:600px; background-position: center; background-size: cover;">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="bar1.jpg" alt="Chicago" class="d-block" style="width:100%; height: 600px; background-position: center; background-size: cover;">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="bar3.jpg" alt="New York" class="d-block" style="width:100%; height: 600px; background-position: center; background-size: cover;">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="container-fluid mt-3">
        <h1 class="text-center ">Our Services</h1>
        <div class="row text-center justify-content-center ">

            <div class="card mx-md-5" style="width:400px">
                <img class="card-img-top" src="cocktail.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nam, neque saepe molestias commodi quidem eum doloribus adipisci tempora ratione minima. Ipsa
                        illum eveniet quos nihil cum nostrum maxime modi facere. Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Porro quaerat, eligendi iste similique praesentium laudantium amet, unde ut
                        laborum quos omnis! Iste vitae esse rerum ullam natus. Voluptatum, est quam.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="card mx-md-5" style="width:400px">
                <img class="card-img-top" src="moctails.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium voluptatem
                        iure quidem! Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>

            <div class="card mx-md-5" style="width:400px">
                <img class="card-img-top" src="bar2.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sapiente
                        excepturi dolorem eveniet. Aperiam. Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 bg-danger">
        <h1 class="text-center">Our Clients</h1>
        <div class="row justify-content-center">
            <div class="card mx-2 mb-2" style="width:200px;">
                <img class="card-img-top" src="burgerking.png" alt="Card image" height="250px">
            </div>
            <div class="card mx-2 mb-2" style="width:200px">
                <img class="card-img-top" src="dominos.png" alt="Card image" height="250px">
            </div>
            <div class="card mx-2 mb-2" style="width:200px">
                <img class="card-img-top" src="kfc.png" alt="Card image" height="250px">
            </div>
            <div class="card mx-2 mb-2" style="width:200px">
                <img class="card-img-top" src="logo3.jpg" alt="Card image" height="250px">
            </div>
            <div class="card mx-2 mb-2" style="width:200px">
                <img class="card-img-top" src="logo8.jpg" alt="Card image" height="250px">
            </div>

        </div>
    </div>

    <div class="container mt-3 mb-2">
        <h1 class="text-center">Contact</h1>
        <form action="add.php" enctype="multipart/form-data" method="post">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="mb-3">
                <label for="Number" class="form-label">Number:</label>
                <input type="number" class="form-control" placeholder="Enter Number" name="number">
            </div>
            <label for="text">Comments:</label>
            <textarea class="form-control" rows="5" name="text"></textarea>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <footer id="footer">
        <div class="container-fluid card-footer text-center mt-4 bg-black text-light">
            <h3>Brandon Johnson</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="">Abhishek Pandey</a>
            </div>
        </div>
    </footer>

</body>

</html>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'simple';
$conn = new mysqli($servername, $username, $password, $database);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $text = $_POST['text'];

    $query = "insert into form(name, email, number, text)
values('$name', '$email', '$number', '$text')";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('data added..')</script>";
    }
}
