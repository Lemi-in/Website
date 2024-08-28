<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd= $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dth.inc.php";
        $stmt = $pdo->prepare("INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)");

        $hashed = password_hash($pwd, PASSWORD_BCRYPT, ["cost" => 12]);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashed);
        $stmt->bindParam(":email", $email);
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