<?php
        $f_name = $_POST["f_name"];
        $l_name = $_POST["l_name"];
        $father_name = $_POST["father_name"];
        $cnic = $_POST["cnic"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $id = $_POST["id"];
        $conn = new mysqli("localhost","root","","cars");
        if($conn->connect_error){
            die("Connection Failed :" .$conn->connect_error);
        }
        else{
            $stmtt = $conn->prepare("insert into basic_info(f_name,l_name,father_name,cnic,email,pass,address,city) 
            values(?,?,?,?,?,?,?,?)");
            $stmtt->bind_param("ssssssss",$f_name,$l_name,$father_name,$cnic,$email,$pass,$address,$city);
            $stmtt->execute();
            echo "record updated";
            $stmtt->close();
            $conn->close();
        }
?> 