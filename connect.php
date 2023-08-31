<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //database connection
    $conn = new mysqli('localhost','root','','test2');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname, email, message) values(?,?,?)");
        $stmt->bind_param("sss", $fullname, $email, $message);
        $stmt->execute();
        echo "Message sent";
        $stmt->close();
        $conn->close();

    }
    

?>