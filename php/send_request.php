<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $requested_id = $_POST["requested_id"];
    $body = $_POST["body"];

    $query = $connection -> prepare("INSERT into notifications (user_id,sender_id,body) VALUES (?,?,?)");
    $query -> bind_param("iis", $requested_id, $user_id,$body);
    $query -> execute();

?>