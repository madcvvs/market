<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sqlUsername = "SELECT * FROM users WHERE username = '$myusername'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if ($count > 1) {
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;
        echo "Successfully egistered";
    } else {
        echo "User already exists!";           
    }
}