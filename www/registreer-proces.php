<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    echo "niet de juist methode gebruikt";
    exit;
}

if (!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['firstname']) || !isset($_POST['surname']) || !isset($_POST['adres']) || !isset($_POST['tel'])) {
    echo "een van van de velden is niet";
    exit;
}
if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['surname']) || empty($_POST['adres']) || empty($_POST['tel'])) {
    echo "een van van de velden is leeg";
    exit;
}

require 'database.php';

$email = $_POST['email'];
$voornaam = $_POST['firstname'];
$achternaam = $_POST['surname'];
$adres = $_POST['adres'];
$tel = $_POST['tel'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, first_name, last_name, adres, telefoonnummer, password) VALUES ('$email', '$voornaam', '$achternaam', '$adres', '$tel', '$password')";

if (mysqli_query($conn, $sql)) {
    header("location: login-page.php");
}
