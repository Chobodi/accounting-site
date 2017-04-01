<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();

// establishing the MySQLi connection


require_once './db/dbConnection.php';


// checking the user

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //search user

    $sel_user = "select * from users where username='$username' AND password='$password'";

    $run_user = mysqli_query($conn, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    

    //check user

    if ($check_user > 0) {

        $sql = "SELECT id from users WHERE username='" . $username . "';";
        $result = $conn->query($sql);

        
        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row["id"];
                
            }
        }
        echo "<script>window.open('admin.php','_self')</script>";
    }

   
    else {

        echo "<script>alert('Email or password is not correct, try again!')</script>";
        echo "<script>window.open('index.php#login','_self')</script>";
    }
    
}
?>