<?php 
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $user_id1 = $_POST["friend_id"];

    $query = $connection->prepare("DELETE from connected where user_id = ? and user_id1 = ?");
    $query->bind_param("ii", $user_id, $user_id1);
    $query->execute();

?>