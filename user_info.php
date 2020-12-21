
<?php
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $conn = new mysqli("localhost","root","","cars");
        if($conn->connect_error){
            die("Connection Failed :" .$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into user_info(Username,Password) 
            values(?,?)");
            $stmt->bind_param("ss",$Username,$Password);
            $stmt->execute();
            echo "record inserted";
            $stmt->close();
            $conn->close();
        }
?>
