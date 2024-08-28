<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd= $_POST["pwd"];


    try {
        require_once "dth.inc.php";
        $stmt = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
        $stmt = $pdo->prepare($stmt);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();

    } catch (PDOException $th) {
        die("Connection failed: " . $th->getMessage());
    } 
}
else{
    header("Location: ../index.php");
}