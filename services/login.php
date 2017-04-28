<?php
session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

    $asUsers = file_get_contents("users.txt");
    $ajUsers = json_decode($asUsers);


    foreach($ajUsers as $jUser){
        if ($jUser->username == $username && $jUser->password == $password){
            $jUser->status = "ok";
            $_SESSION["user"] = $jUser;
            echo json_encode($jUser);
            die;
        }
    }

    echo json_encode("{'status':'error'}");

