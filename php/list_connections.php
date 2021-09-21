<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];

    $query = $connection->prepare(
        "SELECT u.first_name, u.last_name 
        from connected c, users u
        Where u.id = c.user_id1 and c.user_id = ?");
    $query->bind_param("i" , $user_id);
    $query->execute();

    
    $results = $query -> get_result();

    $connections_arr = [];

    while ($connections = $results -> fetch_assoc()){
        $connections_arr[] = $connections;
    }

    $jsonConnections = json_encode($connections_arr);
    echo $jsonConnections;


?>