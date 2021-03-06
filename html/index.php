<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="../css/shared.css" rel="stylesheet" type="text/css">
    <link href="../css/index.css" rel="stylesheet" type="text/css">

    <title>Home</title>
</head>
<body>
<nav class="navbar header navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Cars Showcase</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php">Log out</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li class="active"><a href="brands.php">Brands</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Models <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="ferrari.php">Ferrari</a></li>
                        <li><a href="lamborghini.php">Lamborgini</a></li>
                        <li><a href="porsche.php">Porsche</a></li>
                        <li><a href="audi.php">Audi</a></li>
                        <li><a href="mercedes.php">Mercedes</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid slider">
    <div id="myCarousel" class="carousel slide custom-carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">


            <div class="item active">
                <img class="custom-carousel-img" src="../images/car1.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>~Dale~</h3>
                    <p>It's a never ending battle of making your cars better and also trying to be better yourself</p>
                </div>
            </div>

            <div class="item">
                <img class="custom-carousel-img" src="../images/car2.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                    <h3>~Bro~</h3>
                    <p>I've always been asked, 'What is my favorite car?' and I've always said 'The next one</p>
                </div>
            </div>

            <div class="item">
                <img class="custom-carousel-img" src="../images/car3.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                    <h3>~Prince~</h3>
                    <p>The fact is I don't drive just to get from A to B. I enjoy feeling the car's reactions, becoming part of it</p>
                </div>

            </div>

            <div class="item">
                <img class="custom-carousel-img" src="../images/car4.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                    <h3>~Enzoy~</h3>
                    <p>A muscle is like a car. If you want it to run well early in the morning, you have to warm it up</p>
                </div>
            </div>

            <div class="item">
                <img class="custom-carousel-img" src="../images/car5.jpg" alt="New york" style="width:100%;">
                <div class="carousel-caption">
                    <h3>~Alexandra~</h3>
                    <p>The cars we drive say alot about us</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>