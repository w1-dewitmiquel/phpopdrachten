<?php

$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes",
    "Miquel" => "bekend"
);

if ($_POST['username'] == $authUsers && $_POST['password'] == $authUsers)
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}
else {
    $message = "Ongeldige username/wachtwoord {$_POST['username']}, probeer het nog eens.";
    include "opdracht6.1.php";
}
?>