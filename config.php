<?php
   define('DB_SERVER', '192.168.197.89:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'market');
   define('DB_DATABASE', 'market');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>