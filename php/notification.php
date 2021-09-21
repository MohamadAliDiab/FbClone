<?php
    include("connection.php");
    session_start();
    $user_id = 4;

    $query = $connection -> prepare ("SELECT u.first_name , u.last_name 
    FROM notifications n , users u 
    where n.user_id = ? AND n.sender_id = u.id");
    $query -> bind_param("i", $user_id);
    $query -> execute();

    $results = $query -> get_result();

    $notifications_arr = [];

    while ($notifications = $results -> fetch_assoc()){
        $notifications_arr[] = $notifications;
    }

    $jsonNotifications = json_encode($notifications_arr);
    echo $jsonNotifications;


?>
