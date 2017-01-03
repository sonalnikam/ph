<?php
 // DB connection info
 
 try{
     $conn = mysqli_connect("172.30.11.121:3306","sonal","sonal","mydb");


     $sql1 = "CREATE TABLE IF NOT EXISTS users (
 id int(11) NOT NULL AUTO_INCREMENT,
 name varchar(50) NOT NULL,
 username varchar(50) NOT NULL,
 email varchar(50) NOT NULL,
 password varchar(50) NOT NULL,
 contact varchar(50) NOT NULL,
 qual varchar(50) NOT NULL,
 country varchar(50) NOT NULL,
 trn_date datetime NOT NULL,
 PRIMARY KEY (id)
 );";
 
      mysqli_query($conn, $sql1) or die("DB connection could not be established");

 }
 catch(Exception $e){
     die(print_r($e));
 }
 echo "<h3>Table created.</h3>";
 
 
 ?>