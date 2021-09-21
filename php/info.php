<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];

    $stmt = $connection -> prepare(
        "SELECT first_name , last_name , bday , gender, email 
        from users
        where id = ?");
    $stmt -> bind_param("i", $user_id);
    $stmt -> execute();

    $results = $stmt->get_result();

    $info_arr = [];

    while($info = $results -> fetch_assoc()){
        $info_arr[] = $info;
    }

    $jsonInfo = json_encode($info_arr);
    echo $jsonInfo;

?>