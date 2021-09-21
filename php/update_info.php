<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $bday = $_POST["bday"];
    
    
    // if (isset($_POST["first_name"]) && $_POST["first_name"] != ""){
    //     $first_name = $_POST["first_name"];
    // }

    // if (isset($_POST["last_name"]) && $_POST["last_name"] != ""){
    //     $last_name = $_POST["last_name"];
    // }

    // if (isset($_POST["email"]) && $_POST["email"] != ""){
    //     $email = $_POST["email"];
    // }

    // if (isset($_POST["bday"]) && $_POST["bday"] != ""){
    //     $bday = $_POST["bday"];
    // }


    $stmt = $connection -> prepare("UPDATE users set first_name = ?, last_name=?,  bday=?, email=? where id = ?");
    $stmt -> bind_param("ssssi", $first_name, $last_name,$bday,$email, $user_id);
    $stmt -> execute();

    $results = $stmt->get_result();

    $info_update_arr = [];

    while($info_update = $results -> fetch_assoc()){
        $info_update_arr[] = $info_update;
    }

    $jsonInfo_updated = json_encode($info_update_arr);
    echo $jsonInfo_updated;

?>