<html>
  <style>
    table, th, td {
   border: 2px solid white;
   border-collapse: collapse;
   padding: 5px;
 }
    </style>

<head>
     <title>Registeration</title>
     <link rel="stylesheet" type="text/css" href="../css/register.css">
     <link rel="stylesheet" href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">
    
    <script src="../js/jquery.min.js"></script>
    <script>
      function sub() {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: '../basic_info.php',
            data: $('form').serialize(),
            success: function () {
              alert('Succesfully Registered!');
                window.location.reload();
            }
          });

        });

      };
      function del(id){
// alert(id)
// return false;
          // alert('delete')
          $.ajax({
              type: 'post',
              url: 'delete.php?id='+id,
              //   data: $('form').serialize(),
              success: function () {
                alert('Data Deleted Succesfully');
                  window.location.reload();
              }
          });
      }
    </script>
   
</head>
<body>
<?php
        $con=  mysqli_connect("localhost", "root", "", "cars");
        if(!$con)
       {
           die('not connected');
       }
            $con=  mysqli_query($con, "select * from basic_info");
       ?>
<div>
<table style="width:60%;color: white; margin-left: 30%;margin-top: 50px">
  <tr>
    <th style="text-align:center;"> First Name </th>
    <th style="text-align:center;"> Last name </th>
    <th style="text-align:center;"> Father Name </th>
    <th style="text-align:center;"> CNIC </th>
    <th style="text-align:center;"> Email </th>
    <th style="text-align:center;"> Password </th>
    <th style="text-align:center;"> Address </th>
    <th style="text-align:center;"> City </th>
      <th style="text-align:center;">Delete</th>
      <th style="text-align:center;">Update</th>
  </tr>
<?php

             while($row=  mysqli_fetch_array($con))
             {
                 $id = $row["id"];
                 ?>
            <tr>
                <td style="text-align:center;"><?php echo $row['f_name']; ?></td>
                <td style="text-align:center;"><?php echo $row['l_name']; ?></td>
                <td style="text-align:center;"><?php echo $row['father_name']; ?></td>
                <td style="text-align:center;"><?php echo $row['cnic'] ;?></td>
                <td style="text-align:center;"><?php echo $row['email'] ;?></td>
                <td style="text-align:center;"><?php echo $row['pass'] ;?></td>
                <td style="text-align:center;"><?php echo $row['address'] ;?></td>
                <td style="text-align:center;"><?php echo $row['city'] ;?></td>
                <td style="color:black"><button type="button" onclick="del(<?=$id;?>)">Delete</button></td>
                <td style="color:black"><button type="button" onclick="updates(<?=$id;?>)">Update</button></td>
            </tr>
        <?php
             }
             ?>
</div>
            </table>

   <div class="loginbox">
   <img src="../Images/user.jpg" class="user">
   <h1> Register your account </h1 >

   <form id="fff" action="../basic_info.php" method="post">
     <p>First Name</p>
      <input type="text" name="f_name" id="upd_f_name" placeholder="e.g Hamza">
      <p>Last Name</p>
      <input type="text" name="l_name" id="upd_l_name" placeholder="e.g Naveed">
      <p>Father name</p>
      <input type="text" name="father_name" id="upd_fathername" placeholder="e.g Naveed"required>
      <p>CNIC</p>
      <input type="text" name="cnic" id="upd_cnic" placeholder="e.g 35202-0000-00-00"required>
      <p>Email</p>
      <input type="email" name="email" id="upd_email" placeholder="e.g hamza@example.com"required>
      <p>Password</p>-
     <input type="password" name="pass" id="upd_pass" placeholder="Enter Password" required>
      <p>Address</p>
      <input type="text" name="address" id="upd_address" placeholder="e.g Garden Town, Lahore"required>
      <p>City</p>
      <input type="text" name="city" id="upd_city" placeholder="e.g Lahore">
     <input type="submit" onclick="sub()" name="" value="Register">
     <a href="login.php">Already got an account?<strong> Click me</strong></a>
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
<script>
    function updates(id){

        var upt_f_name      = document.getElementById("upd_f_name"+id).value;
        var upt_l_name = document.getElementById("upd_l_name"+id).value;
        var upt_fathername   = document.getElementById("upd_fathername"+id).value;
        var upt_cnic     = document.getElementById("upd_cnic"+id).value;
        var upt_email     = document.getElementById("upd_email"+id).value;
        var upt_pass     = document.getElementById("upd_pass"+id).value;
        var upt_address     = document.getElementById("upd_address"+id).value;
        var upt_city     = document.getElementById("upd_city"+id).value;

        document.getElementById("upd_f_name").value=upt_f_name;
        document.getElementById("upd_l_name").value=upt_l_name;
        document.getElementById("upd_fathername").value=upt_fathername;
        document.getElementById("upd_cnic").value=upt_cnic;
        document.getElementById("upd_email").value=upt_email;
        document.getElementById("upd_pass").value=upt_pass;
        document.getElementById("upd_address").value=upt_address;
        document.getElementById("upd_city").value=upt_city;
        document.getElementById("upd_id").value=id;
    }
</script>