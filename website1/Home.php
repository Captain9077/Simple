<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food resturent</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

        p {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: larger;
        }

        h1 {
            color: #680909;
        }

        .d-block {
            height: 600px;
        }
    </style>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
                <img src="047.jpg" alt="" style="width:50px;" class="rounded-pill">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ms-5">
                        <a class="nav-link " href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Punjabi.php">Punjabi</a></li>
                            <li><a class="dropdown-item" href="#">Gujarati</a></li>
                            <li><a class="dropdown-item" href="#">Chinese</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Catering.php">Catering</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-primary " href="javascript:void(0)">Order Now</a>
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

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="food3.jpg" alt="Los Angeles" class="d-block bg-opacity-25" style="width:100%">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                    <button type="button" class="btn btn-dark">Oder Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="food4.jpg" alt="Chicago" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                    <button type="button" class="btn btn-dark">Oder Now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="food8.jpg" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3 class="text-dark">New York</h3>
                    <p class="text-dark">We love the Big Apple!</p>
                    <button type="button" class="btn btn-dark ">Oder Now</button>
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
    <div class="container-fluid mt-2 p-5 rounded">
        <h1 class="d-flex justify-content-md-center">OFFERING A GOURMET EXPERIENCE THROUGH ONLINE FOOD ORDERING</h1>
        <div class="row mt-4 ">
            <div class="col-6 ">
                <img src="logo9.jpg" alt="New York" class=" rounded ms-4" style="width:90%">
            </div>
            <div class="col-6">
                <p>Food is an experience to be explored and enjoyed! We, at Food On Way (FOW), strive to provide you with just that! A hassle-free food experience in the comfort of their home space or office space is what people opt for in this fast-paced world.
                    <br>
                    Gone are the days when one would have to drive to the restaurant amid a busy day to taste sumptuous food. ‘Convenience’ has become the theme now. Online food ordering is not only convenient but also comforting. One gets the luxury of ordering different cuisines at the same time from any place and savouring them in the comfort of his/her place of choice. Food On Way is a high-class pure vegetarian cloud kitchen that aims to serve our patrons, exciting dishes perfectly blended with good taste and value for money through online food ordering.
                    <br>
                    The pandemic has taken online food ordering to a whole new level altogether. Statistics reveal that people between the ages of 25 to 34 years engage in online food ordering at least twice a week! With such an increase in demand, comes the challenge of serving wholesome, freshly cooked delectable food at pocket-friendly prices. And that is exactly where Food On Way has carved a niche for ourselves!
                    <br>
                    We, at FOW, offer a delightful range of authentic vegetarian North Indian fare and Chinese cuisine. What more?! We deliver these meals right to your doorstep. Online food ordering has never been such an enjoyable experience!
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2 p-3 rounded ">
        <h1 class="d-flex justify-content-md-center">FOOD ON WAY, THE TAKE-OUT RESTAURANT WITH A DIFFERENCE</h1>
        <div class="row mt-4 ">
            <div class="col-5 ms-4">
                <p>FOW is emerging as one of the top take-out and delivery restaurants. We cater to all your lunch and dinner needs. What sets us a class apart is that our focus is not just on the finished product but on the entire process and art of making it. We cater to food connoisseurs who have a taste for the spicy, butter-dripping Punjabi cuisine; the sweet to spicy, tangy to salty flavours of the Gujarati cuisine and the aromatic Chinese cuisine characterized by its unique sauce varieties.

                    We are a delivery restaurant that specializes in delivering a delectable array of drool-worthy dishes ranging from Parathas to Paneer exclusives; Gujarati thali meals to Hakka noodles. With many new food take-out restaurants sprouting in numbers by the day, providing high-quality, delicious food is our promise to the food lovers we cater to.

                    At FOW, we offer a wide range of choices including combos and fixed meals as well as a la carte options. This makes us one of the most preferred food delivery restaurants. Our fixed meals, Paratha meals and combos are pocket-friendly options that are sure to have your hunger pangs sorted out. Our rice bowls are yet another favourite among foodies. Order at the scroll of a page, at the convenience of your home and experience the amalgamation of flavours in our food delivered at your doorstep!
                </p>
            </div>
            <div class="col-6 ">
                <img src="Image00116.jpg" alt="New York" class="rounded ms-4" style="width:90%">
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <h1 class="d-flex justify-content-md-center">FOOD NEARBY PRAHLAD NAGAR | VASTRAPUR | SOUTH BOPAL</h1>
        <p class="text-md-justify">FOW, your favourite food buddy has three branches in Ahmedabad, one each nearby Prahladnagar, Vastrapur and South Bopal. Started in 2015 in Ahmedabad, FOW aims to have 50+ outlets by 2026 Pan India.

            Convenient leak-proof packaging, quick delivery and good quantity are some of our specialities. We have customized meal options which provide great choices in terms of the quantity of food and the number of food items. This makes us a food joint that suits the needs of every person and budget. If you want to taste some lip-smacking dishes at a reasonable price in Ahmedabad, FOW nearby Vastrapur, Prahalad Nagar amd South Bopal are your go-to places.
        </p>
    </div>
    <div class="container-fluid ">
        <h1 class="d-flex justify-content-md-center">OUR VISION</h1>
        <p class="text-md-center">With a dream and a grand vision to bring sumptuous, authentic North Indian and Chinese fare to your doorstep, Quinjal Jain founded the exclusive veg cloud kitchen ‘Food On Way’ in 2015, in Vastrapur, Ahmedabad. Vishal Jain and Goutam Rungta have now joined hands with her with a focus on growing Food on Way by putting in good systems, best management practices and quality control measures</p>
    </div>
    <div class="container-fluid ">
        <h1 class="d-flex justify-content-md-center">OUR MISSION</h1>
        <p class="text-md-center">We, at Food On Way, stand for providing a high Quality, Value for money, healthy & nutritious meal to our patrons. We take great pride in saying with conviction that we do not use any artificial colours or preservatives. We use natural and fresh ingredients like lemon, salt, sugar and tomatoes and other spices to do the job of artificial colours and preservatives!</p>
    </div>
    <div class="container-fluid ">
        <h1 class="d-flex justify-content-md-center">COOKING WITH LOVE AND CARE</h1>
        <p class="text-md-center">Lucky is the man who gets to eat a home-cooked meal every day, cooked to perfection with great love and care by his family. It is indeed true that a dash of love added to the cooking makes the food taste a lot more delicious.
            <br>
            An article in University Herald (June 29, 2022) talks about Studies that suggest that food prepared with love and effort is perceived to taste better. We cannot agree more on this and we ensure that each meal cooked in the kitchen of Food On Way is cooked with great love and care. And how do we do that? We have designed our kitchen in such a way that it is well ventilated and clean, thereby providing a positive environment in which our staff can cooks with love and enjoy the process.
        </p>
        <div class="container-fluid ">
            <h1 class="d-flex justify-content-md-center">SAFETY</h1>
            <p class="text-md-center">Safety is our priority and We pull all the strings towards this. We have periodic health checks for the entire team, chose well-designed high-quality materials for packing the food and provide a hair net, apron and gloves to our staff to ensure high standards of hygiene and safety.
            </p>
        </div>
        <div class="container-fluid ">
            <h1 class="d-flex justify-content-md-center">EFFICIENT DELIVERY</h1>
            <p class="text-md-center">Quick delivery is yet another promise we give our patrons. Our staffs strive to prepare each meal with fresh ingredients in the shortest possible duration of time. We also provide contactless delivery wherein the delivery person will drop the parcel at the door or mentioned drop point, ring the bell and leave.
            </p>
        </div>
        <footer id="footer">
            <div class="container-fluid card-footer text-center mt-4 bg-dark text-light">
                <h3>FOOD ON WAY</h3>
                <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                    placeat.</p>
                <div class="copyright">
                    &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <span>Abhishek Pandey</span>
                </div>
            </div>
        </footer>
</body>

</html>