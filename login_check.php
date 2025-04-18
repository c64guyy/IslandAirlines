<?php

$host = "localhost";
$db = "my_skymate";
$user = "root";
$pass = "";


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = md5($_POST['password']);


$sql = "SELECT * FROM utenti WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2 style='text-align:center; color:green;'>Login riuscito! Benvenuto $username.</h2>";
} else {
    echo "<h2 style='text-align:center; color:red;'>Login fallito. Controlla i dati.</h2>";
}

$conn->close();
