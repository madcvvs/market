<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sqlUsername = "SELECT * FROM users WHERE username = '$myusername'";
    $result = mysqli_query($db, $sqlUsername);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if ($count == 0) {
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;
        $sqlRegister = "INSERT INTO users (username, password) VALUES ('$myusername', '$mypassword')";
        $result = mysqli_query($db, $sqlRegister);
        echo "Successfully registered";
    } else {
        echo "User already exists!";
    }

    echo "<script> setTimeout(function(){document.location = 'index.php'}, 5000);  </script>";
}