<?php
session_start(); 
include "connection.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    if (empty($email)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else
    {
        $sql = "SELECT * FROM login1 WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
if ($row['email'] === $email && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                header("Location: entering species name.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}