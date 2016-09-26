<?php
   define('DB_SERVER', 'nssgdb1.cqwb0cplfcbc.ap-southeast-1.rds.amazonaws.com:3036');
   define('DB_USERNAME', 'php');
   define('DB_PASSWORD', 'phppassword');
   define('DB_DATABASE', 'php');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>