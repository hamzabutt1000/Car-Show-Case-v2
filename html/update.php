<?php
$conn = new mysqli("localhost","root","","cars");
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $father_name = $_POST["father_name"];
        $cnic = $_POST["cnic"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $id= $_POST["id"];

if($id != ''){


    $upd = "update basic_info set f_name = '$f_name',l_name='$l_name',father_name=$$father_name,cnic='$cnic',email='$email',pass='$pass',address='$address',city='$city' where id = $id";

    if ($conn->query($upd) === TRUE) {
        echo "2";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


}else{


    $sqlid = "SELECT max(id)+1 as id  FROM basic_info";
    $resultid = $conn->query($sqlid);

    while($row = $resultid->fetch_assoc()) {
        $id = $row["id"];
    }


    $insert_sql = "insert into basic_info(f_name,l_name,father_name,cnic,email,pass,address,city)
            values(?,?,?,?,?,?,?,?)");
    $insert_sql->bind_param("$id",$f_name,$l_name,$father_name,$cnic,$email,$pass,$address,$city);
    echo $insert_sql;exit;

    if ($conn->query($insert_sql) === TRUE) {
        echo "1";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> 







