<?php
    include("connection.php");
    session_start();
    $user_id = $_SESSION["id"];
    $entered_str = $_GET["entered_str"];

    $query = $connection -> prepare(
        "SELECT first_name, last_name 
        from users 
        where first_name = ? or last_name = ? AND id NOT IN 
            (SELECT blocked_user_id 
            FROM blocked 
            where user_id = '$user_id')");
    $query -> bind_param("ss", $entered_str, $entered_str);
    $query -> execute();

    $results = $query -> get_result();

    $search_results = [];

    while ($search_res = $results -> fetch_assoc()){
        $search_results[] = $search_res;
    }

    $jsonResults = json_encode($search_results);
    echo $jsonResults;


?>