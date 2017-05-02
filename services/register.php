<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $asUsers = file_get_contents("users.txt");
    $ajUsers = json_decode($asUsers);

    $newUser = new stdClass();

    $newUser->username = $username;
    $newUser->password = $password;

    array_push($ajUsers , $newUser);


    $asUsers = json_encode($ajUsers);
    file_put_contents("users.txt", $asUsers);

    echo json_encode($newUser);
?>