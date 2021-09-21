<?php
    include("connection.php");
    session_start();

    if (isset($_POST["email"]) && $_POST["email"] != ""){
        $email = $_POST["email"];
    }else{
        die("Try harder");
    }

    if (isset($_POST["password"]) && $_POST["password"] != ""){
        $password = hash('sha256', $_POST['password']);
    }

    $x = $connection -> prepare ("SELECT * FROM users WHERE email = ? and password = ?");
    $x -> bind_param ("ss", $email, $password);
    $x -> execute();

    $result = $x ->get_result();
    $row = $result ->fetch_assoc();
    if (isset($row["email"]) && isset($row["password"])){
        $_SESSION["first_name"] = $row["first_name"];
        $_SESSION["last_name"] = $row["last_name"];
        $_SESSION["gender"] = $row["gender"];
        $_SESSION["bday"] = $row["bday"];
        $_SESSION["id"] = $row["id"];
        $_SESSION["logged_in"] = $email;
        header("Location:home.php");

    }else{
        echo "Wrong email or password, please try again";
        header("Location:../index.html");
    }



    




?>