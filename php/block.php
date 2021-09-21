<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $blocked_user_id = $_GET["blocked_user_id"];

    $query = $connection -> prepare("INSERT into blocked (user_id,blocked_user_id) VALUES (?,?)");
    $query->bind_param("ii", $user_id, $blocked_user_id);
    $query->execute();

    $query2 = $connection -> prepare("DELETE from connected where user_id = ? and blocked_user_id = ?");
    $query2->bind_param("ii", $user_id,$blocked_user_id);
    $query2->execute();


?>