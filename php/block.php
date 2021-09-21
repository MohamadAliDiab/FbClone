<?php
    include("connection.php");
    session_start();
    $user_id = 4;
    $blocked_user_id = 5;

    $query = $connection -> prepare("INSERT into blocked (user_id,blocked_user_id) VALUES (?,?)");
    $query->bind_param("ii", $user_id, $blocked_user_id);
    $query->execute();

    $query2 = $connection -> prepare("DELETE from connected where user_id = ? and user_id1 = ?");
    $query2->bind_param("ii", $user_id, $blocked_user_id);
    $query2->execute();


?>