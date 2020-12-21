<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <link href="../css/shared.css" rel="stylesheet" type="text/css">
    <link href="../css/ferrari.css" rel="stylesheet" type="text/css">

    <title>Mercedes</title>
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

<div class="content">
    <div class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <img src="../images/logo5.png" class="img-responsive mercedes">
                </div>
                <div class="col-md-4">
                    <h1>Mercedes Benz</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container models">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m1.jpg" class="img" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Mercedes Benz A Class</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m2.jpg" class="img" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Mercedes Benz B Class</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m3.jpg" class="img" alt="Lights" style="width:100%;">
                        <div class="caption">
                            <p>Mercedes Benz E Class</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m4.jpg" class="img" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Mercedes Benz C Class</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m5.jpg" class="img" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p>Mercedes Benz G Class</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="">
                        <img src="../images/m6.jpg" class="img" alt="Lights" style="width:100%;">
                        <div class="caption">
                            <p>Mercedes Benz F700 Class</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

</body>
</html>