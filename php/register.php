<?php
    include("connection.php");

    if (isset($_POST["first_name"]) && $_POST["first_name"] != ""){
        $first_name = $_POST["first_name"];
    }

    if (isset($_POST["last_name"]) && $_POST["last_name"] != ""){
        $last_name = $_POST["last_name"];
    }

    if (isset($_POST["gender"]) && $_POST["gender"] != ""){
        $gender = $_POST["gender"];
    }

    if (isset($_POST["birthday"]) && $_POST["birthday"] != ""){
        $birthday = $_POST["birthday"];
    }
    
    if (isset($_POST["email"]) && $_POST["email"] != ""){
        $email = $_POST["email"];
    }

    if (isset($_POST["password"]) && $_POST["password"] != ""){
        $password = hash('sha256', $_POST['password']);
    }


    $stmt = $connection -> prepare("INSERT INTO users(first_name,last_name,bday,gender,email,password) VALUES(?,?,?,?,?,?)");
    $stmt -> bind_param("ssssss", $first_name, $last_name,$birthday,$gender,$email,$password);
    $stmt -> execute();

    $stmt -> close();
    $connection -> close();
    header("Location:../index.html");

?>