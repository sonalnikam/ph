<?php
   define('DB_SERVER', '172.30.11.121:3306');
   define('DB_USERNAME', 'sonal');
     define('DB_PASSWORD', 'sonal');
   define('DB_DATABASE','mydb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
?>