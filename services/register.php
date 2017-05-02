<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $asUsers = file_get_contents("services/users.txt");
    $ajUsers = json_decode($asUsers);


    array_push($ajUsers , $jUser);


    $asUsers = json_encode($ajUsers);
    file_put_contents("../services/user.txt", $asUsers);

?>