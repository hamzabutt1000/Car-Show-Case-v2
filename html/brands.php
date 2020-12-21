<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <link href="../css/shared.css" rel="stylesheet" type="text/css">
    <link href="../css/brands.css" rel="stylesheet" type="text/css">

    <title>Brands</title>
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

<div class="container content">
    <div class="row">
        <div class="col-md-4">
            <a href="ferrari.php"><img src="../images/logo1.png" class="img-responsive custom-img-f"></a>
        </div>
        <div class="col-md-4">
            <a href="lamborghini.php"><img src="../images/logo2.png" class="img-responsive custom-img-l"></a>
        </div>
        <div class="col-md-4">
            <a href="porsche.php"><img src="../images/logo3.png" class="img-responsive custom-img-p"></a>
        </div>
    </div>
    <div class="row" style="margin-top: 40px">
        <div class="col-md-4">
            <a href="audi.php"><img src="../images/logo4.png" class="img-responsive custom-img-ad"></a>
        </div>
        <div class="col-md-4">
            <a href="mercedes.php"><img src="../images/logo5.png" class="img-responsive custom-img-m"></a>
        </div>
        <div class="col-md-4">
            <a href="aston.php"><img src="../images/logo6.png" class="img-responsive custom-img-a"></a>
        </div>
    </div>
</div>

<script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>