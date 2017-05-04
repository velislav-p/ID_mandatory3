<?php
$username = $_POST["username"];
$asUsers = file_get_contents("users.txt");
$ajUsers = json_decode($asUsers);

foreach($ajUsers as $jUser){
    if ($jUser->username == $username){
        $jUser->surname = $_POST["surname"];
        $jUser->email = $_POST["email"];
        $jUser->cvr = $_POST["cvr"];
        $jUser->creditCardNumber = $_POST["creditCardNumber"];
        $jUser->creditCardCvv = $_POST["creditCardCvv"];
        $jUser->creditCardDate = $_POST["creditCardDate"];
        $jUser->address = $_POST["address"];

    }
}
$asUsers = json_encode($ajUsers);
file_put_contents("users.txt", $asUsers);