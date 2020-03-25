<?php

    $email = "";
    $password_1 = "";
    $password_2 = "";
    $name = "";

    $errors = array();

    $db = new mysqli('remotemysql.com:3306','vNUkda7PJi','BrgbpTWV2C','vNUkda7PJi');
    

    if(isset($_POST['register'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $name = mysqli_real_escape_string($db, $_POST['name']);


        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password_1) || empty($password_2)){
            array_push($errors, "Password is required");
        }
        if(empty($name)){
            array_push($errors, "Name is required");
        }
        if($password_1 != $password_2){
            array_push($errors, "Passwords are different");
        }
        if(count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO users (email, pass, username, c1, c2, c3, c4)
             VALUES ('$email', '$password', '$name', 0, 0, 0, 0)";
            if(mysqli_query($db, $sql)){
                   echo "<p>Konto utworzone!</p>";
            }
        }
    }





?>