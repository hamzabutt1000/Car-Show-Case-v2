<html>
<style>
    table, th, td {
   border: 2px solid white;
   border-collapse: collapse;
   padding: 5px;
 }
    </style>

<head>
     <title>Login</title>
     <link rel="stylesheet" type="text/css" href="../css/register.css">
     <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script>
      $(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../user_info.php',
            data: $('form').serialize(),
            success: function () {
              alert('Succesfully Logged in!');
            }
          });

        });

      });
    </script>
</head>
<body>
<!-- <?php
        $con=  mysqli_connect("localhost", "root", "", "cars");
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from user_info");
       ?>
<div>
<table style="width:60%;color: white; margin-left: 30%;margin-top: 50px">
  <tr>
    <th style="text-align:center;"> Username </th>
    <th style="text-align:center;"> Password </th> 
  </tr>
<?php

             while($row=  mysqli_fetch_array($con))
             {
                 ?>
            <tr>
                <td style="text-align:center;"><?php echo $row['Username']; ?></td>
                <td style="text-align:center;"><?php echo $row['Password']; ?></td>
            </tr>
        <?php
             }
             ?>
</div>
            </table> -->
   
   <div class="loginbox">
   <img src="../Images/user.jpg" class="user">
   <h1> Account Login </h1 >

   <form id="ff" action="../user_info.php" method="post">
     <p>Username</p>
      <input type="email" name="Username" placeholder="e.g hamza@example.com" required>
     <p>Password</p>
     <input type="password" name="Password" placeholder="Enter Password" required>
     <input type="submit" name="" value="Login"/>
     <a href="#">Forgot Password?</a>
     <a style="margin-left:10%;font-size:16" href="index.php"><strong>Login as Guest</strong></a><br/>
     <a href="register.php">Don't have any account?<strong> Create one here.</strong></a>
     </form> 
   </div>
   <div>
    <p style="color: white;margin-left: 50%;margin-top: 300px;font-weight: bold;font-size: large;">To subscribe to our plan, you first need to register an account with us.
      Once you have an account, please log in to manage your account, and make purchases.
      
      </p>
    <p style="color: white;margin-left: 60%"><span class="glyphicon glyphicon-map-marker"></span> Iqbal town, Pakistan</p>
    <p style="color: white;margin-left: 60%"><span class="glyphicon glyphicon-phone"></span> +9320-0467586</p>
    <p style="color: white;margin-left: 60%"><span class="glyphicon glyphicon-envelope"></span> butthamza819@gmail.com</p>
</div>
</body>

</html>
