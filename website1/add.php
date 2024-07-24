<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .d-block {
            height: 300px;
        }

        .col-5 {
            height: 300px;
            padding: 10px;
        }

        #i1 {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="047.jpg" alt="" style="width:50px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ms-5">
                        <a class="nav-link active " href="Home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Punjabi.php">Punjabi</a></li>
                            <li><a class="dropdown-item" href="Gujarati.php">Gujarati</a></li>
                            <li><a class="dropdown-item" href="Chinese.php">Chinese</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Catering.php">Catering</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Order Now</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="wallpaper_19.jpg" alt="Los Angeles" class="d-block " style="width:100%">
                <div class="carousel-caption">
                    <h6 class="text-dark">Catering</h6>
                    <h1 class="">Food On Way</h1>
                    <button type="button" class="btn btn-dark mb-xl-5">Oder Now</button>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-evenly bg-light pt-3 pb-4">
        <div class="col-md-5 mt-5">
            <form action="add.php" method="post" enctype="multipart/form-data">
                <h3 class="mb-4">Contact Form to Register</h3>
                <div class="mb-3">
                    <label for="fname" class="form-label">Name</label>
                    <input type="text" class="form-control" name="fname" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="Call" name="number" class="form-control" aria-describedby="emailHelp">
                    <div id="Call" class="form-text">We'll never share your Phone Number with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="msg" class="form-label">Message</label>
                    <textarea class="form-control" name="msg" rows="3"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-5 mt-5">
            <h3 class="mb-4">Address</h3>
            <p>1180 kimberly way, WILLISTON <br>
                New Delhi - 110006 <br>
                <i class="bi bi-telephone"></i> : 917-108-6727
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112102.75659100545!2d77.21034063453352!3d28.593441934413246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfce26ec085ef%3A0x441e32f4fa5002fb!2sRed%20Fort!5e0!3m2!1sen!2sin!4v1692602101295!5m2!1sen!2sin" style="width: 100%;" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- FAQ -->
    <div class="row justify-content-evenly pt-5 pb-5">
        <div class="col-md-10">
            <h3 class="text-center pb-4">FAQ</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until
                            the collapse plugin adds the appropriate classes that we use to style each element.
                            These classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default
                            variables. It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each
                            element. These classes control the overall appearance, as well as the showing and hiding
                            via CSS transitions. You can modify any of this with custom CSS or overriding our
                            default variables. It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                            the collapse plugin adds the appropriate classes that we use to style each element.
                            These classes control the overall appearance, as well as the showing and hiding via CSS
                            transitions. You can modify any of this with custom CSS or overriding our default
                            variables. It's also worth noting that just about any HTML can go within the
                            <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-dark text-white text-center justify-content-evenly">
        <div class="col-md-3 pt-4">
            <h3 class="pb-3">Lorem, ipsum.</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit doloremque deleniti nam perferendis
                ipsum nihil eveniet, adipisci aliquid aut cum.</p>
        </div>
        <div class="col-md-3 pt-4 ">
            <h3 class="pb-3">Links</h3>
            <p class="">
                <a href="" class="link-light text-decoration-none">Home</a><br>
                <a href="" class="link-light text-decoration-none">About us</a><br>
                <a href="" class="link-light text-decoration-none">Services</a><br>
                <a href="" class="link-light text-decoration-none">Contact</a><br>
            </p>
        </div>
        <div class="col-md-3 pt-4">
            <h3 class="pb-3">Contact Us</h3>
            1180 kimberly way, WILLISTON <br>
            New Delhi - 110006 <br>
            <i class="bi bi-telephone"></i> : 917-108-6727
        </div>
    </div>
    <div class="row bg-secondary text-center pt-3">
        <div class="col-md-12">
            <p class="text-white fs-5">&copy; 2023 Copyright <span class="text-danger">NATURE</span>. All rights
                reserved. Designed by <span class="text-warning">Abhishek Pandey</span></p>
        </div>
    </div>
    </div>
</body>

</html>

<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$database = 'website1';
$conn = new mysqli($servername, $username, $password, $database);


if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $msg = $_POST['msg'];

    $query = "insert into form (name, email, number, msg)
    values('$fname', '$email', '$number', '$msg')";

    if (mysqli_query($conn, $query)) {
        echo "<script> alert('data added successfully...')</script>";
    }
}
