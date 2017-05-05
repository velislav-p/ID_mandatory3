<?php
$username = $_GET["username"];
$asUsers = file_get_contents("users.txt");
$ajUsers = json_decode($asUsers);

foreach($ajUsers as $jUser){
        if ($jUser->username == $username){
            echo json_encode($jUser);
            die;
        }
}
echo '{"status":"error"}';