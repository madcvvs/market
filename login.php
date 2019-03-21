<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
    if ($count > 1) {
        //session_register("myusername");
        //$_SESSION['login_user'] = $myusername;
        echo "Logged in";
    } else {
        echo "Incorrect username or password!";           
    }
}