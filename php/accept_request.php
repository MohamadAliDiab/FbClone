<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $user_id1 = $_GET["sender_id"];

    $query = $connection->prepare("INSERT into connected(user_id,user_id1) VALUES(?,?)");
    $query->bind_param("ii", $user_id,$user_id1 );
    $query->execute();

    $query2 = $connection->prepare("DELETE from notifications where user_id = ? and sender_id =?");
    $query2->bind_param("ii", $user_id, $user_id1);
    $query2->execute();

?>