<?php

/* Attempt to connect to MySQL database */
$link = mysqli_connect('remotemysql.com','vNUkda7PJi','BrgbpTWV2C','vNUkda7PJi');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>