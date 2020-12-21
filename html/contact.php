<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <link href="../css/shared.css" rel="stylesheet" type="text/css">
    <link href="../css/brands.css" rel="stylesheet" type="text/css">

    <title>Contact us</title>
</head>
<body style="background : url('../images/covercontact.jpg'); background-repeat: no-repeat;object-fit: cover; margin-top: -50px;margin-right: 30px">
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

<div class="row">
    <div class="col-sm-5">
        <p style="color: white;margin-left: 50px;margin-top: 200px">Contact us and we'll get back to you within 24 hours.</p>
        <p style="color: white;margin-left: 50px"><span class="glyphicon glyphicon-map-marker"></span> Iqbal town, Pakistan</p>
        <p style="color: white;margin-left: 50px"><span class="glyphicon glyphicon-phone"></span> +9320-0467586</p>
        <p style="color: white;margin-left: 50px"><span class="glyphicon glyphicon-envelope"></span> butthamza819@gmail.com</p>
    </div>
<div class="col-sm-7">


<div class="row margin">

    <h2 style="color: white;font-family:siteItalicFont;text-align: center;">Contact us!</h2>
    <div class="col-sm-6 form-group">


        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
    </div>
    <div class="col-sm-6 form-group">
        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
    </div>
</div>
<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
<div class="row">
    <div class="col-sm-12 form-group">
        <button style="margin-left:250px " class="btn btn-default btn1" type="submit">Send</button>
    </div>
</div>
</div>


<script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>



</body>
</html>