<?php

    $name= $_POST['name']
    $email= $_POST['email']
    $dob= $_POST['dob']
    $username= $_POST['username']
    $password= $_POST['password']


    //connection
    $conn =new mysqli('','','','');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt =$conn -> prepare("insert into signup(name, email, dob, username, password) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $dob, $username, $password);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close();
        $conn->close();
    }
?>
