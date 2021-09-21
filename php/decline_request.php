<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $sender_id = $_POST["sender_id"];

    $query = $connection->prepare("DELETE from notifications where user_id = ? and sender_id =?");
    $query->bind_param("ii", $user_id, $sender_id);
    $query->execute();



?>